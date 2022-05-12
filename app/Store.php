<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
    
    public function cities() {
        return $this->belongsToMany('App\City');
    }
}
