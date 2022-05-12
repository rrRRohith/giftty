<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;
use App\CategoryProduct;
use App\ProductVariant;
use App\Product;
use App\Cart;
use App\Item;
use App\Province;
use App\Address;
Use App\Order;
use App\Http\Requests\AddressRequest;
use Crypt;
use Auth;
use App\User;
use App\Discount;
use App\AddressesDelivery;
class ShopController extends Controller
{
    public function addItem(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'variant_id' => 'required|exists:product_variants,id',
            'quantity' =>'required|min:1'
        ]);
        
        $product = Product::with('store')->whereId($request->product_id)->first() or abort(404);
        $variant = ProductVariant::find($request->variant_id) or abort(404);
        
        if(session()->has('cart_id'))
        {
            $cart = Cart::find(session('cart_id'));
        }
        else
        {
            $cart=new Cart();
          
            $cart->save();    
            session()->put('cart_id',$cart->id);
        }
        $item = new Item();
        $item->product_id       = $request->product_id ;
        $item->variant_id       = $request->variant_id ;
        $item->product_name     = $product->name;
        $item->slug             = Str::slug($product->name );
        $item->vendor_id        = $product->store->user_id;
        $item->store_id         = $product->store_id;
        $item->Product_picture  = $product->id.'/'.($variant->picture != '' ? $variant->picture:$product->picture);
        $item->variant_name     = $variant->name;
        $item->price            = $variant->price ;
        $item->quantity         = $request->quantity;
        $item->product_sku      = $product->sku;
        $item->delivery_date    = date('Y-m-d H:i:s',time() + (60*60*24*2));
        $item->cart_id          = $cart->id;
        
        try{
            $item->save();
            session()->flash('message',alertMessage('Item successfully saved',1));
            return redirect('/shop/cart');
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Item not  successfully saved'.$e->getMessage(),0));
            return redirect()->back();
            exit;
        }
    }


  public function displayCart()
  {
         $cart = Cart::with('items')->whereId(session('cart_id'))->first();
        //  $cart = Cart::with(['items'=>function($q){$q->with('products');}])->whereId(session('cart_id'))->first();
         // die(print_r($cart));
        return view('Pages.cart',compact('cart'));
  }

  public function updateQuantity(Request $request,$id)
  {
        $item = Item::find($id) or abort(404);
        $item->quantity = $request->quantity;
        $item->save();
        return redirect('/shop/cart');
  }

  public function delete($id)
  {
        $item=Item::where('id',$id)->first() or abort(404);
        //  die(print_r($item));
        try{
        $item->delete();   
        session()->flash('message',alertMessage('Successfully deleted the item!',1));
        return redirect('/shop/cart');
        }
        catch(\Exception $e) {
        session()->flash('message',alertMessage('Unable to deleted the item! '.$e->getMessage(),0));
        return redirect('/shop/cart');
        }               
  }

  public function checkout()
  {


         $cart = Cart::with('items','billing','delivery')->whereId(session('cart_id'))->first();

         if(!$cart || $cart->items->count() < 1) {
           return redirect('/shop/cart');
           exit;
         }

         if($cart->email == '') {
           return redirect('/shop/login');
           exit;
         }


       $user_id = auth()->guard('customer')->id() ?? null;
       $billing = Address::where('type','=','billing')->where('user_id',$user_id)->first();
       $shipping_addresses = Address::where('type','=','shipping')->where('user_id',$user_id)->first();
       $provinces = Province::OrderBy('name')->get();
       $carts = Cart::where('user_id',$user_id)->first();
       return view('Pages.checkout',compact('cart','provinces','billing','shipping_addresses','carts'));


  }

  public function postCheckout(AddressRequest $request)
  {

        $shipping= new Address();
        $shipping->firstname = $request->firstname;
        $shipping->lastname = $request->lastname;
        $shipping->address = $request->address;     
        $shipping->postalcode = $request->postalcode;
        $shipping->province = $request->province;
        $shipping->email = $request->email;
        $shipping->city = $request->city;
        $shipping->location_type = $request->location_type;
        $shipping->phone = $request->phone;
        $shipping->user_id =isset(Auth::guard('customer')->user()->id) ? Auth::guard('customer')->user()->id :NULL;
        $shipping->type = 'shipping';

        $billing = new Address();
        $billing->firstname = $request->billing_firstname;
        $billing->lastname = $request->billing_lastname;
        $billing->address = $request->billing_address;
        $billing->postalcode = $request->billing_postalcode;
        $billing->province = $request->billing_province;
        $billing->city = $request->billing_city;
        $billing->phone = $request->billing_phone;
        $billing->email = $request->billing_email;
        $billing->user_id = isset(Auth::guard('customer')->user()->id) ? Auth::guard('customer')->user()->id :NULL ;
        $billing->type = 'billing';
        try {
        $shipping->save();
        $billing->save();
        $cart = Cart::find(session('cart_id')) or abort(404);
        $cart->special_note = $request->special_note;
        $cart->card_message = $request->card_message;
      
        $cart->billing_id = $billing->id;
        $cart->delivery_id = $shipping->id;
        $cart->save();
        
        }
        catch(Exception $e) {
        }
        return redirect('cart/payment');
  }

  public function payment()
  {
        $cart = Cart::with('billing','delivery','items')->whereId(session('cart_id'))->first();
        if($cart->items->count() < 1)
        {
          return redirect('/shop/cart');
          exit;
        }
        if(!($cart->billing  && $cart->delivery)){
          return redirect('/shop/checkout');

        }
        return view('Pages.payment',compact('cart'));
  }

  public function postPayment(Request $request)
  {
        // die(print_r($request->all()));
        // Validate form entries
        $request->validate([
        'name'=>'required',
        'number'=>'required|min:12|max:19',
        'cvv'=>'required|min:3',
         'expiry_month'=>'required|in:01,02,03,04,05,06,07,08,09,10,11,12',
        'expiry_year'=>'required|numeric|min:2'
        ]);
        
        $cart = Cart::with('items')->find(session('cart_id')) or abort(404);

        $order = new Order();
        $order->cart_id=$cart->id;
        $order->status=1;
        $order->grand_total=$cart->total;
        $order->user_id=isset(Auth::guard('customer')->user()->id) ? Auth::guard('customer')->user()->id :NULL ;
        $order->save();
        
        foreach($cart->items as $item) {
            $item->status = 1;
            $item->save();
        }
        
        $cart->status=0;
        $cart->save();
        
        if($cart->discount_id !='')
        {
            $discount=Discount::whereId($cart->discount_id)->first();
            $discount->use_count=$discount->use_count+1;
            $discount->save();
        }
        
        session()->forget('cart_id');
        return redirect('/shop/thankyou/'.encrypt($order->id));
  }

  public function thankyou($did)
  {
        // Get the order details with $request->order_id
        // die(print_r($id));
        $id= decrypt($did);
        $order=Order::with('carts')->where('id',$id)->first() or abort(404);
        //die(print_r($order));
        // Show thank you page with Thanks msg and Invoice number  
        return view('Pages.thankyou',compact('order'))  ;
  }


  public function  checkoutLogin()
  {
        return view('Pages.checkout-login');
  }


  public function login()
  {
        return view('Pages.checkout-login');
  }

  public function postLogin(Request $request)
  {
        if(Auth::guard('customer')->attempt(['email'=>$request->email, 'password'=>$request->password,'user_type'=>'customer'])) 
        {
        //die(print_r(Auth::guard('customer')->user()->id));
        $cart = Cart::find(session('cart_id')) or abort(404);
        $cart->email = $request->email;
        $cart->user_id = Auth::guard('customer')->user()->id;
        $cart->save();
        return redirect('/shop/checkout');
        exit;
        }
        else
        {
        return redirect()->back()->with('error','Invalid Login attempt');
        exit;
        }
        }
  public function guestLogin(Request $request)
  {
        $provinces = Province::OrderBy('name')->get();
        $user = User::where('email','=',$request->email)->first();
        if($user)
        {
          return redirect('/shop/login')->with('error','This Email already exists. Please try login');
          exit;
        }
        else
        {
          $cart = Cart::find(session('cart_id')) or abort(404);
          $cart->email = $request->email;
          $cart->save();
          $cart = Cart::with('items','billing','delivery')->whereId(session('cart_id'))->first();

          if($cart->email == '')
          {
            return redirect('/shop/login');
            exit;
          }
          return view('Pages.checkout',compact('provinces','cart'))->with('success','Details should enter when checkout it');
          exit;
        }
  }

  public function coupon(Request $request)
  {

    if($request->has('coupon') && $request->coupon != '')
    {   
            
          $cart = Cart::whereId(session('cart_id'))->first();
          $discount = Discount::whereCode($request->coupon)
                              ->where('start_time','<=',date('Y-m-d H:i:s'))
                              ->where('end_time','>=',date('Y-m-d H:i:s'))
                              ->whereRaw('`use_count` < `max_usage` ')->first();

          if($discount)
           {
              if($cart->subtotal >= $discount->min_amount)
              {
                 $cart->discount_code = $discount->code;
                 $cart->discount_id = $discount->id;
                 $cart->save();
                //  $discount->use_count=$discount->use_count+1;
                //  $discount->save();

              } 
              else
              {
                 return redirect()->back()->with('error','You need Minium purchase for '.showPrice($discount->min_amount));
              }
           }
           else
           {
              return redirect()->back()->with('error','This coupon is not available');
           }

    }
    else
    {
        $cart=Cart::whereId(session('cart_id'))->first();
        $cart->discount_id=NULL;
        $cart->discount_code=NULL;
        $cart->save();

    }
     return redirect()->back();
  }
}  