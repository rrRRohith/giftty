@extends('layouts.main')
@section('content')

<div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

        <!-- Start of Breadcrumbs -->
        <div class="breadcrumb-section bgc-offset mb-full">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="{{url('/')}}">Home</a>
                            <a class="breadcrumb-item" href="{{url(''.$product->categories[0]->slug)}}">{{$product->categories[0]->name}}</a>
                            <span class="breadcrumb-item active">{{$product->name}}</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

           <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Main Product Wrapper -->
            <div class="main-product-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                          
                                <div class="single-product-wrapper">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="product-gallery">
	                                            <div class="gallery-with-thumbs">
                                                    <div class="product-image-container">
                                                        <div class="product-full-image main-slider image-popup">

                                                            <!-- Slides -->
                                                            <div class="swiper-wrapper">

                                                                <figure class="swiper-slide">
                                                                    <a href="{!!$product->picture != '' ? asset('images/products/'.$product->id.'/'.$product->picture):asset('images/user/dummy-image.jpg')!!}" style="width: 600px;height:600 px;" data-size="600x600">
                                                                      
                                                                    <img src="{!!$product->picture != '' ? asset('images/products/'.$product->id.'/'.$product->picture):asset('images/products/dummy-image.jpg')!!}" alt="Product Image" id="productImage-0">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                    </a>

                                                                    <figcaption class="visually-hidden">
                                                                        <span>Product Image</span>
                                                                    </figcaption>
                                                                </figure>
                                                                @foreach($product->variants as $variant)
                                                                <figure class="swiper-slide">
                                                                    <a href="{!!$variant->picture != '' ? asset('images/products/'.$product->id.'/'.$variant->picture):asset('images/products/dummy-image.jpg')!!}" data-size="600x600">
                                                                        <img src="{!!$variant->picture != '' ? asset('images/products/'.$product->id.'/'.$variant->picture):asset('images/products/dummy-image.jpg')!!}" alt="Product Image">
                                                                        <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                    </a>
                                                                    <figcaption class="visually-hidden">
                                                                        <span>Product Image</span>
                                                                    </figcaption>
                                                                </figure>
                                                                @endforeach

                                                              
                                                            </div>
                                                        </div> <!-- end of product-full-image -->
                                                    </div>
                                                    
                                                    <div class="product-thumb-container">
                                                        <div class="product-thumb-image pos-r">
                                                            <div class="nav-slider">
                                                                <!-- Slides -->

                                                                <div class="swiper-wrapper">
                                                                   
                                                                    <div class="swiper-slide">
                                                                        <img src="{!!$product->picture != '' ? asset('images/products/'.$product->id.'/'.$product->picture):asset('images/products/dummy-image.jpg')!!}" alt="Product Thumbnail Image">
                                                                    </div>
                                                                       @foreach($product->variants as $variant)
                                                                    <div class="swiper-slide">
                                                                        <img src="{!!$variant->picture != '' ? asset('images/products/'.$product->id.'/'.$variant->picture):asset('images/products/dummy-image.jpg')!!}" id="image" onclick="changePicture();">
                                                                    </div>
                                                                        @endforeach
                                                                    
                                                                </div>

                                                                <!-- Navigation -->
                                                                <div class="swiper-arrow next"><i class="fa fa-angle-down"></i></div>
                                                                <div class="swiper-arrow prev"><i class="fa fa-angle-up"></i></div>
                                                            </div>
                                                        </div> <!-- end of product-thumb-image -->
                                                    </div>
	                                            </div> <!-- end of gallery-with-thumbs -->
                                            </div> <!-- end of product-gallery -->
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="product-details">
                                                <h3 class="product-name" name="product_name">{{$product->name}}</h3>
                                                <div class="product-ratings d-flex">
                                              <!--       <ul class="rating d-flex mr-4">
                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                        <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                    </ul> -->
                                              <!--       <ul class="comments-advices list-inline d-flex">
                                                        <li class="list-inline-item mr-3"><a href="#">2 Reviews</a></li>
                                                        <li class="list-inline-item"><a href="#">Write a Review</a></li>
                                                    </ul> -->
                                                </div>
                                                <div class="product-price">
                                                    <p class="d-flex align-items-center">
                                                   <!--       <span class="price-old">$54.65</span> -->
                                                        <span class="price-new" name="variant_name">{{showPrice($product->variants->sortBy('price')->first()->price)}}</span>
                                                    <!--     <span class="price-discount">-20%</span> -->
                                                    </p>
                                                </div>
                                                <p>SKU:{{$product->sku}}</p>
                                                 <h4>Sold By:{{$product->store->name}}</h4>
                                                <div class="product-description">
													<p>{{$product->description}}.</p>
                                                </div>

                                                @if(session()->has('message'))
                                                     {!! session('message') !!}
                                                @endif
                                                <form action="{{url('shop/cart/add')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" value="{{$product->id}}" name="product_id">
                                                    <input type="hidden" value="{{showPrice($product->variants->sortBy('price')->first()->price)}}" name="price">


                                                    <div class="product-actions">
                                                        <h3>Available Options</h3>
    	                                                <div class="product-size-color d-flex">

    	                                                   <!--  <div class="product-size">

    	                                                        <label>Size</label>
    	                                                        <select class="nice-select" name="size">
    	                                                            <option>S</option>
    	                                                            <option>M</option>
    	                                                            <option>L</option>
    	                                                        </select>

    	                                                    </div>
    	                                                 
    	                                                    <!-- <div class="product-color">

    	                                                        <label>color</label>
    	                                                        <ul class="color-list">
    	                                                           <li>
    	                                                                <a class="white" href="#"></a>
    	                                                            </li>
    	                                                            <li>
    	                                                                <a class="orange active" href="#"></a>
    	                                                            </li>
    	                                                            <li>
    	                                                                <a class="paste" href="#"></a>
    	                                                            </li>
    	                                                        </ul>

    	                                                    </div> -->

    	                                                </div>
                                                        @if($product->variants->count())
                                                        <div class="variants">
                                                            @foreach($product->variants as $variant)
                                                            <label>
                                                                <input type="radio" name="variant_id" value="{{$variant->id}}" checked> {{$variant->name}}
                                                            </label>
                                                            @endforeach
                                                        </div>
                                                        @endif
                                                        <div class="product-stock">
                                                                <label>Quantity</label>
                                                                <ul class="d-flex flex-wrap align-items-center">
                                                                    <li class="box-quantity">
                                                                        <div class="cart-input">
                                                                            <input class="cart-input-box" name="quantity" type="text" value="1">
                                                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <button type="submit" class="default-btn">Add to Cart</button>
                                                                    </li>
                                                                </ul>
                                                        </div>

                                                    </div>
                                                </form>

                                                <div class="social-sharing d-flex align-items-center">
                                                    <span>Share</span>
                                                    <ul class="list-inline">

                                                        <li class="list-inline-item"><a href="https://www.facebook.com" class="bg-facebook" data-toggle="tooltip" data-position="top" data-original-title="Facebook" target="_blank"><i class="fa fa-facebook"></i><span>Share</span></a></li>
                                                        <li class="list-inline-item"><a href="https://twitter.com" class="bg-twitter" data-toggle="tooltip" data-position="top" data-original-title="Twitter" target="_blank"><i class="fa fa-twitter"></i><span>Tweet</span></a></li>
                                                     
                                                        <li class="list-inline-item"><a href="https://in.pinterest.com" class="bg-pinterest" data-toggle="tooltip" data-position="top" data-original-title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>

                                                    </ul>
                                                </div>
                                            </div> <!-- end of product-details -->
                                        </div>
                                    </div> <!-- end of row -->

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="product-info mt-half">
                                                 <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="nav_desctiption" data-toggle="pill" href="#tab_description" role="tab" aria-controls="tab_description" aria-selected="true">Product Description</a>
                                                    </li>
                                              <!--       <li class="nav-item">
                                                        <a class="nav-link" id="nav_product_details" data-toggle="pill" href="#tab_product_details" role="tab" aria-controls="tab_product_details" aria-selected="false">Product Details</a>
                                                    </li> -->

                                                    <!-- <li class="nav-item">
                                                        <a class="nav-link" id="nav_review" data-toggle="pill" href="#tab_review" role="tab" aria-controls="tab_review" aria-selected="false">Shipping Details</a>
                                                    </li> -->

                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab_description" role="tabpanel" aria-labelledby="nav_desctiption">
                                                        <p>{{$product->description}}.</p>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab_product_details" role="tabpanel" aria-labelledby="nav_product_details">
                                                    	<div class="product-tab-details d-flex justify-content-center align-content-center">
                                                    		<div class="product-brand align-self-center mr-md-5">
                                                    			<img src="assets/images/products/product-brand.png" alt="Brand Icon">
                                                    		</div>
			                                                <div class="product-meta">
			                                                    <ul class="list-unstyled">
			                                                        <li>Brands <a href="#"><span>Studio Design</span></a></li>
			                                                        <li>Product Code: <span>2</span></li>
			                                                        <li>Reward Points: <span>200</span></li>
			                                                        <li>Availability: <span>In Stock</span></li>
			                                                    </ul>
			                                                </div>
			                                            </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab_review" role="tabpanel" aria-labelledby="nav_review">
                                                        <div class="product-review">
                                                            <div class="customer-review">
                                                                <table class="table table-striped table-bordered">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>Pebona Themes</strong></td>
                                                                            <td>09/04/2018</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2">
                                                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                                                                                <div class="product-ratings d-flex justify-content-center">
                                                                                    <ul class="rating d-flex mt-2">
                                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table table-striped table-bordered">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>John Doe</strong></td>
                                                                            <td>23/05/2018</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2">
                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iusto reiciendis, vitae porro, unde hic debitis, velit facere culpa et nisi adipisci quis in aliquam dolore iure. Iure, dolore praesentium!</p>
                                                                                <div class="product-ratings d-flex justify-content-center">
                                                                                    <ul class="rating d-flex mt-2">
                                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                                                        <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div> <!-- end of customer-review -->
                                                                <h2>Write a review</h2>
                                                                <div class="form-group row">
                                                                    <div class="col">
                                                                        <label class="col-form-label"><span class="text-danger">*</span> Your Name</label>
                                                                        <input type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col">
                                                                        <label class="col-form-label"><span class="text-danger">*</span> Your Review</label>
                                                                        <textarea class="form-control" required></textarea>
                                                                        <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col">
                                                                        <label class="col-form-label"><span class="text-danger">*</span> Rating</label>
                                                                        &nbsp;&nbsp;&nbsp; Worst&nbsp;
                                                                        <input type="radio" value="1" name="rating">
                                                                        &nbsp;
                                                                        <input type="radio" value="2" name="rating">
                                                                        &nbsp;
                                                                        <input type="radio" value="3" name="rating">
                                                                        &nbsp;
                                                                        <input type="radio" value="4" name="rating">
                                                                        &nbsp;
                                                                        <input type="radio" value="5" name="rating" checked>
                                                                        &nbsp;Best
                                                                    </div>
                                                                </div>
                                                                <div class="buttons d-flex justify-content-end">
                                                                    <button class="default-btn" type="submit">Continue</button>
                                                                </div>
                                                        </div> <!-- end of product-review -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of single-product-wrapper -->
                             
                           
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Main Product Wrapper -->

  

            <!-- Start of Related Products -->
            @if(count($product->relates)>0)
            <section class="related-products">
                <div class="container">
                    <div class="row product-row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="section-title">
                                <h2>Related Products</h2>
                            </div>
                            <div class="latest-product-wrapper pos-r">
                                <div class="element-carousel anime-element" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper">
                                       @foreach($product->relates as $related)
                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                     <!--    <div class="label-product label-new">New</div> -->
                                                        <a href="{{url('gift/'.$related->slug)}}">
                                                            <img src="{!!$related->picture != '' ? asset('images/products/'.$related->id.'/'.$related->picture):asset('images/products/dummy-image.jpg')!!}" alt="Fusion Backpack" title="Fusion Backpack">
                                                        </a>
                                                         
                                                      <!--   <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div> -->
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="{{url('gift/'.$related->slug)}}">{{$related->name}}</a>
	                                                    	</div>
	                                                       <!--  <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div> -->
	                                                    </div>
                                                        <h4 class="product-name">SKU:{{$related->sku}}</h4>
                                                        <p class="product-price">
                                                            <span class="price-new">{{showPrice($product->variants->sortBy('price')->first()->price)}}</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->
                                        @endforeach
                                       

                                    <!-- Slider Navigation -->
                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of element-carousel -->
                            </div> <!-- end of latest-product-wrapper -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            @endif
            <!-- End of Related Products -->
        </div>
        <!-- End of Main Content Wrapper -->
       

</div>        

@endsection
@section('bottom-scripts')
<script>
    function changePicture(){
     
    var Image=document.getElementById('image').src;
    $('#productImage img').attr('src',Image);
    

    }
</script>
@endsection