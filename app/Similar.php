<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Similar extends Model
{
    protected $table='products';

    public function products(){
    	return $this->belongsToMany('App\Product','product_similar','similar_id','product_id');
    	
   }
 
}
