<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Auth;
use App\Occasion;
use App\ShoppingCategory;
use App\Banner;
use App\Category;
use App\Slider;
use App\Product;
use App\ProductVariant;
//use App\Http\Traits\UploadPictureTrait;

class HomeController extends Controller
{

     //  use UploadPictureTrait;

	public function categories()
    {
        $result = Category::get();
        $categories = [];
        foreach($result as $row) {
            $categories[] = [ 'id'          => $row->id, 
                              'name'        => $row->name,
                              'parent_id'   => $row->parent_id,
                              'slug'        => $row->slug,
                              'status'      => 1,
                              'images'      =>asset('images/categories/'.$row->id.'/'.$row->picture),
                               
                            ];
        }

        return response()->json(['success'=>true,'data'=>['category'=>$categories,'message'=>'get data success']]);
    }
    
    public function occasions()
    {
        $occasions = Occasion::where('status',1)->orderBy('name','ASC')->get();
        return response()->json(['status'=>'success','message'=>'get data success!','occasion'=>$occasions]);
    }

    public function shoppingCategories()
    {
        $shopping_categories = ShoppingCategory::where('status',1)->orderBy('name','getASC')->get();
        return response()->json(['status'=>'success','message'=>'get data success!','shopping_categories'=>$shopping_categories]);
    }


    public function banners()
    {
        $result = Banner::get();
        $banners = [];
        foreach($result as $row) {
            $banners[] = [  'id'          => $row->id, 
                            'title'       => $row->title,
                            'description' => $row->description,
                            'link'        => $row->link,
                            'button_text' => $row->button_text,
                            'display_order'=> $row->display_order,
                            'status'      => 1,
                            'images'      =>asset('images/banners/'.$row->id.'/'.$row->picture),
                               
                            ];
        }

        return response()->json(['success'=>true,'data'=>['banner'=>$banners,'message'=>'get data success']]);
    }
    public function sliders()
    {
        $result = Slider::get();
        $banners = [];
        foreach($result as $row) {
            $banners[] = [  'id'          => $row->id, 
                            'title'       => $row->title,
                            'description' => $row->description,
                            'link'        => $row->link,
                            'button_text' => $row->button_text,
                            'display_order'=> $row->display_order,
                            'status'      => 1,
                            'images'      =>asset('images/banners/'.$row->id.'/'.$row->picture),
                               
                            ];
        }

        return response()->json(['success'=>true,'data'=>['banner'=>$banners,'message'=>'get data success']]);
        
    }
    public function home(){
        $topbanners = Banner::where('banner_type','=','mobile_top_banner')->get();

        foreach($topbanners as $topbanner) {
            $data['top-banner'][] = array('id'  => $topbanner->id, 
                                        'title'       => $topbanner->title,
                                        'description' => $topbanner->description,
                                        'link'        => $topbanner->link,
                                        'button_text' => $topbanner->button_text,
                                        'display_order'=> $topbanner->display_order,
                                        'banner_type' => $topbanner->banner_type,
                                        'status'      => 1,
                                        'images'      =>asset('images/banners/'.$topbanner->id.'/'.$topbanner->picture));
        }
        
        $middlebanners = Banner::where('banner_type','=','mobile_middle_banner')->get();
        foreach($middlebanners as $middlebanner) {
            $data['middle-banner'][] = array('id'  => $middlebanner->id, 
                                        'title'       => $middlebanner->title,
                                        'description' => $middlebanner->description,
                                        'link'        => $middlebanner->link,
                                        'button_text' => $middlebanner->button_text,
                                        'display_order'=> $middlebanner->display_order,
                                        'banner_type' => $middlebanner->banner_type,
                                        'status'      => 1,
                                        'images'      =>asset('images/banners/'.$middlebanner->id.'/'.$middlebanner->picture));
        }
         $trendingproducts = Product::with('categories','type','variants','store','relates')
                            ->whereHas('categories',function($query){
                            $query->where('category_id',15);})->get();
         foreach($trendingproducts as $product) {
         $data['trending-product'][] = array('id'  => $product->id, 
                                        'name'       => $product->name,
                                        'sku'         => $product->sku,
                                        'images'      =>asset('images/products/'.$product->id.'/'.$product->picture));
        }
        
        $bestdealproducts = Product::with('categories','type','variants','store','relates')
                            ->whereHas('categories',function($query){
                            $query->where('category_id',19);})->get();
        foreach($bestdealproducts as $product) {
        $data['bestdeal-product'][] = array('id'  => $product->id, 
                                        'name'       => $product->name,
                                        'sku'         => $product->sku,
                                        'store_name'         =>$product->store->name,
                                        
                                        'images'      =>asset('images/products/'.$product->id.'/'.$product->picture));
        }
         $categories = Category::get();
      
        foreach($categories as $category) {
        $data['categories'][] = array( 'id'      => $category->id, 
                              'name'        => $category->name,
                              'parent_id'   => $category->parent_id,
                              'slug'        => $category->slug,
                              'status'      => 1,
                              'images'      =>asset('images/categories/'.$category->id.'/'.$category->picture));
                            
        }
         $json['data'] = $data;
        return response()->json($json);
    }
}
