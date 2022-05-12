<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\VendorCategory;
use App\ShippingFaq;
use Session;
use App\Http\Requests\VendorCategoryRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class VendorCategoryController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response

     */

    public function index()
    {
         
     $vendor_categories = VendorCategory::get();
     return view('Admin.vendor-categories', compact('vendor_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faq=ShippingFaq::get();
        return view('Admin.vendor-category-form',compact('faq'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VendorCategoryRequest $request)
    {
        
       // die(print_r($request->all()));
        $vendor_category = new VendorCategory;
        $vendor_category->name = $request->name;
        $vendor_category->shipping_policy=$request->shipping_policy;
        $vendor_category->status = $request->has('status') ? 1:0;
        try {
            $vendor_category->save();  
            $category_faq=$request->faq;
            if(count($category_faq)>0)
            { 
                foreach($category_faq as $key=>$value)
                {
                    if($request->faq[$key] !='')
                    {
                    $addfaq=new ShippingFaq;
                    $addfaq->question=$request->faq[$key];
                    $addfaq->answer=$request->faa[$key];
                    $addfaq->vendor_category_id=$vendor_category->id;
                    $addfaq->save();
                  }
                }
            }    
            session()->flash('message',alertMessage('Successfully created the vendor category!',1));
            return redirect(admin('vendor-categories'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create vendor category! '.$e->getMessage(),0));
            return redirect(admin('vendor-categories'));
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
        $vendor_category = VendorCategory::with('faqs')->where('id',$id)->first();
       // $faq=ShippingFaq::where('vendor_category_id','=',$id)->get();
        return view('Admin.vendor-category-form', compact('vendor_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VendorCategoryRequest $request, $id)
    {
        $vendor_category=VendorCategory::where('id',$id)->first();
        $vendor_category->name = $request->input('name');
        $vendor_category->status = $request->has('status') ? 1:0;

        try
        {
            $vendor_category->save(); 
            $addfaq=ShippingFaq::where('vendor_category_id',$id)->delete();
            $category_faq=$request->faq;
            if(is_array($category_faq))
            {
                foreach($category_faq as $key=>$value)
                {
                   
                        $addfaq=new ShippingFaq;
                        $addfaq->question=$request->faq[$key];
                        $addfaq->answer=$request->faa[$key];
                        $addfaq->vendor_category_id=$vendor_category->id;
                        $addfaq->save();
                    
                } 
            }
            session()->flash('message',alertMessage('Successfully updated the vendor categories!',1));
            return redirect(admin('vendor-categories'));
            exit;
         }  

        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update  vendor category! '.$e->getMessage(),0));
            return redirect(admin('vendor-categories'));
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
        $vendor_category = VendorCategory::where('id',$id)->first();
        //die(print_r($vendor_category));
        try {
            $vendor_category->delete();
            session()->flash('message',alertMessage('Successfully deleted the Vendor category!',1));
            return redirect('admin/vendor-categories');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the Vendor category! '.$e->getMessage(),0));
            return redirect('admin/vendor-categories');
      
        }
    }

    public function faqDelete($id)
    {
       $faq=ShippingFaq::where('id',$id)->first();
     //  die(print_r($faq));
       try{
            $faq->delete();
            session()->flash('message',alertMessage('Successfully deleted the Faq!',1));
            return response()->json(['status'=>'Status successfully changed'],1);
            //return redirect('admin/vendor-category-form');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to delete the Faq! '.$e->getMessage(),0));
            return response()->json(['status'=>'Status successfully changed'],0);
        }

     }

    public function updateStatus($id)
     {
        $vendor_category = VendorCategory::find($id) or abort(404);
        $vendor_category->status = !$vendor_category->status;
        $vendor_category->save();
        return response()->json(['status'=>'Status successfully changed']);
     }

   public function bulkDelete(Request $request)
    {
        $categorycount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $vendor_category = VendorCategory::findOrFail($id);
               try {

                    $vendor_category->delete();
                    $categorycount++;       
                }
                catch(\Exception $e) {
                    $result = "error while deleting the vendor category";   
                }
            }
        }
        if($categorycount>0 && $result!='') {
          session()->flash('message',alertMessage('Unable to delete the vendor categories!' .$result ,0));
          return redirect(admin('vendor-categories'));
        }       
        else{   
          session()->flash('message',alertMessage(' Total ' .$categorycount. ' categories deleted ',1));
          return redirect(admin('vendor-categories'));
        }
    }

}