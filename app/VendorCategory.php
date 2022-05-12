<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorCategory extends Model
{
       protected $table = 'vendor_categories';

       public function faqs() {
       	 return $this->hasMany('App\ShippingFaq');
       }
}