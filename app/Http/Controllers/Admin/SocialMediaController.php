<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SocialMediaRequest;
use App\SocialMedia;
use App\Http\Traits\UploadPictureTrait;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     use UploadPictureTrait;
    public function index()
    {
        $social_medias=SocialMedia::get();
        return view('Admin.social-medias',compact('social_medias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.social-media-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialMediaRequest $request)
    {
        $social_media = new SocialMedia;
        $social_media->name = $request->name;
        $social_media->link = $request->link;   
        $social_media->status = $request->has('status') ? 1:0;
      
        try {
            $social_media->save();
            if($picture = $this->__uploadPicture('icon','images/social-media/'. $social_media->id.'/')) {
                $social_media->icon = $picture;
            }
            $social_media->save();
            session()->flash('message',alertMessage('Successfully created the Social Media!',1));
            return redirect(admin('social-medias'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create Social Media! '.$e->getMessage(),0));
            return redirect(admin('social-medias'));
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
      $social_media =SocialMedia::findOrFail($id);
      return view('Admin.social-media-form',compact('social_media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SocialMediaRequest $request, $id)
    {
        $social_media =SocialMedia::findOrFail($id);
        $social_media->name = $request->input('name');
        $social_media->link = $request->input('link');   
        $social_media->status = $request->input('status') ? 1:0;
      
        try {
            $social_media->save();

            if($picture = $this->__uploadPicture('icon','images/social-media/'. $social_media->id.'/')) {
                @unlink('images/social-media/'.$social_media->id.'/'.$social_media->icon);
                $social_media->icon = $picture;
                
            }
            $social_media->save();
            session()->flash('message',alertMessage('Successfully update the Social Media!',1));
            return redirect(admin('social-medias'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update Social Media! '.$e->getMessage(),0));
            return redirect(admin('social-medias'));
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
        
        $social_media = SocialMedia::findOrFail($id);
        $image = 'images/social-media/'.$social_media->id.'/'.$social_media->icon;

        try {
            $social_media->delete();
            @unlink($image);
            session()->flash('message',alertMessage('Successfully deleted the social media!',1));
            return redirect('admin/social-medias');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the social media! '.$e->getMessage(),0));
            return redirect('admin/social-medias');
        }
               
    }
     
    public function updateStatus($id){
            $social_media = SocialMedia::find($id) or abort(404);
            $social_media->status = !$social_media->status;
            $social_media->save();
            return response()->json(['status'=>'Status successfully changed']);
    }

    public function bulkDelete(Request $request) {
        $socialmediacount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $social_media = SocialMedia::findOrFail($id);
                $image = 'images/social-media/'.$social_media->id.'/'.$social_media->icon;
                try {
                    $social_media->delete();
                    $socialmediacount++;
                    @unlink($image);  
                }
                catch(\Exception $e) {
                    $result = "error while deleting the social media";           
                }
            }
        }
        if($socialmediacount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the Social Media!' .$result ,0));
            return redirect(admin('social-medias'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$socialmediacount. ' Social Media deleted',1));
          return redirect(admin('social-medias'));
        }
    }



}
