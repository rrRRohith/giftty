<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use Session;
use App\Http\Requests\BrandRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response


     */

    public function index()
    {
      $brands = Brand::get();
      return view('Admin.brands', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Admin.brand-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        $brand = new Brand ;
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->website = $request->website;
        $brand->slug = Str::slug($request->name);
        $brand->display_order = $request->display_order;
        $brand->status = $request->has('status') ? 1:0;
        try {
            $brand->save();
            session()->flash('message',alertMessage('Successfully created the brand!',1));
            return redirect(admin('brands'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create brand! '.$e->getMessage(),0));
            return redirect(admin('brands'));
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
        $brand = Brand::findOrFail($id);
        return view('Admin.brand-form', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, $id)
    {
        $brand=Brand::find($id);
        $brand->name = $request->input('name');
        $brand->description = $request->input('description');
        $brand->website = $request->input('website');
        $brand->slug = Str::slug($request->name);
        $brand->display_order = $request->input('display_order');
        $brand->status = $request->input('status') ? 1:0;
        try
        {
            $brand->save();
            session()->flash('message',alertMessage('Successfully updated the brand!',1));
            return redirect(admin('brands'));
            exit;
         }   
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update brand! '.$e->getMessage(),0));
            return redirect(admin('brands'));
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
        $brand = Brand::findOrFail($id);
        try {
            $brand->delete();
            session()->flash('message',alertMessage('Successfully deleted the brand!',1));
            return redirect('admin/brands');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the brand! '.$e->getMessage(),0));
            return redirect('admin/brands');
        }
               
    }

    public function updateStatus($id){
        $brand = Brand::find($id) or abort(404);
        $brand->status = !$brand->status;
        $brand->save();
        return response()->json(['status'=>'Status successfully changed']);
     }

    public function bulkDelete(Request $request) {
        $usercount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) { 
            foreach($request->checked as $key=>$id) {
                $brand = Brand::findOrFail($id);
                try {
                    $brand->delete();
                    $usercount++;     
                }
                catch(\Exception $e) {
                   $result = "error while deleting the vendor";   
                }
            }
       }

        if($usercount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the brand!' .$result ,0));
             return redirect(admin('brands'));
        }       
        else{   
            session()->flash('message',alertMessage('Total ' .$usercount. ' brand deleted',1));
            return redirect(admin('brands'));
        }
     }

}
