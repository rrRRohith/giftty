<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\VendorRequest;
use App\Http\Requests\VendorStoreRequest;
use App\Http\Traits\UploadPictureTrait;
use Illuminate\Support\Str;
use App\User;
use App\Store;
use App\Province;
use App\VendorCategory;
use Auth;
use Hash;


class VendorController extends Controller
{
        use UploadPictureTrait;
        public function login()
        {    
       	    return view('Vendor.login-form'); 
        }

        public function postLogin(Request $request)
        {
            if(Auth::guard('vendor')->attempt(['email'=>$request->email, 'password'=>$request->password,'user_type'=>'vendor'])) 
              {
                return view('Vendor.dashboard');
                exit;
              }
            else
             {
               session()->flash('message','Invalid Login attempt');
               return redirect('/seller/login');
               exit;
             }
        }
       
        public function dashboard(){
            $vendor = auth()->user();
            return view('Vendor.dashboard',compact('vendor'));
        }

        public function editProfile()
        { 
            $vendor = auth()->user();
            return view('Vendor.profile-edit', compact('vendor'));
        }

        public function updateProfile(Request $request)
        { 
            $id = auth()->user()->id;
            $vendor=User::where('id',$id)->first();
            $vendor->firstname=$request->input('firstname');

            try
            {
                $vendor->save();
                session()->flash('message',alertMessage('Successfully updated the vendor Profile!',1));
                return redirect(seller('profile'));
             }
             catch(\Exception $e) {
                session()->flash('message',alertMessage('Unable to update Vendor Profile! '.$e->getMessage(),0));
                return redirect(seller('profile'));
                exit;
            } 
            
        }

        // public function showStore()
        // { 
        //    $vendor = auth()->user();
        //    $store = Store::where('user_id',$vendor->id)->first();
        //    $provinces = Province::orderBy('name','ASC')->get();
        //    $vendorCategories = VendorCategory::orderBy('name','ASC')->get();
        //    return view('Vendor.store-info',compact('vendor','store','provinces','vendorCategories'));
        // }


        public function editStore()
        { 
           $vendor = auth()->user();
           $store = Store::where('user_id',$vendor->id)->first() or abort(404);
           $provinces = Province::orderBy('name','ASC')->get();
           $vendorCategories = VendorCategory::orderBy('name','ASC')->get();
           return view('Vendor.store-form',compact('vendor','store','provinces','vendorCategories'));
        }

        public function updateStore(VendorStoreRequest $request ,$id)
        { 
            $vendor =   User::where('id',$id)->first() or abort(404);
            $vendor->phone  = $request->input('phone');
            $vendor->bio    = $request->input('bio');
            $vendor->status = $request->has('status') ? 1:0;
            $vendor->user_type='vendor';
            try
            {
                $vendor->save();
                $store=Store::where('user_id',$id)->first() or abort(404);
                $store->name=$request->input('name');
                $store->user_id = $vendor->id;
                $store->slug = Str::slug($request->name);
                $store->city = $request->input('city');
                $store->postalcode = $request->input('postalcode');
                $store->province = $request->input('province');
                $store->vendor_category_id=$request->input('vendor_category_id');
                if($picture = $this->__uploadPicture('logo','images/users/'. $store->id.'/')) 
                {
                  @unlink('images/users/'.$store->id.'/'.$store->logo);
                  $store->logo = $picture;
                  $store->save();
                }
           
                session()->flash('message',alertMessage('Successfully updated the vendor!',1));
                return redirect(seller('store/edit'));
                exit;
            }   
            catch(\Exception $e) {
                session()->flash('message',alertMessage('Unable to update vendor! '.$e->getMessage(),0));
                return redirect(seller('store/edit'));
                exit;
            } 

        }
 

        public function logout()
        {
           	Auth::guard('vendor')->logout();
            return redirect('/seller/login');
        }

        public function changePassword()
        {
            return view('Vendor.change-password');  
        }

        public function saveChangePassword(Request $request)
        {
             $this->validate($request, [
             'password' => 'required',
             'confirm_password' => 'required|same:password']);
             $vendor=auth()->user();
             if($request->password != '')
                    $vendor->password = Hash::make($request->password);
                    
                try
                {
                    $vendor->save();
                    session()->flash('message',alertMessage('Successfully changed the Password!',1));
                    return redirect()->back();
                    exit;
                }   
                catch(\Exception $e) {
                    session()->flash('message',alertMessage('Unable to change the password! '.$e->getMessage(),0));
                    return redirect()->back();
                    exit;
                }   
        }
      
}
