<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
   use Notifiable;
   protected $fillable = [

         'firstname','lastname', 'email', 'password',

    ];
     public function getFullNameAttribute(){
        
        return "{$this->firstname}  {$this->lastname}";
    }
}
