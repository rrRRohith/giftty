<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;
use App\Http\Requests\CustomerRequest;
use App\Http\Traits\UploadPictureTrait;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use UploadPictureTrait;
    public function index()
    {
      $customers = User::orderBy('id', 'DESC')->where('user_type','customer')->get();
      return view('Admin.customers', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Admin.customer-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $customer = new User;
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->bio = $request->bio;
        $customer->password = $request->password;
        $customer->verified = $request->has('verified') ? 1:0;
        $customer->status = $request->has('status') ? 1:0;
        $customer->password = Hash::make($request->password);
        $customer->user_type='customer';
        try {
            $customer->save();
            if($picture = $this->__uploadPicture('picture','images/users/'. $customer->id.'/')) {
               $customer->picture = $picture;
            }
            $customer->save();
            session()->flash('message',alertMessage('Successfully created the customer!',1));
            return redirect(admin('customers'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create customer! '.$e->getMessage(),0));
            return redirect(admin('customers'));
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
      $customer = User::findOrFail($id);
      return view('Admin.customer-form', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        $customer=User::find($id);
        $customer->firstname = $request->input('firstname');
        $customer->lastname = $request->input('lastname');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->bio = $request->input('bio');
        $customer->verified = $request->input('verified') ? 1:0;
        $customer->status = $request->input('status') ? 1:0;
        $customer->user_type='customer';
        if($request->password != '')
           $customer->password = Hash::make($request->password);
        try
        {
            $customer->save();
            if($picture = $this->__uploadPicture('picture','images/users/'. $customer->id.'/')) {
                @unlink('images/users/'.$customer->id.'/'.$customer->picture);
                $customer->picture = $picture;
                $customer->save();
            }
            session()->flash('message',alertMessage('Successfully updated the customer!',1));
            return redirect(admin('customers'));
            exit;
        }   
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update customer! '.$e->getMessage(),0));
            return redirect(admin('customers'));
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
        $customer = User::findOrFail($id);
        $image = 'images/users/'.$customer->id.'/'.$customer->picture;
        try {
            $customer->delete();
            @unlink($image);
            session()->flash('message',alertMessage('Successfully deleted the customer!',1));
            return redirect('admin/customers');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the customer! '.$e->getMessage(),0));
            return redirect('admin/customers');
        }
               
    }
    public function updateStatus($id){

        $customer = User::find($id) or abort(404);
        $customer->status = !$customer->status;
        $customer->save();

        return response()->json(['status'=>'Status successfully changed']);
    }


    public function bulkDelete(Request $request) {
        $customercount = 0;
        $result='';  
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $customer = User::findOrFail($id);
                $image = 'images/users/'.$customer->id.'/'.$customer->picture;
                try {
                    $customer->delete();
                    $customercount++;
                    @unlink($image);  
                }
                catch(\Exception $e) {
                    $result = "error while deleting the customer";   
                }
            }
        }
        if($customercount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the customer!' .$result ,0));
             return redirect(admin('customers'));
        }       
        else{    
            session()->flash('message',alertMessage('Total ' .$customercount. ' customer deleted',1));
            return redirect(admin('customers'));
        }
    }


}
