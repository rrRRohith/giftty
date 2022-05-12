<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Item;
use App\Product;
class OrderController extends Controller
{
 
    public function orders()
    { 
       $id=auth()->user()->id;//vendor id

        $orders = Order::with(['carts'=>function($q) use($id) { 
                                    $q->with(['items'=>function($q1) use($id) {
                                            $q1->where('vendor_id',$id);
                                    }]);
                    
                            }])->get();
    //  die(print_r($orders));
          
        return view('Vendor.orders',compact('orders'));
        
    }
    
    public function viewOrder($id, Request $request){
        $item = Item::with(['cart'=>function($q) { $q->with('delivery','billing'); }])->where('id',$id)->first();
        
        return view('Vendor.view-order')->withItem($item);
    }
    
    public function updateOrder($id, Request $request){
        $item = Item::find($id) or abort(404);
        $item->status = $request->status;
        $item->save();
        
        return redirect(seller('orders/'.$item->id));
        exit;
    }
    
}
