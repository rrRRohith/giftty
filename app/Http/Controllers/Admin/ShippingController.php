<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shipping;
use App\Policy;
use App\Http\Requests\ShippingRequest;


class ShippingController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $shippings = Shipping::get();
      return view('Admin.shippings', compact('shippings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $policies=Policy::get();
       return view('Admin.shipping-form')->withPolicies($policies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShippingRequest $request)
    {
        $shipping = new Shipping;
        $shipping->name = $request->name;
        $shipping->short_description = $request->short_description;
        $shipping->description = $request->description;
        $shipping->days = $request->days;
        $shipping->shipping_policy_id = $request->shipping_policy_id;
        $shipping->cut_off = $request->cut_off; 
        $shipping->priority = $request->priority; 
        $shipping->local_delivery = $request->has('local_delivery') ? 1:0;
        $shipping->delivery_date = $request->has('delivery_date') ? 1:0;
        $shipping->status = $request->has('status') ? 1:0;
        $shipping->charge=$request->charge;
        try {
            $shipping->save();
            session()->flash('message',alertMessage('Successfully created the shipping!',1));
            return redirect(admin('shippings'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create shipping! '.$e->getMessage(),0));
            return redirect(admin('shippings'));
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
      $shipping = Shipping::findOrFail($id);
      $policies=Policy::get();
      return view('Admin.shipping-form', compact('shipping','policies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShippingRequest $request, $id)
    {
        $shipping = Shipping::findOrFail($id);
        $shipping->name = $request->input('name');
        $shipping->short_description = $request->input('short_description');
        $shipping->description = $request->input('description');
        $shipping->days = $request->input('days');
        $shipping->shipping_policy_id = $request->input('shipping_policy_id');
        $shipping->cut_off = $request->input('cut_off'); 
        $shipping->priority = $request->input('priority'); 
        $shipping->local_delivery = $request->has('local_delivery') ? 1:0;
        $shipping->delivery_date = $request->input('delivery_date') ? 1:0;
        $shipping->status = $request->input('status') ? 1:0;
        $shipping->charge=$request->input('charge');
        try {
            $shipping->save();
            session()->flash('message',alertMessage('Successfully updated the shipping!',1));
            return redirect(admin('shippings'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update shipping! '.$e->getMessage(),0));
            return redirect(admin('shippings'));
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
       $shipping = Shipping::find($id) or abort(404);
       $shipping->status = !$shipping->status;
       $shipping->save();
       return response()->json(['status'=>'Status successfully changed']);
    }  
      public function updateDelivery($id)
    {
       $shipping = Shipping::find($id) or abort(404);
       $shipping->delivery_date = !$shipping->delivery_date;
       $shipping->save();
       return response()->json(['delivery_date'=>'delivery date successfully changed']);
    }  

    public function delete($id)
    {
        $shipping = Shipping::findOrFail($id);
        try {
            $shipping->delete();
            session()->flash('message',alertMessage('Successfully deleted the shipping!',1));
            return redirect('admin/shippings');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the shipping! '.$e->getMessage(),0));
            return redirect('admin/shippings');
        }
    }
    public function bulkDelete(Request $request) {
        $shippingcount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $shipping = Shipping::findOrFail($id);
                try {
                    $shipping->delete();
                    $shippingcount++;
                }
                catch(\Exception $e) {
                    $result = "error while deleting the shipping";           
                }
            }
        }
        if($shippingcount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the shipping!' .$result ,0));
            return redirect(admin('shippings'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$shippingcount. ' shipping deleted',1));
          return redirect(admin('shippings'));
        }
    }
}
