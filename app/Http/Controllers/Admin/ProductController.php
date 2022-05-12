<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Str;
use App\Product;
use App\Store;
use App\ProductType;
use App\Shipping;
use App\Category;
use App\Occasion;
use App\ProductVariant;
use App\ShoppingCategory;
use App\Attribute;
use App\Related;
use App\Http\Traits\UploadPictureTrait;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use UploadPictureTrait;
    public function index()
    {
      $products=Product::get();
      $product_variants=ProductVariant::get();
      return view('Admin.products', compact('products','product_variants'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   
       $stores       = Store::get();
       $types       = ProductType::orderBy('name','ASC')->get();
       $shippings   = Shipping::orderBy('name','ASC')->get();
       $categories  = Category::orderBy('name','ASC')->get();
       $occasions   = Occasion::orderBy('name','ASC')->get();
       $products    = Product::orderBy('name','ASC')->get();
       $attributes  = Attribute::orderBy('name','ASC')->get();
       $shopping_categories = ShoppingCategory::orderBy('name','ASC')->get();

       return view('Admin.product-form',
                        compact('types','shippings','categories','occasions','products','attributes','shopping_categories','stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
       // die(print_r($request->all()));
         $product = new Product;

        /* Primary fields */

        $product->name          = $request->name;
        $product->slug          = Str::slug($request->name);
        $product->sku           = $request->sku;
        $product->store_id      = $request->store_id; 
        $product->type_id       = $request->type_id;
        $product->description   = $request->description;
        $product->weight        = $request->weight;
        $product->height        = $request->height;
        $product->width         = $request->width;
        $product->breadth       = $request->breadth;
        $product->shipping_id   = $request->shipping_id;
        $product->published     = $request->has('published') ? 1:0;

        /* SEO section */

        $product->seo_title     = $request->seo_title;
        $product->seo_description=$request->seo_description;
        $product->seo_keyword   = $request->seo_keyword;
        $product->tag           = $request->tag;

        try {
            $product->save();
            if($picture = $this->__uploadPicture('picture','images/products/'. $product->id.'/')) {
                $product->picture = $picture;
                $product->save();
            }

            if($request->has('variant_name') && count($request->variant_name)) {
                foreach($request->variant_name as $key=>$name) {
                    if($name != '') {

                        $variant            = new ProductVariant();
                        $variant->name      = $name;
                        $variant->price     = $request->variant_price[$key];
                        $variant->description=$request->variant_description[$key];
                        $variant->stock     = $request->variant_stock[$key];
                        $variant->attribute_id=$request->variant_attribute_id[$key];
                        $variant->attribute_value=$request->variant_attribute_value[$key];
                        $variant->published =  $request->has('variant_published'.$key) ? 1:0;
                        $variant->product_id= $product->id;

                        $variant->save();

                        if($picture = $this->__uploadPicture('variant_picture.'.$key,'images/products/'. $product->id.'/')) {
                            $variant->picture = $picture;
                            $variant->save();
                        }

                    }
                }
            }

            $product->categories()->sync($request->categories);
            $product->occasions()->sync($request->occasions); 
            $product->relates()->sync($request->relates);
            $product->shopping_categories()->sync($request->relates);
 
            session()->flash('message',alertMessage('Successfully created the product!',1));
            return redirect(admin('products'));
            exit;
        }
        catch(\Exception $e) {
            die($e->getMessage());
            session()->flash('message',alertMessage('Unable to create product! '.$e->getMessage(),0));
            return redirect(admin('products'));
            exit;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
       $product=Product::where('id',$id)->first();
       $products=Product::with('relates')->where('id','!=',$id)->get();
       $product_variants=ProductVariant::where('product_id',$id)->first();
       $stores=Store::get();
       $types=ProductType::get();
       $shippings=Shipping::get();
       $categories=Category::get();
       $occasions=Occasion::get();
       $attributes=Attribute::get();
       $shopping_categories=ShoppingCategory::get();
       return view('Admin.product-form',compact('stores','types','shippings','categories','occasions','product','shopping_categories','product_variants','products','attributes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {



        $product = Product::find($id) or abort(404);

        /* Primary fields */

        $product->name          = $request->name;
        $product->slug          = Str::slug($request->name);
        $product->sku           = $request->sku;
        $product->store_id      = $request->store_id; 
        $product->type_id       = $request->type_id;
        $product->description   = $request->description;
        $product->weight        = $request->weight;
        $product->height        = $request->height;
        $product->width         = $request->width;
        $product->breadth       = $request->breadth;
        $product->shipping_id   = $request->shipping_id;        
        $product->published     = $request->has('published') ? 1:0;

        /* SEO section */

        $product->seo_title     = $request->seo_title;
        $product->seo_description=$request->seo_description;
        $product->seo_keyword   = $request->seo_keyword;
        $product->tag           = $request->tag;

        try {
            $product->save();

            if($picture = $this->__uploadPicture('picture','images/products/'. $product->id.'/')) {
                @unlink('images/products/'.$product->id.'/'.$product->picture);
                $product->picture = $picture;
          //      $product->save();
            }

            $product_variants = ProductVariant::where('product_id',$product->id)->get();

            foreach($product_variants as $variant) {
                @unlink('images/products/'.$product->id.'/'.$variant->picture);
            }

            ProductVariant::where('product_id',$product->id)->delete();
            
            if($request->has('variant_name') && count($request->variant_name)) {
                foreach($request->variant_name as $key=>$name) {
                    if($name != '') {

                        // die(print($request->has('variant_published[0]')));
                        $variant            = new ProductVariant();
                        $variant->name      = $name;
                        $variant->price     = $request->variant_price[$key];
                        $variant->description=$request->variant_description[$key];
                        $variant->stock     = $request->variant_stock[$key];
                        $variant->attribute_id=$request->variant_attribute_id[$key];
                        $variant->attribute_value=$request->variant_attribute_value[$key];
                        $variant->published = $request->has('variant_published.'.$key)?1:0;
                        $variant->product_id = $product->id;

                        $variant->save();

                        if($picture = $this->__uploadPicture('variant_picture.'.$key,'images/products/'. $product->id.'/')) {
                            $variant->picture = $picture;
                            $variant->save();
                        }

                    }
                }
            }

            $product->categories()->sync($request->categories);
            $product->occasions()->sync($request->occasions); 
            $product->relates()->sync($request->relates);
            $product->shopping_categories()->sync($request->shopping_categories);
 
            session()->flash('message',alertMessage('Successfully created the product!',1));
            return redirect(admin('products'));
            exit;
        }
        catch(\Exception $e) {
            die($e->getMessage());
            session()->flash('message',alertMessage('Unable to create product! '.$e->getMessage(),0));
            return redirect(admin('products'));
            exit;
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)

     {
        $variant=ProductVariant::where('product_id',$id)->first() or abort(404);
        @unlink('images/products/'.$product->id.'/'.$variant->picture);
       
        try {
            $variant->delete();
            
            $product = Product::where('id',$id)->first() or abort(404);
            $image = 'images/products/'.$product->id.'/'.$product->picture;
            @unlink($image);
            $product->delete();

    

            session()->flash('message',alertMessage('Successfully deleted the product!',1));
            return redirect('admin/products');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the product! '.$e->getMessage(),0));
            return redirect('admin/products');
        }               
    }

    public function updatePublished($id)
    {
       $product = Product::find($id) or abort(404);
       $product->published = !$product->published;
       $product->save();
       return response()->json(['published'=> 'published successfully changed']);
    }
    public function bulkDelete(Request $request)
    {
        $productcount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
           foreach($request->checked as $key=>$id) {
              $product = Product::findOrFail($id);
              $image = 'images/products/'.$product->id.'/'.$product->picture;
              try{
                 $product->delete();
                 $productcount++;
                 @unlink($image);            
              }
              catch(\Exception $e) {
                 $result = "error while deleting the products";               
              }
            }
        }

        if($productcount>0 && $result!='') {
           session()->flash('message',alertMessage('Unable to delete the product!' .$result ,0));
           return redirect(admin('products'));
        }       
        else{          
           session()->flash('message',alertMessage('Total ' .$productcount. ' product deleted',1));
           return redirect(admin('products'));
        }
    }
}
