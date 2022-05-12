<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use App\Slider;
use App\Navigation;
use App\Subscriber;

use App\Product;
use App\Category;
use App\Page;
use App\Banner;
use App\Faq;
use App\Policy;
use App\Contact;
use App\Mail\Contact1;
use Mail;
// use App\Mail\Contact;


class HomeController extends Controller
{
    public function index(){

        $sliders = Slider::where('status','=',1)->get();
        $banners = Banner::where('status','=',1)->get();
          $products = Product::with('categories','type','variants','store','relates')->whereHas('categories',function($query){
                            $query->where('category_id',15);})
          ->get();
          $allproducts = product::with('categories','type','variants','store','relates')->get();
          $categories = Category::with('products')->whereHas('products',function($query){$query->with('store','variants');})->where('status',1)->orderBy('display_order','ASC')->take(5)->get();
          return view('Pages.home',compact('sliders','products','categories','banners','allproducts'));

    }
    // public function  navbar(){

    //     $navigations=Navigation::with('children','parent')->whereNull('parent_id')->get();
    //    //die(print_r($navigations));
    //     return view('layouts.includes.navigation',compact('navigations'));

    // }
    public function subscription(Request $request)
    {
    	$subscriber=Subscriber::where('email',$request->email)->get();
    	$message="";
    	if(count($subscriber)==0)
    	{
        $subscribers=new Subscriber();
        $subscribers->email=$request->email;
        $subscribers->save();
        }
        else
        {
           $message="You are already a subscribed user.";
        }

        session()->put('subscribe',1);
        return view('Pages.subscription-thankyou',compact('message'));
    }
    public function contactus()
    {
        $page=Page::where('slug','contact-us')->first();
        return view('Pages.contactus',compact('page'));
    }
    public function aboutus()
    {
        $page=Page::where('slug','about-us')->first();
        return view('Pages.aboutus',compact('page'));
    }
    public function faqs()
    {
        $faqs=Faq::orderBy('display_order','ASC')->get();
        return view('Pages.faqs',compact('faqs'));
    }
    public function policies()
    {
        $faqs=Policy::where('status',1)->get();
        return view('Pages.policies',compact('faqs'));
    }
    public function search()
    {
        $search=request()->keyword;
        if($search !='')
        {
            
        $productsquery = Product::with('categories','type','variants','store')->whereHas('variants',function($q) {
	   	   		                $q->where('published',1);
	   	                    })
	   	                    ->where('name','like','%'.$search.'%')
	   	                    ->orWhere('sku','like','%'.$search.'%')
	   	                    ->orWhere('description','like','%'.$search.'%')
	   	                    ->orWhere('tag','like','%'.$search.'%');
	   	$products = $productsquery->paginate(12);
	   //	die(print_r($products));
	   	$categories = Category::withCount('products')->get();
	   //	$category = Category::where('slug','=',$slug)->first() or abort(404);
	   	return view('Pages.products-details',compact('products','categories','search')); 
        }
        else
        {
            return redirect()->back();
        }
    }

    public function storeContactus(Request $request){
          $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
         ]);
        $contact          = new Contact;
        $contact->name    = $request->name;
        $contact->email   = $request->email;
        $contact->subject = $request->subject;
        $contact->message =  $request->message;
        $contact->save();
        
        
        // $m['name']=$request->name;
        
        //  \Mail::send('Emails.contact', array(
        //     'name' => $request->get('name'),
        //     'subject' => $request->get('subject'),
        //     'message' => $request->get('message'),
        //     'email' => $request->get('email'),
        // ), function($message) use ($request){
        //     $message->from($request->email);
        //     $message->to('ancelindigital@gmail.com')->subject($request->get('subject'));
        // });
        
        Mail::to('ancelindigital@gmail.com')->send(new Contact1($contact));


        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    
    }
}