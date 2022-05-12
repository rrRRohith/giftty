<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ShoppingCategory;
use App\Product;
use Session;
use App\Http\Requests\ShoppingCategoryRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class ShoppingCategoryController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response

     */

    public function index()
    {
         
     $shopping_categories =ShoppingCategory::get();
     return view('Admin.shopping-categories', compact('shopping_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $categories = ShoppingCategory::orderBy('name','ASC')->get();
        $products=Product::orderBy('name','ASC')->get();
        return view('Admin.shopping-category-form',compact('categories','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShoppingCategoryRequest $request)
    {
        
       // die(print_r($request->all()));
        $shopping_category = new ShoppingCategory;
        $shopping_category->name = $request->name;
        $shopping_category->display_order = $request->display_order;
        $shopping_category->slug = Str::slug($request->name);
        $shopping_category->parent_id = $request->parent_id;
        $shopping_category->status = $request->has('status') ? 1:0;
        try {

            
            $shopping_category->save();
            $shopping_category->products()->sync($request->products);

            session()->flash('message',alertMessage('Successfully created the shopping category!',1));
            return redirect(admin('shopping-categories'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create shopping category! '.$e->getMessage(),0));
            return redirect(admin('shopping-categories'));
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
        $categories =ShoppingCategory::where('id','!=',$id)->orderBy('name','ASC')->get();
        $shopping_category = ShoppingCategory::find($id) or abort(404);
        $products=Product::orderBy('name','ASC')->get();
        return view('Admin.shopping-category-form', compact('shopping_category','categories','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShoppingCategoryRequest $request, $id)
    {
        $shopping_category =ShoppingCategory::find($id) or abort(404);
        $shopping_category->name = $request->input('name');
        $shopping_category->display_order = $request->input('display_order');
        $shopping_category->slug = Str::slug($request->name);
        $shopping_category->parent_id = $request->input('parent_id');
        $shopping_category->status = $request->input('status') ? 1:0;

        try
        {
            $shopping_category->save();  

            $shopping_category->products()->sync($request->products);

            session()->flash('message',alertMessage('Successfully updated the shopping categories!',1));
            return redirect(admin('shopping-categories'));
            exit;
         }   
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update shopping category! '.$e->getMessage(),0));
            return redirect(admin('shopping-categories'));
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
       $shopping_category = ShoppingCategory::findOrFail($id);
        try {

           $shopping_category->products()->detach();
           $shopping_category->delete();

           session()->flash('message',alertMessage('Successfully deleted the shopping category!',1));
           return redirect('admin/shopping-categories');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the shopping category! '.$e->getMessage(),0));
            return redirect('admin/shopping-categories');
      
        }
    }


    public function updateStatus($id)
     {
        $shopping_category = ShoppingCategory::find($id) or abort(404);
        $shopping_category->status = !$shopping_category->status;
        $shopping_category->save();
        return response()->json(['status'=>'Status successfully changed']);
     }

   public function bulkDelete(Request $request)
    {
        $categorycount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $shopping_category = ShoppingCategory::findOrFail($id);
               try {

                    $shopping_category->delete();
                    $categorycount++;       
                }
                catch(\Exception $e) {
                    $result = "error while deleting the shopping category";   
                }
            }
        }
        if($categorycount>0 && $result!='') {
          session()->flash('message',alertMessage('Unable to delete the shopping categories!' .$result ,0));
          return redirect(admin('shopping-categories'));
        }       
        else{   
          session()->flash('message',alertMessage(' Total ' .$categorycount. ' categories deleted ',1));
          return redirect(admin('shopping-categories'));
        }
    }

}