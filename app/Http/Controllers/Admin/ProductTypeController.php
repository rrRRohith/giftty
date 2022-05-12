<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ProductTypeRequest;
use App\ProductType;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $product_types = ProductType::get();
      return view('Admin.product-types', compact('product_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Admin.product-type-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductTypeRequest $request)
    {
        $product_type = new ProductType;
        $product_type->name = $request->name;
        $product_type->slug = Str::slug($request->name);
        $product_type->status = $request->has('status') ? 1:0;
        try {
            $product_type->save();
            session()->flash('message',alertMessage('Successfully created the Product type!',1));
            return redirect(admin('product-types'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create Product type! '.$e->getMessage(),0));
            return redirect(admin('product-types'));
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
      $product_type = ProductType::findOrFail($id);
      return view('Admin.product-type-form', compact('product_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductTypeRequest $request, $id)
    {
        $product_type = ProductType::findOrFail($id);
        $product_type->name = $request->input('name');
        $product_type->slug = Str::slug($request->name);
        $product_type->status = $request->input('status') ? 1:0;
        try {
            $product_type->save();
            session()->flash('message',alertMessage('Successfully updated the product types!',1));
            return redirect(admin('product-types'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update product types! '.$e->getMessage(),0));
            return redirect(admin('product-types'));
            exit;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateStatus($id)
    {
       $product_type = ProductType::find($id) or abort(404);
       $product_type->status = !$product_type->status;
       $occasion->save();
       return response()->json(['status'=>'Status successfully changed']);
    }  

    public function delete($id)
     {
    //die(print_r($id));
        $product_type = ProductType::findOrFail($id);
        try {
            $product_type->delete();
            session()->flash('message',alertMessage('Successfully deleted the Product type!',1));
            return redirect('admin/product-types');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the Product type! '.$e->getMessage(),0));
            return redirect('admin/product-types');
        }
    }
    public function bulkDelete(Request $request) {
        $productcount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $product_type = ProductType::findOrFail($id);
                try {
                    $product_type->delete();
                    $productcount++;
                }
                catch(\Exception $e) {
                    $result = "error while deleting the Product type";           
                }
            }
        }
        if($productcount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the Product type!' .$result ,0));
            return redirect(admin('product-types'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$productcount. ' Product type deleted',1));
          return redirect(admin('product-types'));
        }
    }
}
