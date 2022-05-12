<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Related extends Model
{
	
  protected $table='products';

   public function products(){
    	return $this->belongsToMany('App\Product','product_related','related_id','product_id');
   }
}
