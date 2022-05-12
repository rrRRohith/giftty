<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Province;
use Auth;

class LoginController extends Controller
{



    public function login(){
        return view('Pages.checkout-login');
    }


    public function checkoutRegister()
    {
         $provinces=Province::get();
         return view('Pages.checkout-register',compact('provinces'));
    }

    public function PostCheckoutRegister(Request $request)
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
                  return redirect('/shop/login')->with('success',"You are successfully registered.Please login your account.");
                 }
             catch(Exception $e)
            {
                return redirect()->back()->with('error',"Something went wrong.Please try again later.");
            }

    }
    public function postLogin(Request $request)
    {
     
        if(Auth::guard('customer')->attempt(['email'=>$request->email, 'password'=>$request->password,'user_type'=>'customer'])) 
        {
            return redirect('/shop/checkout');
            exit;
        }
        else
        {
       
         return redirect()->back()->with('error','Invalid Login attempt');
         exit;
        }
  }
}
