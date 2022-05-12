<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Session;
use Hash;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Giftty;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Http\Traits\UploadPictureTrait;
use App\Notifications\AdminNotification;
use Notification;
use MailMessage;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response


     */

    use UploadPictureTrait;
    public function index()
    {
        $users = User::where('user_type','user')->get();
    //   $users = User::where('id','!=',auth()->guard('admin')->id())->get();
       return view('Admin.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Admin.user-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        // Logic for storing new User
      
        $user = new User;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->bio = $request->bio;
        $user->user_type = 'user';
        $user->password = $request->password;
        $user->verified = $request->has('verified') ? 1:0;
        $user->status = $request->has('status') ? 1:0;
        $user->password = Hash::make($request->password);

        try {
           // Notification::send($user->email, new AdminNotification($user));
          //  $user->notify(new AdminNotification());
            $user->save();
            if($picture = $this->__uploadPicture('picture','images/users/'. $user->id.'/')) {
             $user->picture = $picture;
            }
            $user->save();
            session()->flash('message',alertMessage('Successfully created the user!',1));
            return redirect(admin('users'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create user! '.$e->getMessage(),0));
            return redirect(admin('users'));
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
        // Call user form with Existing user data
        $user = User::findOrFail($id);
        return view('Admin.user-form', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        // Logic for updating user data

        $user=User::find($id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->status=$request->input('status') ? 1:0;
        if($request->password != '')
        $user->password = Hash::make($request->password);
        try
        {
            $user->save();
            if($picture = $this->__uploadPicture('picture','images/users/'. $user->id.'/')) {
                @unlink('images/users/'.$user->picture);
                $user->picture = $picture;
              
            }
            $user->save();
            session()->flash('message',alertMessage('Successfully updated the user!',1));
            return redirect(admin('users'));
            exit;
        }   
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update user! '.$e->getMessage(),0));
            return redirect(admin('users'));
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
        $user = User::findOrFail($id);
        $image = 'images/users/'.$user->id.'/'.$user->picture;
        try {
            $user->delete();
            @unlink($image);
            session()->flash('message',alertMessage('Successfully deleted the user!',1));
            return redirect('admin/users');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the user! '.$e->getMessage(),0));
            return redirect('admin/users');
        }               
    }
    public function updateStatus($id)
    {
       $user = User::find($id) or abort(404);
       $user->status = !$user->status;
       $user->save();
       return response()->json(['status'=>'Status successfully changed']);
    }  

    public function emailTest()
    {
       Mail::to("ancelindigital@gmail.com")->send(new Giftty());
    }

    public function bulkDelete(Request $request) 
    {
        $usercount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $user = User::findOrFail($id);
                $image = 'images/users/'.$user->id.'/'.$user->picture;
                try {
                    $user->delete();
                    $usercount++;
                    @unlink($image);  
                }
                catch(\Exception $e) {
                    $result = "error while deleting the vendor";           
                }
            }
        }
        if($usercount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the users!' .$result ,0));
            return redirect(admin('users'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$usercount. ' users deleted',1));
          return redirect(admin('users'));
        }
    }

}
