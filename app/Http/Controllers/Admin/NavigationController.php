<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Navigation;
use App\Category;
use App\Occasion;
use App\Page;
use App\ShoppingCategory;
use App\ProductType;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $navigations=Navigation::with('parent')->get();
       return view('Admin.navigations',compact('navigations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Category::orderBy('name','ASC')->get();
       $occasions = Occasion::orderBy('name','ASC')->get();
       $pages = Page::orderBy('name','ASC')->get();
       $shoppingcategories = ShoppingCategory::orderBy('name')->get();
       $types = ProductType::orderBy('name')->get();
    
       $navigations=Navigation::get();
       return view('Admin.navigation-form',compact('navigations','categories','occasions','pages','shoppingcategories','types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $navigation=new Navigation;
        $navigation->name=$request->name;
        $navigation->parent_id = NULL;
        $navigation->link=$request->link;
        $navigation->level = 0;
        $navigation->display_order=$request->display_order;
        $navigation->status= $request->has('status') ? 1:0;
        if($request->parent_id !=''){
            $parent=Navigation::find($request->parent_id);
            if($parent){
                $navigation->parent_id=$parent->id;
                $navigation->level=$parent->level+1;
            }
        }
        try {

            $navigation->save();
            session()->flash('message',alertMessage('Successfully created the navigation!',1));
            return redirect(admin('navigations'));
            exit;
      
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create navigation! '.$e->getMessage(),0));
            return redirect(admin('navigations'));
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $categories = Category::orderBy('name','ASC')->get();
       $occasions = Occasion::orderBy('name','ASC')->get();
       $pages = Page::orderBy('name','ASC')->get();
       $shoppingcategories = ShoppingCategory::orderBy('name')->get();
       $types = ProductType::orderBy('name')->get();
       
       $navigation = Navigation::findOrFail($id);
       $navigations=Navigation::with('children')->where('id','!=',$id)->whereNull('parent_id')->get();

       return view('Admin.navigation-form',compact('navigation','navigations','categories','occasions','pages','shoppingcategories','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $navigation = Navigation::find($id);
        $navigation->name=$request->input('name');
        $navigation->parent_id=$request->input('parent_id');
        $navigation->link=$request->input('link');
        $navigation->level=0;
        $navigation->display_order=$request->input('display_order');
        $navigation->status= $request->input('status') ? 1:0;
        if($request->parent_id !=''){
            $parent=Navigation::find($request->parent_id);
            if($parent){
                $navigation->parent_id=$parent->id;
                $navigation->level=$parent->level+1;
            }
        }
        try {
            $navigation->save();
            session()->flash('message',alertMessage('Successfully updated the navigation!',1));
            return redirect(admin('navigations'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update navigation! '.$e->getMessage(),0));
            return redirect(admin('navigations'));
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
        $navigation = Navigation::findOrFail($id);
      
        try {
            $navigation->delete();
            session()->flash('message',alertMessage('Successfully deleted the navigation!',1));
            return redirect('admin/navigations');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the navigation! '.$e->getMessage(),0));
            return redirect('admin/navigations');
        }               
    }

    public function updateStatus($id)
    {
        $navigation = Navigation::find($id) or abort(404);
        $navigation->status = !$navigation->status;
        $navigation->save();
        return response()->json(['status'=>'Status successfully changed']);
    }

    public function bulkDelete(Request $request)
    {
        $navigationcount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
           foreach($request->checked as $key=>$id) {
              $navigation = Navigation::findOrFail($id);           
              try{
                 $navigation->delete();
                 $navigationcount++;    
              }
              catch(\Exception $e) {
                 $result = "error while deleting the navigation";               
              }
            }
        }

        if($navigationcount>0 && $result!='') {
           session()->flash('message',alertMessage('Unable to delete the navigation!' .$result ,0));
           return redirect(admin('navigations'));
        }       
        else{          
           session()->flash('message',alertMessage('Total ' .$navigationcount. ' navigation deleted',1));
           return redirect(admin('navigations'));
        }
    }
}
