<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Message;
use App\User;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $messages=Message::get();
       return view('Admin.messages',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::where('user_type','=','Admin')->get();
       return view('Admin.message-form',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
   
      // dd($request->all());
       $message=new Message;
       $message->subject=$request->subject;
       $message->body=$request->body;
       $message->body_html=$request->body_html;
       $message->recipient=$request->recipient;
       $message->sender=$request->sender;
       $message->parent_id=$request->parent_id;
       $message->recipient_folder=$request->recipient_folder;
       $message->sender_folder=$request->sender_folder;
       $message->attachment=$request->attachment;
       $message->recipient_status=$request->has('recipient_status') ? 1:0;
       $message->sender_status=$request->has('sender_status') ? 1:0;

       try {
            $message->save();
            session()->flash('message',alertMessage('Successfully created the Message!',1));
            return redirect(admin('messages'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create Message! '.$e->getMessage(),0));
            return redirect(admin('messages'));
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
        $message = Message::findOrFail($id);
        $users=User::get();
        return view('Admin.message-form', compact('message','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MessageRequest $request, $id)
    {
       $message=Message::find($id);
       $message->subject=$request->input('subject');
       $message->body=$request->input('body');
       $message->body_html=$request->input('body_html');
       $message->recipient=$request->input('recipient');
       $message->sender=$request->input('sender');
       $message->parent_id=$request->input('parent_id');
       $message->recipient_folder=$request->input('recipient_folder');
       $message->sender_folder=$request->input('sender_folder');
       $message->attachment=$request->input('attachment');
       $message->recipient_status=$request->input('recipient_status') ? 1:0;
       $message->sender_status=$request->input('sender_status') ? 1:0;

       try {
            $message->save();
            session()->flash('message',alertMessage('Successfully updated the Message!',1));
            return redirect(admin('messages'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update Message! '.$e->getMessage(),0));
            return redirect(admin('messages'));
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
      
        $message = Message::findOrFail($id);
        try {
            $message->delete();
            session()->flash('message',alertMessage('Successfully deleted the message!',1));
            return redirect('admin/messages');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the message! '.$e->getMessage(),0));
            return redirect('admin/messages');
        }               
    }
    public function updateRecipientStatus($id)
    {
        $message = Message::find($id) or abort(404);
        $message->recipient_status = !$message->recipient_status;
        $message->save();
        return response()->json(['status'=>'Status successfully changed']);
    } 

    public function updateSenderStatus($id)
    {
        $message = Message::find($id) or abort(404);
        $message->sender_status = !$message->sender_status;
        $message->save();
        return response()->json(['status'=>'Status successfully changed']);
    } 

    public function bulkDelete(Request $request) 
    {
        $messagecount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $message = Message::findOrFail($id);  
                try {
                    $message->delete();
                    $messagecount++;  
                }
                catch(\Exception $e) {
                    $result = "error while deleting the message";           
                } 
            }
        }
        if($messagecount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the messages!' .$result ,0));
            return redirect(admin('messages'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$messagecount. ' message deleted',1));
          return redirect(admin('messages'));
        }
    } 

}
