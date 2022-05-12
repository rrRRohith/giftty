@extends('layouts.vendor')
@section('styles')
<!-- <link rel="stylesheet" href="croppie.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<section id="vendor-page">
    <div class="row">
        
        <div class="col-sm-12">

            <article>
                <h1>
                    <a href="{{seller('products')}}" class="btn btn-default pull-right"><i class="fa fa-undo"></i> All  Products</a>
                    <span><i class="fa fa-gift"></i> New Product</span></h1>

                @if(session()->has('message'))
                    {!! session('message') !!}
                @endif

                <div class="content-box">
                    <div class="content-box-body"> 
                        <form action="@if(isset($product)){{seller('products/'.$product->id.'/edit')}}@else{{seller('products/create')}}@endif"
                            class="user-form-wrap vendor-form" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div id="tabs-wrapper">

                                <ul class="tabs-list">
                                    <li><a href="#product-details" class="active">Product Details</a></li>
                                    <li><a href="#product-variants">Variants</a></li>
                                    <li><a href="#product-categories">Categories & Filters</a></li>
                                    <li><a href="#product-seo">SEO</a></li>
                                </ul>

                                <div class="tab-item active" id="product-details">

                                    <div class="row">

                                        <div class="col-md-8">

                                            <div class="row">
                                                <div class="col-sm-12 form-group">
                                                    <label class="h6 f-12">Product Name*</label>
                                                    <input type="text"  name="name"
                                                        value="{{old('name',isset($product) ? $product->name:'')}}" autocomplete="off" placeholder="Product Name">
                                                    <span class="form-error">{{$errors->first('name')}}</span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                

                                                <div class="col-sm-6 form-group mb-4">
                                                    <label class="h6 f-12 ">SKU*</label>
                                                    <input type="text" class="sku"   name="sku"
                                                        value="{{old('sku',isset($product) ? $product->sku:'')}}" placeholder="SKU">
                                                    <span class="form-error">{{$errors->first('sku')}}</span>
                                                </div> 

                                                <div class="col-sm-6 form-group mb-4">
                                                    <label class="h6 f-12 ">Product Type*</label>
                                                    <select name="type_id">
                                                        <option>Select a Type</option>
                                                        @foreach($types as $type)
                                                            <option value="{{$type->id}}" <?php 
                                                            if(old('type_id',isset($product) ? $product->type_id:'')==$type->id)
                                                                echo 'selected="selected"';
                                                             ?> >{!!$type->name!!}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="form-error">{{$errors->first('type_id')}}</span>
                                                </div> 
                                            
                                            </div> 
                                            <div class="row">       
                                                <div class="col-sm-12 form-group">
                                                    <label class="h6 f-12">Description</label>
                                                    <textarea name="description" rows="10" placeholder="Product Description">{!! old('description',isset($product) ? $product->description:'') !!}</textarea>
                                                    <span class="form-error">{{$errors->first('description')}}</span>
                                                </div>
                                                
                                            </div>

                                            <div class="row">

                                                <div class="col-sm-3 form-group">
                                                    <label class="h6 f-12">Weight</label>
                                                    <input type="text" name="weight"
                                                        value="{{old('weight',isset($product) ? $product->weight:'')}}"
                                                        autocomplete="off" placeholder="Weight">
                                                    <span class="form-error">{{$errors->first('weight')}}</span>
                                                </div>

                                                <div class="col-sm-3 form-group mb-4">
                                                    <label class="h6 f-12">Width</label>
                                                    <input type="text" name="width"
                                                        value="{{old('width',isset($product) ? $product->width:'')}}" autocomplete="off" placeholder="Width">
                                                    <span class="form-error">{{$errors->first('width')}}</span>
                                                </div> 

                                                <div class="col-sm-3 form-group mb-4">
                                                    <label class="h6 f-12">Height</label>
                                                    <input type="text" name="height"
                                                        value="{{old('height',isset($product) ? $product->height:'')}}" autocomplete="off" placeholder="Height">
                                                    <span class="form-error">{{$errors->first('height')}}</span>
                                                </div>

                                                <div class="col-sm-3 form-group mb-4">
                                                    <label class="h6 f-12">Breadth</label>
                                                    <input type="text" name="breadth"
                                                        value="{{old('breadth',isset($product) ? $product->breadth:'')}}" autocomplete="off" placeholder="Breadth">
                                                    <span class="form-error">{{$errors->first('breadth')}}</span>
                                                </div>
                                                


                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mb-4">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                          <input class="form-check-input" type="checkbox" name="published" value="" id="flexCheckChecked" @if(old('published',isset($product) ? $product->published:0) == 1)
                                                            checked @endif>
                                                          
                                                           Product Visibilty
                                                          </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            

                                        </div>

                                        <div class="col-md-4">
                                            <label class="h6 f-12">Product Image*</label>
                                            <div class="jumbotron text-center">
                                                <div class="row">
                                                    <div class="col-lg-12" id="upload-preview">
                                                        <img id="uploaded-image"
                                                            src="{{old('picture',isset($product) && $product->picture != '' ? asset('images/products/'.$product->id.'/'.$product->picture):asset('images/default/product.png'))}}" >
                                                    </div>
                                                    <div class="input-group mt-3">
                                                        <div class="custom-file text-center">
                                                            <input type="file" accept="image/*" id="product_pic">
                                                            <input type="hidden" name="picture" id="picture" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-action">
                                        <div class="col" >
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-lg next-button" type="button">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- Tab Item //-->  

                                <div class="tab-item" id="product-variants">
                                    @if(!request()->isMethod('post') && isset($product) && count($product->variants)) 
                                    @foreach($product->variants as $key=>$variant)
                                    <div class="variant-item">
                                        <div class="variant-label">Variant {{$key+1}}</div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-4">
                                                            <input type="text" name="variant_name[]" 
                                                                value="{{$variant->name}}" placeholder="Name*">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mb-4">
                                                            <input type="text" name="variant_price[]"
                                                                value="{{$variant->price}}" placeholder="Price*">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mb-4">
                                                            <select name="variant_stock[]" >
                                                                <option value="">Stock</option>
                                                                 <option value="-1">Not requied</option>
                                                                    @for($i=1;$i<=100;$i++) 
                                                                    <option value="{{$i}}" @if($i == $variant->stock) selected="selected" @endif >
                                                                    {{$i}}
                                                                    </option>
                                                                    @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group mb-4">
                                                            <textarea rows="2" 
                                                                name="variant_description[]" placeholder="Description">{{$variant->description}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-4">
                                                            <select name="variant_attribute_id[]]">
                                                               @foreach($attributes as $attribute)
                                                               <option value="{{$attribute->id}}" @if($attribute->id == $variant->attribute_id) selected="selected" @endif >
                                                                {!!$attribute->name!!}
                                                               </option>
                                                               @endforeach
                                                               <option value="0">Custom</option>
                                                            </select> 
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-4">
                                                            <input name="variant_attribute_value[]" type="text" value="{{$variant->attribute_value}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-4">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                  <input class="form-check-input" type="checkbox" name="variant_published[]" value="{{old('variant_published',isset($variant) ? $variant->published:0)}}" id="variantCheck" @if(old('variant_published',isset($variant) ? $variant->published:0) == 1)
                                                                    checked @endif>
                                                                  Published
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div id="add-variant" class="text-right  pull-right">
                                                            <a href="#" class="delete-variant pull-right-trash btn btn-default" ><i class="fa fa-trash"></i> Delete Variant</a> 
                                                            <a href="#" class="btn btn-default  add-variant-item">
                                                        <i class="fa fa-plus" aria-hidden="true"></i> Add Variant</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="jumbotron text-center" style="padding:5px;">
                                                    <div class="row">
                                                        <div class="col-lg-12" id="upload-preview">
                                                            
                                                            @php 

                                                                    $target = 'images/products/'.$product->id.'/'.($variant->picture ?? 'none');
                                                                    $image = '';
                                                                    $type = '';

                                                                    if(file_exists($target)) {
                                                                        $image = file_get_contents($target);
                                                                        $type = pathinfo($target, PATHINFO_EXTENSION);
                                                                    }

                                                                    
                                                             @endphp

                                                            <img id="variant_preview1"
                                                                src="@if($variant->picture!=''){{asset('images/products/'.$product->id.'/'.$variant->picture)}}@else{{asset('images/default/product.png')}}@endif" class="variant_preview">
                                                                <input type="file" accept="image/*" id="variant_upload1" class="variant_upload" data-id="1">
                                                                <input type="hidden" name="variant_picture[]" id="variant_picture1" value="{{'data:image/' . $type . ';base64,' . base64_encode($image)}}" class="variant_picture" />
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Variant Item //-->  

                                    @endforeach

                                    @else


                                    <div class="variant-item">
                                        <div class="variant-label">Variant 1</div>
                                        <div class="row">

                                            <div class="col-md-8">

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group mb-4">
                                                            <input type="text" name="variant_name[]"
                                                                value="{{old('variant_name',isset($product_variants) ? $product_variants->name:'')}}" placeholder="Variant Name*">
                                                            <span class="form-error">{{$errors->first('variant_name')}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group mb-4">
                                                            <input type="text" name="variant_price[]"
                                                                value="{{old('variant_price',isset($product_variants) ? $product_variants->price:'')}}" placeholder="Price*">
                                                            <span class="form-error">{{$errors->first('variant_price')}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group mb-4">
                                                            <select name="variant_stock[]" >
                                                                <option value="">Stock</option>
                                                                 <option value="-1">Not requied</option>
                                                                    @for($i=1;$i<=100;$i++) <option value="{{$i}}"
                                                                    <?php echo old('variant_stock',isset($product_variants) ? $product_variants->stock:'') == $i ? 'selected="selected"':''; ?>>
                                                                    {{$i}}
                                                                    </option>
                                                                    @endfor
                                                            </select>
                                                            <span class="form-error">{{$errors->first('variant_stock')}}</span>
                                                        </div>
                                                    </div>



                                                </div>

                                                <div class="row">

                                                    <div class="col">

                                                        <div class="form-group mb-4">
                                                            <textarea rows="2" 
                                                                name="variant_description[]" placeholder="Variant description">{{old('variant_description',isset($product_variants) ? $product_variants->description:'')}}</textarea>
                                                            <span class="form-error">{{$errors->first('variant_description')}}</span>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-4">
                                                            <select name="variant_attribute_id[]]">
                                                               @foreach($attributes as $attribute)
                                                               <option value="{{$attribute->id}}"<?php echo old('attribute_id',isset($attribute) ? $attribute->attribute_id:'') == $attribute->id  ? 'selected="selected"':''; ?>>
                                                                {!!$attribute->name!!}
                                                               </option>
                                                               @endforeach
                                                               <option value="0">Custom</option>
                                                            </select>
                                                            <span
                                                                class="form-error">{{$errors->first('attribute_id')}}</span>
                                                        </div>
                                                    </div>
         

                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-4">
                                                            <input name="variant_attribute_value[]" type="text" value="" />
                                                             
                                                            <span class="form-error">
                                                                {{$errors->first('attribute_value')}} </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">

                                                        <div class="form-group mb-4">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                  <input class="form-check-input" type="checkbox" name="variant_published[]" value="" id="variantChecked" @if(old('variant_published') == 1)
                                                                    checked @endif>
                                                                  Published
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div id="add-variant" class="text-right  pull-right">
                                                            <a href="#" class="delete-variant pull-right-trash btn btn-default" ><i class="fa fa-trash"></i> Delete Variant</a> 
                                                            <a href="#" class="btn btn-default  add-variant-item">
                                                        <i class="fa fa-plus" aria-hidden="true"></i> Add Variant</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="jumbotron text-center" style="padding:5px;">
                                                    <div class="row">
                                                        <div class="col-lg-12" id="upload-preview">
                                                            <img id="variant_preview1"
                                                                src="{{asset('images/default/product.png')}}" 
                                                                class="variant_preview">
                                                            <input type="file" accept="image/*" id="variant_upload1" 
                                                            class="variant_upload" data-id="1">
                                                            <input type="hidden" name="variant_picture[]" id="variant_picture1" value="" class="variant_picture" />
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Variant Item //-->   

                                    @endif 
                                        
                                    <!-- Include picture & variation- type-->


                                    <div class="row form-action" id="form-action">

                                        <div class="col" >
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-lg  next-button" type="button">
                                                    Next
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                    

                                </div><!-- End of Product Variant tab //-->

                                <div class="tab-item" id="product-categories">
                                    <div class="row">
                                        <div class="col-sm-6 form-group mb-4">
                                            <label class="h6 f-12 control-label">Categories</label>
                                            <div>
                                                <select name="categories[]" id="categories" multiple>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}" <?php 
                                                        if(in_array($category->id,request()->categories ?? []))
                                                            echo 'selected="selected"';
                                                        elseif(!request()->isMethod('post') && isset($product) 
                                                          && $product->categories()->where('category_id',$category->id)->count()) 
                                                            echo 'selected="selected"';
                                                    ?> >{!!$category->name!!}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group mb-4">
                                            <label class="h6 f-12">Shopping Categories</label>
                                            <div>
                                                <select name="shopping_categories[]" id="shopping_categories" multiple>
                                                    @foreach($shopping_categories as $shopping)
                                                    <option value="{{$shopping->id}}" <?php 
                                                    if(in_array($shopping->id,request()->shopping_categories ?? []))
                                                            echo 'selected="selected"';
                                                    elseif(!request()->isMethod('post') && isset($product) 
                                                    && $product->shopping_categories()->where('shopping_category_id',$shopping->id)->count()) 
                                                            echo 'selected="selected"';
                                                    ?> >{!!$shopping->name!!}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group mb-4">
                                            <label class="h6 f-12">Occasions</label>
                                            <select name="occasions[]" id="occasions" multiple>
                                                @foreach($occasions as $occasion)
                                                <option value="{{$occasion->id}}" <?php 
                                                        if(in_array($occasion->id,request()->occasions ?? []))
                                                            echo 'selected="selected"';
                                                        elseif(!request()->isMethod('post') && isset($product) 
                                                          && $product->occasions()->where('occasion_id',$occasion->id)->count()) 
                                                            echo 'selected="selected"';
                                                    ?> >{!!$occasion->name!!}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-sm-6 form-group mb-4">
                                            <label class="h6 f-12">Related Products</label>
                                            <select name="relates[]" id="relates" multiple>
                                                @foreach($products as $related)
                                                <option value="{{$related->id}}" <?php 
                                                        if(in_array($related->id,request()->relates ?? []))
                                                            echo 'selected="selected"';
                                                        elseif(!request()->isMethod('post') && isset($product) 
                                                          && $product->relates()->where('related_id',$related->id)->count()) 
                                                            echo 'selected="selected"';
                                                    ?> >{!!$related->name!!}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-action">
                                        <div class="col" >
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-lg next-button" type="button">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-item" id="product-seo">

                                    <div class="form-group mb-4">
                                        <label class="h6 f-12">Title</label>
                                        <input type="text" class="form-control" name="seo_title"
                                            value="{{old('seo_title',isset($product) ? $product->seo_title:'')}}" autocomplete="off">
                                        <span class="form-error">{{$errors->first('seo_title')}}</span>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12">Description</label>
                                        <textarea rows="5" cols="200" class="form-control"
                                            name="seo_description" autocomplete="off">{{old('seo_description',isset($product) ? $product->seo_description:'')}}</textarea>
                                        <span class="form-error">{{$errors->first('seo_description')}}</span>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12">Keyword</label>
                                        <textarea rows="5" column="200" class="form-control"
                                            name="seo_keyword" autocomplete="off">{{old('seo_keyword',isset($product) ? $product->seo_keyword:'')}}</textarea>
                                        <span class="form-error">{{$errors->first('seo_keyword')}}</span>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12">Tags</label>
                                        <textarea rows="5" columns="200" class="form-control"
                                            name="tag" autocomplete="off">{{old('tag',isset($product) ? $product->tag:'')}}</textarea>
                                        <span class="form-error">{{$errors->first('tag')}}</span>
                                    </div>

                                    <div class="row form-action">

                                        <div class="col">
                                            <div class="form-group">
                                                <button class="btn btn-success btn-lg" type="submit">
                                                    @if(isset($product)) Update Product @else Create Product @endif
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                

                            </div><!-- Tabs Wrapper //-->

                        </form>

                    </div>

                </div><!-- Content box //-->
            </article>

        </div>
    </div><!-- end of row //-->


    <div class="modal" tabindex="-1" role="dialog" id="uploadimageModal">
        <div class="modal-dialog" role="document" style="min-width: 700px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div id="image_demo"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="preview_target" value="" />
                    <input type="hidden" id="input_target" value="" />
                    <button type="button" class="btn btn-primary crop_image">Crop and Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
<!-- [ Main Content ] end -->

@push('bottom-scripts')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>

<script>
    var image_crop = $('#image_demo').croppie({
    viewport: {
        width: 550,
        height: 400,
        type: 'square'
    },
    boundary: {
        width: 550,
        height: 400
    }
});
/// catching up the cover_image change event and binding the image into my croppie. Then show the modal.
$('#product_pic').on('change', function() {
    var reader = new FileReader();
    reader.onload = function(event) {
        image_crop.croppie('bind', {
            url: event.target.result,
        });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
    $("#preview_target").val('#uploaded-image');
    $("#input_target").val('#picture');
});

$('body').delegate('.variant_upload','change', function() {
    var reader = new FileReader();
    reader.onload = function(event) {
        image_crop.croppie('bind', {
            url: event.target.result,
        });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
    var id = $(this).attr("data-id");
    $("#preview_target").val('#variant_preview'+id);
    $("#input_target").val('#variant_picture'+id);
});

$('.crop_image').click(function(event) {
    image_crop.croppie('result', {
        type: 'canvas',
        format: 'png'
    }).then(function(response) {
        $($("#preview_target").val()).attr("src", response);
        $($("#input_target").val()).val(response);
    });
    $("#product_pic").val("");
    $(".variant_upload").val("");
    $('#uploadimageModal').modal('hide');
});

$(document).ready(function() {

    $(".tabs-list li a").on("click",function(e){
        e.preventDefault();
        var target = $(this).attr("href");
        $(".tab-item").css("display","none");
        $(".tab-item").removeClass("active");
        $(target).css("display","block");
        $(target).addClass("active");
        $(".tabs-list li a").removeClass("active");
        $(this).addClass("active");
    });

    $("body").delegate(".add-variant-item","click",function(e){
        e.preventDefault();
        var newelement = $("#product-variants").find(".variant-item").last().clone();

        newelement.find('input').each(function(){
            $(this).val('')
        })

        newelement.find('textarea').each(function(){
            $(this).val('')
        })

        newelement.find('select').each(function(){
            $(this).val('')
        })

        $(newelement).insertBefore($("#product-variants #form-action"));
        $(this).css("display","none");
        numbering();
    });

    $("body").delegate(".delete-variant","click",function(e){
        e.preventDefault();
        $(this).parents(".variant-item").remove();
        numbering();
    })

    numbering();

    $("#categories").select2();
    $("#shopping_categories").select2();
    $("#occasions").select2();
    $("#relates").select2();


    $(".next-button").click(function(e){
        e.preventDefault();
        console.log($(".tabs-list").find('.active').first().parent().next().find('a').first().html())
        $(".tabs-list").find('.active').first().parent().next().find('a').first().trigger('click');

    })

});

function numbering() {

    var counter = 0;

    $(".variant-item").each(function(item) {
        counter++;
        $(this).find('.variant-label').first().text('Variant '+counter);
        $(this).find('.variant_picture').first().attr("id","variant_picture"+counter);
        $(this).find('.variant_upload').first().attr("id","variant_upload"+counter);
        $(this).find('.variant_upload').first().attr("data-id",counter);
        $(this).find('.variant_preview').first().attr("id","variant_preview"+counter);
    });

}

</script>

@endpush