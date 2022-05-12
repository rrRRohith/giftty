<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Discount;
use App\Http\Requests\DiscountRequest;
use App\User;
class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $discounts = Discount::get();
      return view('Admin.discount',compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.discount-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiscountRequest $request)
    {
        $discount = new Discount;
        $discount->code = $request->code;
        $discount->description = $request->description;
        $discount->start_time = $request->start_time;
        $discount->end_time = $request->end_time;
        // $discount->start_time =  date('Y-m-d', strtotime($request->start_time));
        // $discount->end_time =  date('Y-m-d', strtotime($request->end_time));
        $discount->min_amount = $request->min_amount;
        $discount->max_usage = $request->max_usage;
        $discount->value = $request->value;
        $discount->value_type = $request->value_type;
        $discount->use_count = 0;
        $discount->discount_type = $request->discount_type;
        $discount->status = $request->has('status') ? 1:0;
        try {
            $discount->save();
            $discount->users()->sync($request->users);
            session()->flash('message',alertMessage('Successfully created the discount!',1));
            return redirect(admin('discounts'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create discount! '.$e->getMessage(),0));
            return redirect(admin('discounts'));
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
          $discount = Discount::find($id) or abort(404);
          return view('Admin.discount-form', compact('discount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $discount = Discount::find($id) or abort(404);
        $discount->code = $request->input('code');
        $discount->description = $request->input('description');
        $discount->start_time = $request->input('start_time');
        $discount->end_time = $request->input('end_time').' '.'23:59:59';
        // $discount->start_time =  date('Y-m-d', strtotime($request->start_time));
        // $discount->end_time =  date('Y-m-d', strtotime($request->end_time)).' '.'23:59:59';
        $discount->min_amount = $request->input('min_amount');
        $discount->max_usage = $request->input('max_usage');
        $discount->value = $request->input('value');
        $discount->value_type = $request->input('value_type');
        $discount->use_count = $request->input('use_count');
        $discount->discount_type = $request->input('discount_type');
        $discount->status = $request->has('status') ? 1:0;
        try {
            $discount->save();
            $discount->users()->sync($request->users);
            session()->flash('message',alertMessage('Successfully created the discount!',1));
            return redirect(admin('discounts'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create discount! '.$e->getMessage(),0));
            return redirect(admin('discounts'));
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
       $discount =Discount::find($id) or abort(404);
       $discount->status = !$discount->status;
       $discount->save();
       return response()->json(['status'=>'Status successfully changed']);
    }  

    public function delete($id)
     {
      
        $discount = Discount::find($id) or abort(404);
        try {

            //$discount->products()->detach();
            $discount->delete();
            
            session()->flash('message',alertMessage('Successfully deleted the discount!',1));
            return redirect('admin/discounts');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the discount! '.$e->getMessage(),0));
            return redirect('admin/discounts');
        }
    }
    public function bulkDelete(Request $request) {
        $discountcount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $discount = Discount::findOrFail($id);
                try {
                    $discount->delete();
                    $discountcount++;
                }
                catch(\Exception $e) {
                    $result = "error while deleting the discount";           
                }
            }
        }
        if($discountcount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the discount!' .$result ,0));
            return redirect(admin('discounts'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$discountcount. ' discount deleted',1));
          return redirect(admin('discounts'));
        }
    }
}
