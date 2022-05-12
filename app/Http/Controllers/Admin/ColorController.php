<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Color;
use App\Http\Requests\ColorRequest;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $colors=Color::get();
      return view('Admin.colors',compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.color-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColorRequest $request)
    {
        $color=new Color;
        $color->name=$request->name;
        $color->code=$request->code;
        try{
            $color->save();
            session()->flash('message',alertMessage('Successfully created the color!',1));
            return redirect(admin('colors'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create color! '.$e->getMessage(),0));
            return redirect(admin('colors'));
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
      
      $color = Color::findOrFail($id);
      return view('Admin.color-form', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ColorRequest $request, $id)
    { 
        $color = Color::findOrFail($id);
        $color->name=$request->input('name');
        $color->code=$request->input('code');
        try{
            $color->save();
            session()->flash('message',alertMessage('Successfully updated the color!',1));
            return redirect(admin('colors'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update color! '.$e->getMessage(),0));
            return redirect(admin('colors'));
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
      
        $color = Color::findOrFail($id);
        try {
            $color->delete();
            session()->flash('message',alertMessage('Successfully deleted the color!',1));
            return redirect('admin/colors');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the color! '.$e->getMessage(),0));
            return redirect('admin/colors');
        }
    }
    public function bulkDelete(Request $request) {
        $colorcount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $color = Color::findOrFail($id);
                try {
                    $color->delete();
                    $colorcount++;
                }
                catch(\Exception $e) {
                    $result = "error while deleting the color";           
                }
            }
        }
        if($colorcount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the color!' .$result ,0));
            return redirect(admin('colors'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$colorcount. ' color deleted',1));
          return redirect(admin('colors'));
        }
    }
}
