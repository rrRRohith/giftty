<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public function users(){
    	return $this->belongsToMany('App\User','discount_user','discount_id','user_id');
    }
}
