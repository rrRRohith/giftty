<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Message;
use Auth;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
   
    public function inbox(){ 
        $id=auth()->user()->id;
        $messages=Message::with('sender','recipient')->where('recipient_id',$id)->where('recipient_status','=', 1)->orderBy('id','desc')->get();	
      	return view('Vendor.messages-inbox',compact('messages'));
    }

    public function compose(){
        $users=User::where('user_type','=','admin')->get();	
      	return view('Vendor.messages-compose',compact('users'));
    }

    public function postCompose(MessageRequest $request){
    	//dd($request->all());
        //die(print_r($request->sender_id));

        $message=new Message;
        $message->subject=$request->subject;
        $message->body=strip_tags($request->body);
        $message->body_html=$request->body;
        $message->sender_id=auth()->id();
        $message->recipient_id=$request->recipient_id;
        $message->recipient_status=1;
        $message->sender_status=1;

	    try {
	        $message->save();
	        session()->flash('message',alertMessage('The message successfully sent!', 1));
	        return redirect('seller/messages/sent');
	        exit;
	    }
	    catch(\Exception $e) {
	        session()->flash('message',alertMessage('Unable to send the message! '.$e->getMessage(),0));
	        return redirect()->back();
	        exit;
	    }	
      	
    }

    public function sent(){
        $id=auth()->user()->id;
    	$messages=Message::with('sender','recipient')->where('sender_id',$id)->where('sender_status','=',1)->orderBy('id','desc')->get();    
    	return view('Vendor.messages-sent',compact('messages'));
    }

    public function delete($id){
    	//die($id);
        $message = Message::where('id',$id)->where('sender_id',auth()->id())->first() or abort(404);
        $message->sender_folder='trash';
        try {
            $message->sender_status=0;
            $message->save();
            session()->flash('message',alertMessage('Successfully deleted the message!',1));
            return redirect('seller/messages/sent');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the message! '.$e->getMessage(),0));
            return redirect('seller/messages/sent');
      
        }
    }
        public function deleteInbox($id){
        //die($id);
         $message = Message::where('id',$id)->where('recipient_id',auth()->id())->first() or abort(404);
        $message->recipient_folder='trash';
        $message->recipient_status=0;
        try {
            $message->save();
            session()->flash('message',alertMessage('Successfully deleted the message!',1));
            return redirect('seller/messages');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the message! '.$e->getMessage(),0));
            return redirect('seller/messages');
      
        }
    }
    public function viewMessage($id){
    	//die($id);
        $message = Message::where('id','=',$id)->with('sender')->first() or abort(404);
        $message->read_at=date('Y-m-d H:i:s');
        $message->save();

        return view('Vendor.messages-view',compact('message'));
    }
     public function sendReply(Request $request){
     
        $id=$request->id;
        $parent_message=Message::where('id',$id)->first() or abort(404);
       
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
	        session()->flash('message',alertMessage('Successfully sent the Message!',1));
	        return redirect('seller/messages');
	        exit;
	    }
	    catch(\Exception $e) {
	        session()->flash('message',alertMessage('Unable to sent Message! '.$e->getMessage(),0));
	        return redirect('seller/messages');
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
      return view('Vendor.messages-trash',compact('deletedMessages'));
     }
     	
     
}