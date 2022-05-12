<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Traits\UploadPictureTrait;
use App\User;
use Auth;
use Hash;

//use Illuminate\Foundation\Auth\AuthenticatesUsers;



class AdminController extends Controller
{
 
    use UploadPictureTrait;
    public function login(){
     	    return view('Admin.login-form');  
    }

    public function postLogin(Request $request){
         if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password,'role_id'=>1,'user_type'=>'admin'])) 
         {
          	return redirect('admin/dashboard');
         }
         else
         {
          session()->flash('message','Invalid Login attempt');
          return redirect('/admin/login');
          exit;
         }
    }

    public function dashboard(){
        return view('Admin.dashboard');
    }
     
    public function hashMake(){
      echo  Hash::make('admin');

    } 

   public function edit()
    {
         
        $admin = auth()->user();
        //die(print_r($admin));
        return view('Admin.admin-edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request)
    {
        $admin=auth()->user();
        $admin->firstname = $request->input('firstname');
        $admin->lastname = $request->input('lastname');
        $admin->email = $request->input('email');
        $admin->status=$request->input('status') ? 1:0;
        if($request->password != '')
            $admin->password = Hash::make($request->password);
        try
        {
            $admin->save();
            if($picture = $this->__uploadPicture('picture','images/user/'.$admin->id.'/')) {
                @unlink('images/user/'.$admin->picture);
                $admin->picture = $picture;
                $admin->save();
            }
            session()->flash('message',alertMessage('Successfully updated the admin!',1));
            return redirect(admin('dashboard'));
            exit;
        }   
        catch(\Exception $e) {
           //  die(print_r($e->getMessage()));
            session()->flash('message',alertMessage('Unable to update admin! '.$e->getMessage(),0));
            return redirect(admin('dashboard'));
            exit;
        }   
    }

    public function logout(){
        Auth::guard('admin')->logout();
      return redirect('/admin/login');
  }
}
