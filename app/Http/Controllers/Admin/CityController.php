<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;
use App\Province;
use Session;
use Hash;
use App\Http\Requests\CityRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Giftty;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Http\Traits\UploadPictureTrait;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response


     */

    

    public function index()
    {
      $cities = City::with('provinces')->get();
      return view('Admin.cities', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
    	$provinces=Province::get();
        return view('Admin.city-form')->withProvinces($provinces);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityRequest $request)
    {
        $city = new City ;
        $city->name = $request->name;
        $city->province = $request->province;
        $city->latitude = $request->latitude;
        $city->longitude = $request->longitude;
        $city->status = $request->has('status') ? 1:0;
        try {
            $city->save();
            session()->flash('message',alertMessage('Successfully created the City!',1));
            return redirect(admin('cities'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create City! '.$e->getMessage(),0));
            return redirect(admin('cities'));
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
    
        $city = City::findOrFail($id);
        $provinces=Province::get();
        return view('Admin.city-form', compact('city','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CityRequest $request, $id)
    {
    
        $city=City::find($id);
        $city->name = $request->input('name');
        $city->province = $request->input('province');
        $city->latitude = $request->input('latitude');
        $city->longitude = $request->input('longitude');
        $city->status = $request->input('status') ? 1:0;

        try
        {
            $city->save();
            session()->flash('message',alertMessage('Successfully updated the City!',1));
            return redirect(admin('cities'));
            exit;
         }   
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update City! '.$e->getMessage(),0));
            return redirect(admin('cities'));
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
        $city = City::findOrFail($id);
        try {
            $city->delete();
            session()->flash('message',alertMessage('Successfully deleted the City!',1));
            return redirect('admin/cities');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the City! '.$e->getMessage(),0));
            return redirect('admin/cities');
        }
               
    }


    public function updateStatus($id){

        $city = City::find($id) or abort(404);
        $city->status = !$city->status;
        $city->save();
        return response()->json(['status'=>'Status successfully changed']);
    }

   
     public function emailTest(){
     Mail::to("ancelindigital@gmail.com")->send(new Giftty());
    }


    public function bulkDelete(Request $request) {
        $citycount = 0;
        $result='';    
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $city = City::findOrFail($id);
                try {
                    $city->delete();
                    $citycount++;
                }
                catch(\Exception $e) {
                    $result = "error while deleting the vendor";  
                }
            }
        }

        if($citycount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the City!' .$result ,0));
             return redirect(admin('cities'));
        }       
        else{ 
              
            session()->flash('message',alertMessage('Total ' .$citycount. ' City deleted',1));
            return redirect(admin('cities'));
        }
    }
}
