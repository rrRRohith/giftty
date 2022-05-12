<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Topic;
use App\Http\Requests\TopicRequest;
use Illuminate\Support\Str;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $topics = Topic::get();
      return view('Admin.topics', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.topic-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TopicRequest $request)
    {
        $topic = new Topic;
        $topic->name = $request->name;
        $topic->slug = Str::slug($request->name);
        $topic->published = $request->has('published') ? 1:0;
        try {
            $topic->save();
            session()->flash('message',alertMessage('Successfully created the topic!',1));
            return redirect(admin('topics'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create topic! '.$e->getMessage(),0));
            return redirect(admin('topics'));
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
      $topic = Topic::findOrFail($id);
      return view('Admin.topic-form', compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TopicRequest $request, $id)
    {
         $topic=Topic::find($id);
         $topic->name = $request->input('name');
         $topic->slug = Str::slug($request->name);
         $topic->published = $request->input('published') ? 1:0;
        try {
            $topic->save();
            session()->flash('message',alertMessage('Successfully updated the topic!',1));
            return redirect(admin('topics'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update topic! '.$e->getMessage(),0));
            return redirect(admin('topics'));
            exit;
        }
    }
     public function delete($id)
     {
        // Logic for deleting the user
        $topic = Topic::findOrFail($id);
        try {
            $topic->delete();
            session()->flash('message',alertMessage('Successfully deleted the topic!',1));
            return redirect('admin/topics');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the topic! '.$e->getMessage(),0));
            return redirect('admin/topics');
        }
               
    }
    public function updatePublished($id){

    $topic = Topic::find($id) or abort(404);
    $topic->published = !$topic->published;
    $topic->save();

    return response()->json(['published'=> 'published successfully changed']);
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function bulkDelete(Request $request) {

    $usercount = 0;
    $result='';
     
    if($request->has('checked') && count($request->checked)) {  

        foreach($request->checked as $key=>$id) {
            $topic = Topic::findOrFail($id);
            try {
                $topic->delete();
                $usercount++;
            }
            catch(\Exception $e) {
                $result = "error while deleting the topic";
                
            }
        }
    }


    if($usercount>0 && $result!='') {

        session()->flash('message',alertMessage('Unable to delete the topic!' .$result ,0));
         return redirect(admin('topics'));
    }       
    else{ 
          
        session()->flash('message',alertMessage('Total ' .$usercount. ' topic deleted',1));
        return redirect(admin('topics'));
    }
  }
  
}
