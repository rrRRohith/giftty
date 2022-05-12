<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $appends = ['subtotal'];
	
	
	public function cart() {
	    return $this->belongsTo('App\Cart');
	}
// 	public function products(){
// 	    return $this->belongsTo('App\Product');
// 	}

    public function getSubtotalAttribute() {
       return $this->price * $this->quantity;
    }
}
