<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Http\Requests\SliderRequest;
use App\Http\Traits\UploadPictureTrait;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use UploadPictureTrait;
    public function index()
    {
      $sliders=Slider::get();
      return view('Admin.sliders',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('Admin.slider-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $slider = new Slider;
        $slider->title = $request->title;
        $slider->description =$request->description;
        $slider->link = $request->link;
        $slider->button_text=  $request->button_text;
        $slider->display_order=  $request->display_order;
        $slider->slider_type=  $request->slider_type; 
        $slider->status = $request->has('status') ? 1:0;  
        try {
            $slider->save();
            if($picture = $this->__uploadPicture('picture','images/banners/'. $slider->id.'/')) {
               $slider->picture = $picture;
            }
            $slider->save();
            session()->flash('message',alertMessage('Successfully created the slider!',1));
            return redirect(admin('sliders'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create slider! '.$e->getMessage(),0));
            return redirect(admin('sliders'));
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
      $slider = Slider::findOrFail($id);
      return view('Admin.slider-form', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $id)
    {
        $slider=Slider::find($id);
        $slider->title = $request->input('title');
        $slider->description =$request->input('description');
        $slider->link = $request->input('link');
        $slider->button_text=  $request->input('button_text');
        $slider->display_order=  $request->input('display_order');
        $slider->slider_type=  $request->input('slider_type');   
        $slider->status = $request->input('status') ? 1:0;
        try
        {
            $slider->save();
            if($picture = $this->__uploadPicture('picture','images/banners/'. $slider->id.'/')) {
                @unlink('images/banners/'.$slider->id.'/'.$slider->picture);
                $slider->picture = $picture;
                $slider->save();
            }
            session()->flash('message',alertMessage('Successfully updated the slider!',1));
            return redirect(admin('sliders'));
            exit;
         }   
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update slider! '.$e->getMessage(),0));
            return redirect(admin('sliders'));
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
        $slider = Slider::findOrFail($id);
        $image = 'images/banners/'.$slider->id.'/'.$slider->picture;
        try {
            $slider->delete();
            @unlink($image);
            session()->flash('message',alertMessage('Successfully deleted the slider!',1));
            return redirect('admin/sliders');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the slider! '.$e->getMessage(),0));
            return redirect('admin/sliders');
        }            
    }
    public function updateStatus($id)
    {
       $slider = Slider::find($id) or abort(404);
       $slider->status = !$slider->status;
       $slider->save();
       return response()->json(['status'=>'Status successfully changed']);
    }  
    public function bulkDelete(Request $request) {
        $slidercount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $slider = Slider::findOrFail($id);
                $image = 'images/banners/'.$slider->id.'/'.$slider->picture;
                try {
                    $slider->delete();
                    $slidercount++;
                    @unlink($image);  
                }
                catch(\Exception $e) {
                    $result = "error while deleting the slider";           
                }
            }
        }
        if($slidercount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the slider!' .$result ,0));
            return redirect(admin('sliders'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$slidercount. ' slider deleted',1));
          return redirect(admin('sliders'));
        }
    }
}
