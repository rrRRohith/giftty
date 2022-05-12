<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Store;
use App\Province;
use App\VendorCategory;
use App\Http\Requests\StoreRequest;
use App\Http\Traits\UploadPictureTrait;
use Illuminate\Support\Str;
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
       $store = Store::where('user_id','=',auth()->guard('vendor')->id())->first();
       return view('Vendor.store', compact('store'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
       
        return view('Vendor.store-form', compact('store','provinces'));
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
        try
        {
            $store->save();
            if($picture = $this->__uploadPicture('logo','images/users/'. $store->id.'/')) {
                @unlink('/images/users/'.$store->id.'/'.$store->logo);
                $store->logo = $picture;
            
            }
            $store->save();
            session()->flash('message',alertMessage('Successfully updated the store!',1));
            return redirect(seller('stores'));
            exit;
        }   
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update store! '.$e->getMessage(),0));
            return redirect(seller('stores'));
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
        $image = 'images/users/'.$store->id.'/'.$store->logo;
        try {
            $store->delete();
            @unlink($image);
            session()->flash('message',alertMessage('Successfully deleted the store!',1));
            return redirect('seller/stores');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the store! '.$e->getMessage(),0));
            return redirect('seller/stores');
        }             
     }

    
}

