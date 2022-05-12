<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
	public function product() {
		return $this->belongsTo('App\Product');
	}
    
}
