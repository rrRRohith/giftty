<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function variants() {
        return $this->hasMany('App\ProductVariant');
    } 

    public function store(){
    	return $this->belongsTo('App\Store');
    }
    
     public function type(){
        return $this->belongsTo('App\ProductType');
    }

    public function categories(){
    	return $this->belongsToMany('App\Category');
    }

     public function occasions(){
    	return $this->belongsToMany('App\Occasion');
    }

     public function relates(){
    	return $this->belongsToMany('App\Product','product_related','product_id','related_id');
    }

     public function similars(){
    	return $this->belongsToMany('App\Similar');
    }

    public function shopping_categories(){
        return $this->belongsToMany('App\ShoppingCategory','product_shopping_category');
    }

     public function attributes(){
        return $this->hasMany('App\Attribute');
    }
}
