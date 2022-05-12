<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	protected $appends = ['subtotal','discount','total'];

	public function items() {
		return $this->hasMany('App\Item');
	}


    public function getSubtotalAttribute()
    {
        return $this->items->sum(function($detail){
            return $detail->price * $detail->quantity;
        });
    }

    public function billing(){
    	return $this->belongsTo('App\Address','billing_id');
    }

     public function delivery(){
    	return $this->belongsTo('App\Address','delivery_id');
    }

     public function getDiscountAttribute()
     {
          if($this->discount_id !='' && $this->discount_code !='')
          {  
               $discount=Discount::where('id','=',$this->discount_id)->first();

               if($discount->value_type == 'percentage')
                  return ($this->subtotal * $discount->value) / 100;
               else
                return $discount->value;
          }
    }

    public function getTotalAttribute()
    {
        return $this->subtotal-$this->discount;
    }
 
}
