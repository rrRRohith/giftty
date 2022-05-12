<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\CategoryProduct;
use Session;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Http\Traits\UploadPictureTrait;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response

     */
    use UploadPictureTrait;
    public function index()
    {
         
     $categories = Category::withCount('products')->get();
     return view('Admin.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','ASC')->get();
        $products=Product::orderBy('name','ASC')->get();
        return view('Admin.category-form')->withCategories($categories)->withProducts($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
       
        $category = new Category;
        $category->name = $request->name;
        $category->display_order = $request->display_order;
        $category->slug = Str::slug($request->name);
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        
        $category->status = $request->has('status') ? 1:0;
        try {
            $category->save();
            if($picture = $this->__uploadPicture('picture','images/categories/'. $category->id.'/')) {
               $category->picture = $picture;
            }
            $category->save();
            $category->products()->sync($request->products);
            session()->flash('message',alertMessage('Successfully created the category!',1));
            return redirect(admin('categories'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create category! '.$e->getMessage(),0));
            return redirect(admin('categories'));
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
        $category = Category::find($id) or abort(404);    
        $products=Product::orderBy('name','ASC')->get();
        $categories = Category::where('id','!=',$id)->orderBy('name','ASC')->get();
        return view('Admin.category-form', compact('category','categories','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category=Category::find($id);
        $category->name = $request->input('name');
        $category->display_order = $request->input('display_order');
        $category->description = $request->input('description');
        $category->parent_id = $request->input('parent_id');
        $category->status = $request->input('status') ? 1:0;

        try
        {
            $category->save();  
            if($picture = $this->__uploadPicture('picture','images/categories/'. $category->id.'/')) {
                @unlink('images/categories/'.$category->id.'/'.$category->picture);
                $category->picture = $picture;
                $category->save();
            }
            
            $category->products()->sync($request->products);

            session()->flash('message',alertMessage('Successfully updated the categories!',1));
            return redirect(admin('categories'));
            exit;
         }   
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update category! '.$e->getMessage(),0));
            return redirect(admin('categories'));
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
      
        $category = Category::where('id',$id)->first() or abort(404);
        try {
            $category->products()->detach();
            $category->delete();

            session()->flash('message',alertMessage('Successfully deleted the category!',1));
            return redirect('admin/categories');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the category! '.$e->getMessage(),0));
            return redirect('admin/categories');
      
        }
    }


    public function updateStatus($id)
     {
        $category = Category::find($id) or abort(404);
        $category->status = !$category->status;
        $category->save();
        return response()->json(['status'=>'Status successfully changed']);
     }

   public function bulkDelete(Request $request)
    {
        $categorycount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $category = Category::findOrFail($id);
               try {

                    $category->delete();
                    $categorycount++;       
                }
                catch(\Exception $e) {
                    $result = "error while deleting the category";   
                }
            }
        }
        if($categorycount>0 && $result!='') {
          session()->flash('message',alertMessage('Unable to delete the categories!' .$result ,0));
          return redirect(admin('categories'));
        }       
        else{   
          session()->flash('message',alertMessage(' Total ' .$categorycount. ' categories deleted ',1));
          return redirect(admin('categories'));
        }
    }

}
