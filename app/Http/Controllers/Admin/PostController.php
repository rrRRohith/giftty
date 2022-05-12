<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Traits\UploadPictureTrait;
use Hash;
use App\Post;
use App\Topic;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use UploadPictureTrait;
    public function index()
    {
   
  
     $posts=Post::with('topics')->get();
     return view('Admin.posts', compact('posts'));
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics=Topic::get();
        return view('Admin.post-form',compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->user_id = auth()->guard('admin')->id();
        $post->excerpt = $request->excerpt;
        $post->content=  $request->content;
        $post->tags=  $request->tags;

        $post->published = $request->has('published') ? 1:0;
        try {
            $post->save();
            if($picture = $this->__uploadPicture('picture','images/post/'. $post->id.'/')) {
               $post->picture = $picture;
            }
            $post->save();
            $post->topics()->sync($request->topics);

            session()->flash('message',alertMessage('Successfully created the post!',1));
            return redirect(admin('posts'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create post! '.$e->getMessage(),0));
            return redirect(admin('posts'));
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
      $post = Post::findOrFail($id);
      $topics=Topic::get();
      return view('Admin.post-form', compact('post','topics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post=Post::find($id);
        $post->title = $request->input('title');
        $post->slug = Str::slug($request->title);
        $post->user_id = auth()->guard('admin')->id();
        $post->excerpt = $request->input('excerpt');
        $post->content=  $request->input('content');
        $post->tags=  $request->input('tags');
        $post->published = $request->input('published') ? 1:0;

        try
        {
            $post->save();
            if($picture = $this->__uploadPicture('picture','images/post/'. $post->id.'/')) {
                @unlink('images/post/'.$post->id.'/'.$post->picture);
                $post->picture = $picture;
                $post->save();
            }
            $post->topics()->sync($request->topics);
            session()->flash('message',alertMessage('Successfully updated the post!',1));
            return redirect(admin('posts'));
            exit;
         }   
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update post! '.$e->getMessage(),0));
            return redirect(admin('posts'));
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
        $post = Post::findOrFail($id);
        $image = 'images/post/'.$post->id.'/'.$post->picture;

        try {
            $post->delete();
            @unlink($image);

            session()->flash('message',alertMessage('Successfully deleted the post!',1));
            return redirect('admin/posts');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the post! '.$e->getMessage(),0));
            return redirect('admin/posts');
        }
               
    }
    public function updatePublished($id){
       $post = Post::find($id) or abort(404);
       $post->published = !$post->published;
       $post->save();
       return response()->json(['published'=> 'published successfully changed']);
    }


    public function bulkDelete(Request $request) {
        $usercount = 0;
        $result='';
     
        if($request->has('checked') && count($request->checked)) {  
           foreach($request->checked as $key=>$id) {
              $post = Post::findOrFail($id);
              $image = 'images/post/'.$post->id.'/'.$post->picture;
              try{
                 $post->delete();
                 $usercount++;
                 @unlink($image);            
              }
              catch(\Exception $e) {
                 $result = "error while deleting the post";               
              }
            }
        }

        if($usercount>0 && $result!='') {
           session()->flash('message',alertMessage('Unable to delete the post!' .$result ,0));
           return redirect(admin('posts'));
        }       
        else{          
           session()->flash('message',alertMessage('Total ' .$usercount. ' posts deleted',1));
           return redirect(admin('posts'));
        }
    }
}

