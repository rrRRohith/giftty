<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Staff extends Model
{
   use Notifiable;
   protected $table = 'staffs';
   protected $fillable = [

         'firstname','lastname', 'email', 'password',

    ];
     public function getFullNameAttribute(){
        
        return "{$this->firstname}  {$this->lastname}";
    }}
