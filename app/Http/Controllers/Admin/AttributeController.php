<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AttributeRequest;
use App\Attribute;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $attributes = Attribute::get();
      return view('Admin.attributes', compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Admin.attribute-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributeRequest $request)
    {
        $attribute = new Attribute;
        $attribute->name = $request->name;
        $attribute->values = $request->values;
        $attribute->status = $request->has('status') ? 1:0;
        try {
            $attribute->save();
            session()->flash('message',alertMessage('Successfully created the attribute!',1));
            return redirect(admin('attributes'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create attribute! '.$e->getMessage(),0));
            return redirect(admin('attributes'));
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
      $attribute = Attribute::where('id',$id)->first() or abort(404);
      return view('Admin.attribute-form', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AttributeRequest $request, $id)
    {
        $attribute =Attribute::where('id',$id)->first() or abort(404);
        $attribute->name = $request->input('name');
        $attribute->values = $request->input('values');
        $attribute->status = $request->has('status') ? 1:0;
        try {
            $attribute->save();
            session()->flash('message',alertMessage('Successfully updated the attribute!',1));
            return redirect(admin('attributes'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update attribute! '.$e->getMessage(),0));
            return redirect(admin('attributes'));
            exit;
        }
    }

    public function updateStatus($id)
    {
       $attribute = Attribute::find($id) or abort(404);
       $attribute->status = !$attribute->status;
       $attribute->save();
       return response()->json(['status'=>'Status successfully changed']);
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $attribute = Attribute::findOrFail($id);
        try {
            $attribute->delete();
            session()->flash('message',alertMessage('Successfully deleted the attribute!',1));
            return redirect('admin/attributes');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the attribute! '.$e->getMessage(),0));
            return redirect('admin/attributes');
        }
    }
     public function bulkDelete(Request $request) {
        $attributecount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $attribute = Attribute::findOrFail($id);
                try {
                    $attribute->delete();
                    $attributecount++;
                }
                catch(\Exception $e) {
                    $result = "error while deleting the attribute";           
                }
            }
        }
        if($attributecount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the attribute!' .$result ,0));
            return redirect(admin('attributes'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$attributecount. ' attribute deleted',1));
          return redirect(admin('attributes'));
        }
    }
}
