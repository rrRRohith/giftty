<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
  
class Message extends Model
{
    use SoftDeletes;
    protected $table = 'messages';

    public function users(){ 
    	return $this->belongsToMany('App\User');
    }

    public function sender() {
    	return $this->belongsTo('App\User','sender_id');
    }

    public function recipient() {
    	return $this->belongsTo('App\User','recipient_id');
    }
}