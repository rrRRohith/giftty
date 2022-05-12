<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCategory extends Model
{
    protected $table = 'shopping_categories';

    public function products(){
        return $this->belongsToMany('App\Product','product_shopping_category');
    }
}