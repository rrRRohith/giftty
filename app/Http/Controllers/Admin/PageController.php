<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\PageRequest;
use App\Http\Traits\UploadPictureTrait;
use App\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use UploadPictureTrait;
    public function index()
    {
      $pages = Page::get();
      return view('Admin.pages', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Admin.page-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {    

         $page= new Page;
         $page->name = $request->name;
         $page->slug = Str::slug($request->name);
         $page->content=$request->content;
         $page->published = $request->has('published') ? 1:0;
         $page->seo_title =$request->seo_title;
         $page->seo_description =$request->seo_description;
         $page->seo_keyword=$request->seo_keyword;

         try{
            $page->save();
            if($picture = $this->__uploadPicture('picture','images/page/'. $page->id.'/')) {
            $page->picture = $picture;
            $page->save();
            }
         
            session()->flash('message',alertMessage('Successfully created the page!',1));
            return redirect(admin('pages'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create page! '.$e->getMessage(),0));
            return redirect(admin('pages'));
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
        $page = Page::findOrFail($id);
        return view('Admin.page-form', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
        $page=Page::find($id);
        $page->name = $request->input('name');
        $page->content = $request->input('content');
        $page->seo_title =$request->input('seo_title');
        $page->seo_description =$request->input('seo_description');
        $page->seo_keyword=$request->input('seo_keyword');
        $page->published = $request->input('published') ? 1:0;
        try
         {
            $page->save();
            if($picture = $this->__uploadPicture('picture','images/page/'.$page->id.'/')) {
                @unlink('images/page/'.$page->id.'/'.$page->picture);
                $page->picture = $picture;
                $page->save();
            }
            session()->flash('message',alertMessage('Successfully updated the page!',1));
            return redirect(admin('pages'));
            exit;
         }   
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update vendor! '.$e->getMessage(),0));
            return redirect(admin('pages'));
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
        // Logic for deleting the user
        $page = Page::findOrFail($id);
        $image = 'images/page/'.$page->id.'/'.$page->picture;

        try {
            $page->delete();
            @unlink($image);

            session()->flash('message',alertMessage('Successfully deleted the page!',1));
            return redirect('admin/pages');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the page! '.$e->getMessage(),0));
            return redirect('admin/pages');
        }
               
    }
    public function updatePublished($id){

    $page = Page::find($id) or abort(404);
    $page->published = !$page->published;
    $page->save();

    return response()->json(['published'=> 'published successfully changed']);
   }


    public function bulkDelete(Request $request) {

    $usercount = 0;
    $result='';
     
    if($request->has('checked') && count($request->checked)) {  

        foreach($request->checked as $key=>$id) {
            $page = Page::findOrFail($id);
            $image = 'images/page/'.$page->id.'/'.$page->picture;

            try {

                $page->delete();
                $usercount++;

                @unlink($image);  
            
            }
            catch(\Exception $e) {
                $result = "error while deleting the page";
                
            }
        }
    }


    if($usercount>0 && $result!='') {

        session()->flash('message',alertMessage('Unable to delete the pages!' .$result ,0));
         return redirect(admin('pages'));
    }       
    else{ 
          
        session()->flash('message',alertMessage('Total ' .$usercount. ' pages deleted',1));
        return redirect(admin('pages'));
    }
  }

}
