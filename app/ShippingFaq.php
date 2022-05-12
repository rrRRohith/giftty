<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingFaq extends Model
{
  protected $table = 'shipping_faq';

  public function vendor_category() {
  	return $this->belongsTo('App\VendorCategory','vendor_category_id');
  }
}