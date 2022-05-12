@extends('layouts.main')
@section('content')

<div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

        <!-- Start of Breadcrumbs -->
        <div class="breadcrumb-section bgc-offset mb-full">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <a class="breadcrumb-item" href="shop-grid.html">Shop</a>
                            <span class="breadcrumb-item active">Compete Track Tote</span>
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
                                                                    <a href="{{asset('assets/images/products/single/product-1.jpg')}}" data-size="600x600">
                                                                        <img src="{{asset('assets/images/products/single/product-1.jpg')}}" alt="Product Image">
                                                                        <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                    </a>
                                                                    <figcaption class="visually-hidden">
                                                                        <span>Product Image</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <figure class="swiper-slide">
                                                                    <a href="{{asset('assets/images/products/single/product-2.jpg')}}" data-size="600x600">
                                                                        <img src="{{asset('assets/images/products/single/product-2.jpg')}}" alt="Product Image">
                                                                        <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                    </a>
                                                                    <figcaption class="visually-hidden">
                                                                        <span>Product Image</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <figure class="swiper-slide">
                                                                    <a href="{{asset('assets/images/products/single/product-3.jpg')}}" data-size="600x600">
                                                                        <img src="{{asset('assets/images/products/single/product-3.jpg')}}" alt="Product Image">
                                                                        <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                    </a>
                                                                    <figcaption class="visually-hidden">
                                                                        <span>Product Image</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <figure class="swiper-slide">
                                                                    <a href="{{asset('assets/images/products/single/product-4.jpg')}}" data-size="600x600">
                                                                        <img src="{{asset('assets/products/single/product-4.jpg')}}" alt="Product Image">
                                                                        <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                    </a>
                                                                    <figcaption class="visually-hidden">
                                                                        <span>Product Image</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <figure class="swiper-slide">
                                                                    <a href="{{asset('assets/images/products/single/product-5.jpg')}}" data-size="600x600">
                                                                        <img src="{{asset('assets/assets/images/products/single/product-5.jpg')}}" alt="Product Image">
                                                                        <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                    </a>
                                                                    <figcaption class="visually-hidden">
                                                                        <span>Product Image</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <!-- <figure class="swiper-slide">
                                                                    <a href="assets/images/products/single/product-6.jpg" data-size="600x600">
                                                                        <img src="assets/images/products/single/product-6.jpg" alt="Product Image">
                                                                        <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                    </a>
                                                                    <figcaption class="visually-hidden">
                                                                        <span>Product Image</span>
                                                                    </figcaption>
                                                                </figure> -->
                                                            </div>
                                                        </div> <!-- end of product-full-image -->
                                                    </div>
                                                    
                                                    <div class="product-thumb-container">
                                                        <div class="product-thumb-image pos-r">
                                                            <div class="nav-slider">
                                                                <!-- Slides -->
                                                                <div class="swiper-wrapper">
                                                                    <div class="swiper-slide">
                                                                        <img src="{{asset('assets/images/products/single/product-thumb-1.jpg')}}" alt="Product Thumbnail Image">
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <img src="{{asset('assets/images/products/single/product-thumb-2.jpg')}}" alt="Product Thumbnail Image">
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <img src="{{asset('assets/images/products/single/product-thumb-3.jpg')}}" alt="Product Thumbnail Image">
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <img src="{{asset('assets/images/products/single/product-thumb-4.jpg')}}" alt="Product Thumbnail Image">
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <img src="{{asset('assets/images/products/single/product-thumb-5.jpg')}}" alt="Product Thumbnail Image">
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <img src="{{asset('assets/images/products/single/product-thumb-6.jpg')}}" alt="Product Thumbnail Image">
                                                                    </div>
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
                                                <h3 class="product-name">Compete Track Tote</h3>
                                                <div class="product-ratings d-flex">
                                                    <ul class="rating d-flex mr-4">
                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                        <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                    </ul>
                                                    <ul class="comments-advices list-inline d-flex">
                                                        <li class="list-inline-item mr-3"><a href="#">2 Reviews</a></li>
                                                        <li class="list-inline-item"><a href="#">Write a Review</a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <p class="d-flex align-items-center">
                                                        <span class="price-old">$54.65</span>
                                                        <span class="price-new">$43.72</span>
                                                        <span class="price-discount">-20%</span>
                                                    </p>
                                                </div>
                                                <div class="product-description">
													<p>Regular fit, round neckline, long sleeves. 100% cotton, brushed inner side for extra comfort.</p>
                                                </div>
                                                <div class="product-actions">
                                                    <h3>Available Options</h3>
	                                                <div class="product-size-color d-flex">
	                                                    <div class="product-size">
	                                                        <label>Size</label>
	                                                        <select class="nice-select">
	                                                            <option>S</option>
	                                                            <option>M</option>
	                                                            <option>L</option>
	                                                        </select>
	                                                    </div>
	                                                    <div class="product-color">
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
	                                                    </div>
	                                                </div>
                                                    <div class="product-stock">
                                                        <form action="#">
                                                            <label>Quantity</label>
                                                            <ul class="d-flex flex-wrap align-items-center">
                                                                <li class="box-quantity">
                                                                    <div class="cart-input">
                                                                        <input class="cart-input-box" type="text" value="0">
                                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <button type="button" class="default-btn">Add to Cart</button>
                                                                </li>
                                                            </ul>
                                                        </form>
                                                    </div>
                                                    <div class="wishlist-compare">
                                                        <button class="btn-wishlist" type="button" title="Add to Wishlist">Add to Wishlist</button>
                                                        <button class="btn-compare" type="button" title="Add to Compare">Add to Compare</button>
                                                    </div>
                                                </div>

                                                <div class="social-sharing d-flex align-items-center">
                                                    <span>Share</span>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><a href="#" class="bg-facebook" data-toggle="tooltip" data-position="top" data-original-title="Facebook" target="_blank"><i class="fa fa-facebook"></i><span>Share</span></a></li>
                                                        <li class="list-inline-item"><a href="#" class="bg-twitter" data-toggle="tooltip" data-position="top" data-original-title="Twitter" target="_blank"><i class="fa fa-twitter"></i><span>Tweet</span></a></li>
                                                        <li class="list-inline-item"><a href="#" class="bg-gplus" data-toggle="tooltip" data-position="top" data-original-title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i><span>Google+</span></a></li>
                                                        <li class="list-inline-item"><a href="#" class="bg-pinterest" data-toggle="tooltip" data-position="top" data-original-title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
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
                                                        <a class="nav-link active" id="nav_desctiption" data-toggle="pill" href="#tab_description" role="tab" aria-controls="tab_description" aria-selected="true">Description</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="nav_product_details" data-toggle="pill" href="#tab_product_details" role="tab" aria-controls="tab_product_details" aria-selected="false">Product Details</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="nav_review" data-toggle="pill" href="#tab_review" role="tab" aria-controls="tab_review" aria-selected="false">Reviews (2)</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab_description" role="tabpanel" aria-labelledby="nav_desctiption">
                                                        <p>Studio Design' PolyFaune collection features classic products with colorful patterns, inspired by the traditional japanese origamis. To wear with a chino or jeans. The sublimation textile printing process provides an exceptional color rendering and a color, guaranteed overtime. Regular fit, round neckline, long sleeves. 100% cotton, brushed inner side for extra comfort.</p>
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
                                                            <form action="#" class="review-form">
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
                                                            </form> <!-- end of review-form -->
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
                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="{{asset('assets/assets/images/products/new/product-10.jpg')}}" alt="Fusion Backpack" title="Fusion Backpack">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Graphic Corner</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Fusion Backpack</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$55.70</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="{{asset('assets/images/products/new/product-11.jpg')}}" alt="Rival Field Messenger 6" title="Rival Field Messenger 6">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Graphic Corner</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger 6</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$54.40</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                    	<div class="label-product label-sale">-7%</div>
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/images/products/new/product-12.jpg" alt="Strive Shoulder Pack" title="Strive Shoulder Pack">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Graphic Corner</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Strive Shoulder Pack</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$76.40</span>
                                                            <span class="price-new">$71.05</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/images/products/new/product-13.jpg" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Studio Design</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Wayfarer Messenger Bag</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$65.40</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/images/products/new/product-1.jpg" alt="Rival Field Messenger" title="Rival Field Messenger">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Graphic Corner</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$67.50</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/images/products/new/product-2.jpg" alt="Crown Summit Backpack" title="Crown Summit Backpack">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Graphic Corner</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Crown Summit Backpack</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$78.90</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="assets/images/products/new/product-10.jpg" alt="Rival Field Messenger" title="Rival Field Messenger">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Graphic Corner</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$54.50</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->
                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Slider Navigation -->
                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of element-carousel -->
                            </div> <!-- end of latest-product-wrapper -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Related Products -->
        </div>
        <!-- End of Main Content Wrapper -->
       

</div>        

@endsection