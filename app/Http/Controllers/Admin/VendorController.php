<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vendor;
use Hash;
use App\User;
use App\Store;
use App\Province;
use App\VendorCategory;
use Illuminate\Support\Str;
use App\Http\Requests\VendorRequest;
use App\Http\Traits\UploadPictureTrait;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Mail;
use App\Mail\VendorSignup;
use Illuminate\Queue\SerializesModels;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use UploadPictureTrait;
  

    public function index($id=NULL)
    {
      $status=$id;
      if($id !='')
      $vendors = User::with('store')->orderBy('id', 'DESC')->where('user_type','vendor')->where('status',$id)->get();
       else
      $vendors = User::with('store')->orderBy('id', 'DESC')->where('user_type','vendor')->get();
      return view('Admin.vendors', compact('vendors','status'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $provinces=Province::get();
       $vendorCategories=VendorCategory::get();
       return view('Admin.vendor-form')->withProvinces($provinces)
                                        ->withVendorCategories( $vendorCategories);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VendorRequest $request)
    {
        //die(print_r($request->all()));
        $vendor = new User;
        $vendor->firstname = $request->firstname;
        $vendor->lastname = $request->lastname;
        $vendor->email = $request->email;
        $vendor->phone = $request->phone;
        $vendor->bio = $request->bio;
        $vendor->password = $request->password;
        $vendor->verified = $request->has('verified') ? 1:0;
        $vendor->status = $request->has('status') ? 1:0;
        $vendor->password = Hash::make($request->password);
        $vendor->user_type='vendor';

        try {
           // Mail::to( $vendor->email)->send(new VendorSignup($vendor));

            $vendor->save();
            $store=new Store;
            $store->name=$request->name;
            $store->address = $request->address;
            $store->user_id = $vendor->id;
            $store->store_email=$request->store_email;
            $store->phone=$request->phone;
            $store->slug = Str::slug($request->name);
            $store->city = $request->city;
            $store->postalcode = $request->postalcode;
            $store->province = $request->province;
            $store->mobile = $request->mobile;
            $store->website = $request->website;
            $store->description = $request->description;
            $store->vendor_category_id=$request->vendor_category_id;
            $store->save();

            if($picture = $this->__uploadPicture('logo','images/stores/')) {
                $store->logo = $picture;
                $store->save();
            }
                
            session()->flash('message',alertMessage('Successfully created the vendor!',1));
            return redirect(admin('vendors'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Failed to create vendor! '.$e->getMessage(),0));
            return redirect(admin('vendors'));
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
        $vendor = User::where('id',$id)->first();
        $store=Store::where('user_id',$id)->first();
        $provinces=Province::get();
        $vendorCategories=VendorCategory::get();
        return view('Admin.vendor-form', compact('vendor','store','provinces','vendorCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VendorRequest  $request, $id)
    {

        $vendor=User::find($id);
        $vendor->firstname = $request->input('firstname');
        $vendor->lastname = $request->input('lastname');
        $vendor->email = $request->input('email');
        $vendor->phone = $request->input('phone');
        $vendor->bio = $request->input('bio');
        $vendor->verified = $request->input('verified') ? 1:0;
        $vendor->status = $request->input('status') ? 1:0;
        $vendor->user_type='vendor';

        if($request->password != '' ) {
           $vendor->password = Hash::make($request->password);
        }

        try
        {
            $vendor->save();
            $store=Store::where('user_id',$id)->first();
            $store->name=$request->input('name');
            $store->address = $request->input('address');
            $store->user_id = $vendor->id;
            $store->slug = Str::slug($request->name);
            $store->store_email=$request->input('store_email');
            $store->city = $request->input('city');
            $store->postalcode = $request->input('postalcode');
            $store->province = $request->input('province');
            $store->mobile = $request->input('mobile');
            $store->website = $request->input('website');
            $store->description = $request->input('description');
            $store->vendor_category_id=$request->input('vendor_category_id');
            $store->save();

            if($picture = $this->__uploadPicture('logo','images/stores/')) 
            {
              @unlink('images/users/'.$store->id.'/'.$store->logo);
              $store->logo = $picture;
              $store->save();
            }
          
           session()->flash('message',alertMessage('Successfully updated the vendor!',1));
           return redirect(admin('vendors'));
           exit;
        }   
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update vendor! '.$e->getMessage(),0));
            return redirect(admin('vendors'));
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
     
        $store = Store::where('user_id',$id)->first();
        $image = 'images/stores/'.$store->logo;

        try {
            @unlink($image);
            $store->delete();

            $vendor=User::where('id',$id)->first();
            $vendor->delete();

            session()->flash('message',alertMessage('Successfully deleted the vendor!',1));
            return redirect(admin('vendors'));
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the vendor! '.$e->getMessage(),0));
            return redirect(admin('vendors'));
        }        
    }


    public function updateStatus($id){

        $vendor = User::find($id) or abort(404);
        $vendor->status = !$vendor->status;
        $vendor->save();
        return response()->json(['status'=>'Status successfully changed']);
    }

    public function bulkDelete(Request $request) {
        $usercount = 0;
        $result='';  
        if($request->has('checked') && count($request->checked)) {  

            foreach($request->checked as $key=>$id) {
              
                $store = Store::where('user_id',$id)->first();
                $image = 'images/stores/'.$store->logo;

                try {

                    @unlink($image);
                    $store->delete();

                    $vendor=User::where('id',$id)->first();
                    $vendor->delete();
                    $usercount++;

                }
                catch(\Exception $e) {
                    $result = "Error while deleting the vendor";
                }
            }
        }

        if($usercount>0 && $result!='') {

            session()->flash('message',alertMessage('Unable to delete the vendors!' .$result ,0));
             return redirect(admin('vendors'));
        }       
        else{ 
              
            session()->flash('message',alertMessage('Total ' .$usercount. ' vendors deleted',1));
            return redirect(admin('vendors'));
        }
    }


}
