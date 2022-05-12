<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banner;
use App\Http\Requests\BannerRequest;
use App\Http\Traits\UploadPictureTrait;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    use UploadPictureTrait;
    public function index()
    {
        $banners=Banner::get();
        return view('Admin.banners',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.banner-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Banner;
        $banner->title = $request->title;
        $banner->description =$request->description;
        $banner->link = $request->link;
        $banner->button_text=  $request->button_text;
        $banner->display_order=  $request->display_order;
        $banner->banner_type=  $request->banner_type; 
        $banner->status = $request->has('status') ? 1:0;  
        try {
            $banner->save();
            if($picture = $this->__uploadPicture('picture','images/banners/'. $banner->id.'/')) {
               $banner->picture = $picture;
            }
            $banner->save();
            session()->flash('message',alertMessage('Successfully created the banner!',1));
            return redirect(admin('banners'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create banner! '.$e->getMessage(),0));
            return redirect(admin('banners'));
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
        $banner = Banner::find($id) or abort(404);
        return view('Admin.banner-form', compact('banner'));
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
        $banner=Banner::find($id) or abort(404);
        $banner->title = $request->input('title');
        $banner->description =$request->input('description');
        $banner->link = $request->input('link');
        $banner->button_text=  $request->input('button_text');
        $banner->display_order=  $request->input('display_order');
        $banner->banner_type=  $request->input('banner_type');   
        $banner->status = $request->input('status') ? 1:0;
        try
        {
            $banner->save();
            if($picture = $this->__uploadPicture('picture','images/banners/'. $banner->id.'/')) {
                @unlink('images/banners/'.$banner->id.'/'.$banner->picture);
                $banner->picture = $picture;
                $banner->save();
            }
            session()->flash('message',alertMessage('Successfully updated the banner!',1));
            return redirect(admin('banners'));
            exit;
         }   
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update banner! '.$e->getMessage(),0));
            return redirect(admin('banners'));
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
        $banner = Banner::findOrFail($id);
        $image = 'images/banners/'.$banner->id.'/'.$banner->picture;
        try {
            $banner->delete();
            @unlink($image);
            session()->flash('message',alertMessage('Successfully deleted the banner!',1));
            return redirect('admin/banners');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the banner! '.$e->getMessage(),0));
            return redirect('admin/banners');
        }            
    }
    public function updateStatus($id)
    {
       $banner = Banner::find($id) or abort(404);
       $banner->status = !$banner->status;
       $banner->save();
       return response()->json(['status'=>'Status successfully changed']);
    } 

    public function bulkDelete(Request $request)
    {
        $bannercount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $banner = Banner::findOrFail($id);
                $image = 'images/banners/'.$banner->id.'/'.$banner->picture;
                try {
                    $banner->delete();
                    $bannercount++;
                    @unlink($image);  
                }
                catch(\Exception $e) {
                    $result = "error while deleting the banner";           
                }
            }
        }
        if($bannercount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the banner!' .$result ,0));
            return redirect(admin('banners'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$bannercount. ' banner deleted',1));
          return redirect(admin('banners'));
        }
    }
}
