<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Order;
use App\Province;
use App\Address;
use App\AddressesDelivery;
use Hash;

class CustomerController extends Controller
{
 
   public function login(){
   	return view('Customer.login-form');
    
   }

    public function postLogin(Request $request)
    {
     
    if(Auth::guard('customer')->attempt(['email'=>$request->email, 'password'=>$request->password,'user_type'=>'customer'])) 
       {
        return redirect('customer/dashboard');
        exit;
        }
        else
        {
          // die(print("fail"));
         // session()->flash('error','Invalid Login attempt');
         return redirect()->back()->with('error','Invalid Login attempt');
         exit;
        }
  }
  public function dashboard(){
      return view('Customer.customer-dashboard');
   }

   public function register()
   {
     $provinces=Province::get();
     return view('Customer.register',compact('provinces'));
   }
   public function postRegister(Request $request)
   {
     $request->validate([
             'firstname'=>'required',
             'lastname'=>'required',
             'phoneno'=>'required',
             'password' => 'required|min:6',
             'email'=>'required|email|unique:users',
             'confirm_password' => 'required|same:password',
             'province'=>'required',
             'city'=>'required',
             'postalcode'=>'required'
             ]);
     $user=new User();
     $user->firstname=$request->firstname;
     $user->lastname=$request->lastname;
     $user->role_id=1;
     $user->email=$request->email;
     $user->password=Hash::make($request->password);
     $user->status=1;
     $user->address=$request->address;
     $user->phone=$request->phoneno;
     $user->verified=1;
     $user->user_type='customer';
     $user->postalcode=$request->postalcode;
     $user->city=$request->city;
     $user->province=$request->province;
     try{
      $user->save();
      return redirect('customer/login')->with('success',"You are successfully registered.Please login your account.");
     }
     catch(Exception $e)
     {
       return redirect()->back()->with('error',"Something went wrong.Please try again later.");
     }

   }
   
   public function home(){

// return view('Customer.my-account');
   	 if(auth()->guard('customer')->user())
     {
      $path='dashboard';
      $customer=User::where('id',auth()->guard('customer')->user()->id)->first();
      
      // die(print_r($orders));
      return view('Customer.my-account',compact('customer','path'));
     }
     else
     {
      return redirect('customer/login');
     }
   }
   public function editProfile(Request $request)
   {

    $request->validate([
             'firstname'=>'required',
             'lastname'=>'required',
             'phoneno'=>'required',
             'confirm_password' => 'same:password',
             'province'=>'required',
             'city'=>'required',
             'postalcode'=>'required'
             ]);
     $id=auth()->guard('customer')->user()->id;
     $user=User::find($id) or abort(404);
     $user->firstname=$request->firstname;
     $user->lastname=$request->lastname;
     $user->email=$request->email;
     if($request->password!='')
       $user->password=Hash::make($request->password);
     $user->bio=$request->address;
     $user->phone=$request->phoneno;
     $user->postalcode=$request->postalcode;
     $user->city=$request->city;
     $user->province=$request->province;
     try{
      $user->save();
      return redirect()->back()->with('success',"Profile edit successfully.");
     }
     catch(Exception $e)
     {
      return redirect()->back()->with('error',"Something went wrong.Please try again later.");
     }
     
   }
   public function orders()
   {
    $customer=User::where('id',auth()->guard('customer')->user()->id)->first();
    $orders=Order::where('user_id',auth()->guard('customer')->user()->id)->get();
    // die(print_r($orders));
    $path='orders';
    return view('Customer.orders',compact('orders','customer','path'));
   }
   public function addresses()
   {
    $path='addresses';
    $customer=User::where('id',auth()->guard('customer')->user()->id)->first();
   $shippingaddress=AddressesDelivery::where(['user_id'=>auth()->guard('customer')->user()->id])->get();
    // die(print_r($orders));
    return view('Customer.addresses',compact('customer','shippingaddress','path'));
   }
   public function editAddress($id)
   {
     $path='addresses';
    $customer=User::where('id',auth()->guard('customer')->user()->id)->first();
    $provinces=Province::get();
    $address=AddressesDelivery::whereId($id)->first();
    return view('Customer.editaddress',compact('customer','address','provinces','path'));
   }
   public function downloads()
   {
    $path='downloads';
    $customer=User::where('id',auth()->guard('customer')->user()->id)->first();
   
    // die(print_r($orders));
    return view('Customer.download',compact('customer','path'));
   }
   public function account_details()
   {
    $path='accounts';
    $customer=User::where('id',auth()->guard('customer')->user()->id)->first();
    $provinces=Province::get();
    // die(print_r($orders));
    return view('Customer.account-details',compact('customer','provinces','path'));
   }
   public function cart()
   {
    return redirect('shop/cart');
   }
   public function logout(){
    Auth::guard('customer')->logout();
    return redirect('/customer/login')->with('success','Logout Successfully');
   }
   public function addAddress()
   {
     $path='addresses';
      $customer=User::where('id',auth()->guard('customer')->user()->id)->first();
      $provinces=Province::get();
      return view('Customer.editaddress',compact('customer','provinces','path'));
   }
   public function saveAddress(Request $request)
   {
      $request->validate([
             'firstname'=>'required',
             'lastname'=>'required',
             'province'=>'required',
             'city'=>'required',
             'address'=>'required',
             'postalcode'=>'required'
             ]);
      if($request->id !='')
      {
      $address=AddressesDelivery::where('id',$request->id)->first();
      $message="Updated";
      }
      else
       {
        $address=new AddressesDelivery;
        $address->user_id=auth()->guard('customer')->user()->id;
        $message="Added";
      }

      $address->firstname=$request->firstname;
      $address->lastname=$request->lastname;
      $address->province=$request->province;
      $address->city=$request->city;
      $address->address=$request->address;
      $address->postalcode=$request->postalcode;
      // die(print_r($address));
      try{
        $address->save();
        return redirect('customer/addresses')->with('success','Address Successfully '.$message);
      }
      catch(Exception $e)
      {
         return redirect()->back()->with('error','Error in updation');
      }
      

   }
   public function trackMyOrder()
   {
    $path="track";
    $customer=User::where('id',auth()->guard('customer')->user()->id)->first();
    return view('Customer.trackorder',compact('customer','path'));
   }
   public function getTrackMyOrder()
   {
    $path="track";
    $customer=User::where('id',auth()->guard('customer')->user()->id)->first();
    // return view('Customer.trackorder',compact('customer','path'));
   }
}
