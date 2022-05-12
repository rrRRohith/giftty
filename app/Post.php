<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function topics()
    {
    	return $this->belongsToMany('App\Topic');
    }

}
