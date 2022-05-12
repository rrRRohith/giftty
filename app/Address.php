<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model{

	  protected $table='addresses';
	  public function address(){
	  	  return $this->belongsTo('App\Cart');
      }
}
