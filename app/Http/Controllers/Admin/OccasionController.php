<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\OccasionRequest;
use App\Occasion;
use App\Product;

class OccasionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $occasions = Occasion::withCount('products')->get();;
      return view('Admin.occasions', compact('occasions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $products=Product::orderBy('name','ASC')->get();
       return view('Admin.occasion-form')->withProducts($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OccasionRequest $request)
    {
        $occasion = new Occasion;
        $occasion->name = $request->name;
        $occasion->slug = Str::slug($request->name);
        $occasion->status = $request->has('status') ? 1:0;
        try {
            $occasion->save();

            $occasion->products()->sync($request->products);

            session()->flash('message',alertMessage('Successfully created the occasion!',1));
            return redirect(admin('occasions'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create occasion! '.$e->getMessage(),0));
            return redirect(admin('occasions'));
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
      $occasion = Occasion::find($id) or abort(404);
      $products=Product::orderBy('name','ASC')->get();
      return view('Admin.occasion-form', compact('occasion','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OccasionRequest $request, $id)
    {
        $occasion = Occasion::find($id) or abort(404);
        $occasion->name = $request->input('name');
        $occasion->slug = Str::slug($request->name);
        $occasion->status = $request->input('status') ? 1:0;
        try {
            $occasion->save();

            $occasion->products()->sync($request->products);

            session()->flash('message',alertMessage('Successfully updated the occasion!',1));
            return redirect(admin('occasions'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update occasion! '.$e->getMessage(),0));
            return redirect(admin('occasions'));
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
       $occasion = Occasion::find($id) or abort(404);
       $occasion->status = !$occasion->status;
       $occasion->save();
       return response()->json(['status'=>'Status successfully changed']);
    }  

    public function delete($id)
     {
        // Logic for deleting the user
        $occasion = Occasion::find($id) or abort(404);
        try {

            $occasion->products()->detach();
            $occasion->delete();
            
            session()->flash('message',alertMessage('Successfully deleted the Occasion!',1));
            return redirect('admin/occasions');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the occasion! '.$e->getMessage(),0));
            return redirect('admin/occasions');
        }
    }
    public function bulkDelete(Request $request) {
        $occasioncount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $occasion = Occasion::findOrFail($id);
                try {
                    $occasion->delete();
                    $occasioncount++;
                }
                catch(\Exception $e) {
                    $result = "error while deleting the occasion";           
                }
            }
        }
        if($occasioncount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the occasion!' .$result ,0));
            return redirect(admin('occasions'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$occasioncount. ' occasion deleted',1));
          return redirect(admin('occasions'));
        }
    }
}
