<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Str;
use App\Store;
use App\Province;
use App\User;
use App\VendorCategory;
use App\Http\Traits\UploadPictureTrait;
use Hash;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use UploadPictureTrait;
    public function index()
    {
       $stores = Store::get();
       return view('Admin.stores', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces=Province::get();
        $vendors=User::orderBy('id', 'DESC')->where('user_type','vendor')->get();
        $vendorCategories=VendorCategory::get();
        return view('Admin.store-form')->withProvinces($provinces)->withVendors($vendors)->withVendorCategories( $vendorCategories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        
        $store = new Store;
        $store->name = $request->name;
        $store->address = $request->address;
        $store->user_id = $request->user_id;
        $store->slug = Str::slug($request->name);
        $store->city = $request->city;
        $store->postalcode = $request->postalcode;
        $store->province = $request->province;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->mobile = $request->mobile;
        $store->website = $request->website;
        $store->description = $request->description;
        $store->vendor_category_id=$request->vendor_category_id;
        $store->status = $request->has('status') ? 1:0;
        try {
            $store->save();
            if($picture = $this->__uploadPicture('logo','images/store/'. $store->id.'/')) {
               $store->logo = $picture;
            }
            $store->save();
            session()->flash('message',alertMessage('Successfully created the store!',1));
            return redirect(admin('stores'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create store! '.$e->getMessage(),0));
            return redirect(admin('stores'));
            exit;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = Store::findOrFail($id);
        $provinces=Province::get();
        $vendorCategories=VendorCategory::get();
        $vendors=User::orderBy('id', 'DESC')->where('user_type','vendor')->get();
        return view('Admin.store-form', compact('store','provinces','vendors','vendorCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
        $store=Store::find($id);
        $store->name = $request->input('name');
        $store->address = $request->input('address');
        $store->user_id = $request->input('user_id');
        $store->slug = Str::slug($request->name);
        $store->city = $request->input('city');
        $store->postalcode = $request->input('postalcode');
        $store->province = $request->input('province');
        $store->email = $request->input('email');
        $store->phone = $request->input('phone');
        $store->mobile = $request->input('mobile');
        $store->website = $request->input('website');
        $store->description = $request->input('description');
        $store->status = $request->input('status') ? 1:0;
        $store->vendor_category_id=$request->vendor_category_id;
        try
        {
            $store->save();
            if($picture = $this->__uploadPicture('logo','images/store/'. $store->id.'/')) {
                @unlink('images/store/'.$store->id.'/'.$store->logo);
                $store->logo = $picture;
                $store->save();
            }
            session()->flash('message',alertMessage('Successfully updated the store!',1));
            return redirect(admin('stores'));
            exit;
        }   
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update store! '.$e->getMessage(),0));
            return redirect(admin('stores'));
            exit;
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
     {
        $store = Store::findOrFail($id);
        $image = 'images/store/'.$store->id.'/'.$store->logo;
        try {
            $store->delete();
            @unlink($image);
            session()->flash('message',alertMessage('Successfully deleted the store!',1));
            return redirect('admin/stores');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the store! '.$e->getMessage(),0));
            return redirect('admin/stores');
        }             
     }

     public function updateStatus($id)
     {
        $store = Store::find($id) or abort(404);
        $store->status = !$store->status;
        $store->save();
        return response()->json(['status'=>'Status successfully changed']);
     }

    public function bulkDelete(Request $request) 
    {
        $usercount = 0;
        $result=''; 
        if($request->has('checked') && count($request->checked)) {  
          foreach($request->checked as $key=>$id) {
             $store = Store::findOrFail($id);
             $image = 'images/store/'.$store->id.'/'.$store->logo;
             try{
                $store->delete();
                $usercount++;
                @unlink($image);            
             }
             catch(\Exception $e) {
                 $result = "error while deleting the customer";                
             }
           }
        }
        if($usercount>0 && $result!='') {
           session()->flash('message',alertMessage('Unable to delete the store!' .$result ,0));
           return redirect(admin('stores'));
        }       
        else{ 
            session()->flash('message',alertMessage('Total ' .$usercount. ' store deleted',1));
            return redirect(admin('stores'));
        }
    }

}
