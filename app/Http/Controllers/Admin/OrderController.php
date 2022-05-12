<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\OrderStatus;

class OrderController extends Controller
{
    public function orders($id=NULL)
    {
    	$status=$id;
    	if($id != '')
            $orders = Order::with('users')->orderBy('id', 'DESC')->where('status',$id)->get();
    	else
            $orders = Order::with('users')->orderBy('id', 'DESC')->get();
        $statuses = OrderStatus::get();  
        return view('Admin.orders',compact('orders','status','statuses'));
    }
  
  
    public function edit(Request $request,$id)
    {
        $order = Order::find($id) or abort(404);
        if($order->status = 0 ||  $order->status = 1 || $order->status = 2 ||  $order->status = 3 || $order->status = 4 ||  $order->status = 5){
	        $order->status=$request->status;
	        $order->save();
        }
        return redirect('/admin/orders');
    }
    
    
}