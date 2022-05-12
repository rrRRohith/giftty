<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function carts(){
    	return $this->belongsTo('App\Cart','cart_id');
    }
     public function users(){
    	return $this->belongsTo('App\User','user_id');
    
     }
     public function items(){
     	return $this->belongsTo('App\Item');
     }

}