<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
   
    public function provinces(){
   	    return $this->hasOne('App\Province', 'short_code','province');
    }
    
    public function stores() {
        return $this->belongsToMany('App\Store');
    }
}
