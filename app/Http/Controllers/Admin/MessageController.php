<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Message;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
   
    public function inbox(){ 
        $id=auth()->user()->id;
        $messages=Message::with('sender','recipient')->where('recipient_id',$id)->where('recipient_status','=', 1)->orderBy('id','desc')->get();	
      	return view('Admin.messages-inbox',compact('messages'));

    }

    public function composeCreate(){
        $users=User::where('user_type','!=','Admin')->get();	
      	return view('Admin.messages-compose',compact('users'));
    }

    public function compose(MessageRequest $request){
      $message=new Message;
	    $message->subject=$request->subject;
	    $message->body=strip_tags($request->body);
	    $message->body_html=$request->body;
	    $message->sender_id=auth()->id();
	    $message->recipient_id=$request->recipient_id;
      $message->attachment=$request->attachment;
	    $message->recipient_status=1;
	    $message->sender_status=1;


	    try {
	        $message->save();
	        session()->flash('message',alertMessage('Successfully created the Message!',1));
	        return redirect('admin/messages/sent');
	        exit;
	    }
	    catch(\Exception $e) {
	        session()->flash('message',alertMessage('Unable to create Message! '.$e->getMessage(),0));
	        return redirect('admin/messages/sent');
	        exit;
	    }	
      	
    }

    public function sent(){
        $id=auth()->user()->id;
        $messages=Message::with('sender','recipient')->where('sender_id',$id)->where('sender_status','=',1)->orderBy('id','desc')->get();	
    	  return view('Admin.messages-sent',compact('messages'));
    }

    public function delete($id){
        $message = Message::where('id',$id)->where('sender_id',auth()->id())->first();
        $message->sender_folder='trash';
       
        try {
            $message->sender_status=0;
            $message->save();
            session()->flash('message',alertMessage('Successfully deleted the message!',1));
            return redirect('admin/messages/sent');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the message! '.$e->getMessage(),0));
            return redirect('admin/messages/sent');
      
        }
    }

     public function deleteInbox($id){
  
        $message = Message::where('id',$id)->where('recipient_id',auth()->id())->first();
        $message->recipient_folder='trash';
        $message->recipient_status=0;

        try {
            $message->save();
            session()->flash('message',alertMessage('Successfully deleted the message!',1));
            return redirect('admin/messages');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the message! '.$e->getMessage(),0));
            return redirect('admin/messages');
      
        }
    }

    public function viewMessage($id){
    	//die($id);
        $message = Message::where('id','=',$id)->with('sender')->first() or abort(404);
        $message->read_at=date('Y-m-d H:i:s');
        $message->save();
        return view('Admin.messages-view',compact('message'));
    }
     public function sendReply(Request $request){
      $id=$request->id;
      $parent_message=Message::where('id',$id)->first();
      $message=new Message;
	    $message->subject='Re: '.$parent_message->subject;
	    $message->body=strip_tags($request->reply_body);
      $message->body_html=$request->reply_body;
	    $message->parent_id=$parent_message->id;
	    $message->recipient_id=$parent_message->sender_id;
	    $message->sender_id=$parent_message->recipient_id;
	    $message->recipient_status=1;
	    $message->sender_status=1;

	    try {
	        $message->save();
	        session()->flash('message',alertMessage('Successfully reply the Message!',1));
	        return redirect('admin/messages');
	        exit;
	    }
	    catch(\Exception $e) {
	        session()->flash('message',alertMessage('Unable to reply Message! '.$e->getMessage(),0));
	        return redirect('admin/messages');
	        exit;
	    }	
     }
    public function bin(){
        $id=auth()->user()->id;
        $deletedMessages=Message::where(function($query) use ($id) {
          $query->where('recipient_id',$id)->where('recipient_folder','trash')->where('recipient_status',0);
        })->orWhere(function($query) use ($id) {
          $query->where('sender_id',$id)->where('sender_folder','trash')->where('sender_status',0);
        })->get();
     	return view('Admin.messages-trash',compact('deletedMessages'));
    }
}