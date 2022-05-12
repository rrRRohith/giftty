<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\CategoryProduct;
use App\Product;
use App\ShoppingCategory;
use App\ProductVariant;
use App\ProductType;
class ProductController extends Controller
{
    public function categoryListing($slug)
    {
	   	$category = Category::where('slug','=',$slug)->first() or abort(404);
	   	$productsquery = Product::with('categories','type','variants','store')->whereHas('categories',function($query) use ($category){
	                            $query->where('category_id',$category->id);
	   	                    })->whereHas('variants',function($q) {
	   	   		                $q->where('published',1);
	   	                    });

        if(request()->sortby=="Ascending"){
        	$productsquery->orderBy('name','asc');
        }
        elseif(request()->sortby=="Descending"){
            $productsquery->orderBy('name','desc');
        }
        elseif((request()->sortby=="Low")){

        }
        
        //     if (Request()->sortby == "Ascending"){
        //     $type = Request()->sortby;
        //     $ordersquery->orderBy('name','asc',$type);
        // } 
        
        
	   	$products = $productsquery->paginate(12);
	   	$categories = Category::withCount('products')->get();
    	return view('Pages.category-listing',compact('products','category','categories')); 
    }
    
    public function productDetail($slug)
    {
	    $product = Product::with('categories','type','variants','store','relates')
	   // ->whereHas('type',function($query){ })
	    ->where('slug','=',$slug)->first() or abort(404);
	  // die(print_r($product));
	   	return view('Pages.product',compact('product'));
    }
    public function occasionListing($slug){
        $category = Occasion::where('slug',$slug)->get();
        //die(print_r($occasion));
        $productsquery = Product::with('categories','type','variants','store','occasions')->whereHas('occasions',function($query) use ($category){
	                            $query->where('occasion_id',$category->id);
	   	                    })->whereHas('variants',function($q) {
	   	   		                $q->where('published',1);
	   	                    });
	    if(request()->sortby=="Ascending"){
        	$productsquery->orderBy('name','asc');
        }
        elseif(request()->sortby=="Descending"){
            $productsquery->orderBy('name','desc');
        }
        elseif((request()->sortby=="Low")){

        }
	    $products = $productsquery->paginate(12);
        return view('Pages.category-listing',compact('category','products'));
        
    }
    public function shoppingcategoryListing($slug){
          $category = ShoppingCategory::where('slug',$slug)->first() or abort(404);
          $productsquery = Product::with('categories','type','variants','store','occasions','shopping_categories')->whereHas('shopping_categories',function($query) use ($category){
	                            $query->where('shopping_category_id',$category->id);
	   	                    })->whereHas('variants',function($q) {
	   	   		                $q->where('published',1);
	   	                    });
	   	                    
	   	    if(request()->sortby=="Ascending"){
            	$productsquery->orderBy('name','asc');
            }
            elseif(request()->sortby=="Descending"){
                $productsquery->orderBy('name','desc');
            }
            elseif((request()->sortby=="Low")){
    
            }                
	   	                    
	   	   $products = $productsquery->paginate(12);
	   	  	$categories = Category::withCount('products')->get();
          return view('Pages.shop',compact('category','products','categories'));
    }
    public function budget($min,$max){
          $search = "Budget  ".$min." - ".$max;
          $productsquery = Product::with('categories','type','variants','store','occasions','shopping_categories')->whereHas('variants',function($query) use ($min,$max){
	                            $query->where('price','>=',$min)->where('price','<=',$max)->where('published',1);
	   	                    });
	   	  $products = $productsquery->paginate(12);
	   	  $categories = Category::withCount('products')->get();
	   	  //	die(print_r($products));
          return view('Pages.products-details',compact('search','products','categories'));
    }
    public function producttypeListing($slug){
        
         $category = ProductType::where('slug',$slug)->first() or abort(404);
          $productsquery = Product::with('categories','type','variants','store','occasions','shopping_categories')->whereHas('type',function($query) use ($category){
	                            $query->where('type_id',$category->id);
	   	                    })->whereHas('variants',function($q) {
	   	   		                $q->where('published',1);
	   	                    });
	   	if(request()->sortby=="Ascending"){
        	$productsquery->orderBy('name','asc');
        }
        elseif(request()->sortby=="Descending"){
            $productsquery->orderBy('name','desc');
        }
        elseif((request()->sortby=="Low")){

        }                
	   	                    
   	      $products = $productsquery->paginate(12);
   	      $categories = Category::withCount('products')->get();
          return view('Pages.category-listing',compact('category','products','categories'));
    }
  



  

}
