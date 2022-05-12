<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscriber;
use App\Http\Requests\SubscriberRequest;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers=Subscriber::get();
        return view('Admin.subscribers',compact('subscribers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('Admin.subscriber-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscriberRequest $request)
    {
        
        $subscriber=new  Subscriber;
        $subscriber->name=$request->name;
        $subscriber->email=$request->email;
        $subscriber->status=$request->has('status') ? 1:0;
        try{
            $subscriber->save();
            session()->flash('message',alertMessage('Successfully created the subscriber!',1));
            return redirect(admin('subscribers'));

        }
       catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create subscriber! '.$e->getMessage(),0));
            return redirect(admin('subscribers'));
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
      $subscriber =Subscriber::findOrFail($id);
      return view('Admin.subscriber-form',compact('subscriber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubscriberRequest $request, $id)
    {
        $subscriber =Subscriber::findOrFail($id);
        $subscriber->name=$request->input('name');
        $subscriber->email=$request->input('email');
        $subscriber->status=$request->input('status') ? 1:0;
        try{
            $subscriber->save();
            session()->flash('message',alertMessage('Successfully updated the subscriber!',1));
            return redirect(admin('subscribers'));

        }
       catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update subscriber! '.$e->getMessage(),0));
            return redirect(admin('subscribers'));
            exit;

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateStatus($id)
    {
       $subscriber = Subscriber::find($id) or abort(404);
       $subscriber->status = !$subscriber->status;
       $subscriber->save();
       return response()->json(['status'=>'Status successfully changed']);
    }  
    public function delete($id)
    {
      
        $subscriber = Subscriber::findOrFail($id);
        try {
            $subscriber->delete();
            session()->flash('message',alertMessage('Successfully deleted the subscriber!',1));
            return redirect('admin/subscribers');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the subscriber! '.$e->getMessage(),0));
            return redirect('admin/subscribers');
        }
    }
    public function bulkDelete(Request $request) {
        $subscribercount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $subscriber = Subscriber::findOrFail($id);
                try {
                    $subscriber->delete();
                    $subscribercount++;
                }
                catch(\Exception $e) {
                    $result = "error while deleting the subscriber";           
                }
            }
        }
        if($subscribercount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the subscriber!' .$result ,0));
            return redirect(admin('subscribers'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$subscribercount. ' subscriber deleted',1));
          return redirect(admin('subscribers'));
        }
    }
}
