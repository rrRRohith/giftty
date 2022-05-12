<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giftty</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">


    <!-- CSS files
    ============================================ -->

    <!-- Boostrap stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <!-- Plugins stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">

    <!-- Master stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
     @yield('styles')

    <!-- modernizr JS
    ============================================ -->
    <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
    @yield('top-scripts')
</head>
<body>

    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
    <![endif]-->

    <!-- Start of Whole Site Wrapper with mobile menu support -->
    <div id="whole" class="whole-site-wrapper">
      
           
        @if(!session()->has('subscribe_off'))
        @include('layouts.includes.subscribe')
        @php session(['subscribe_off'=>true]) @endphp
        @endif
     
        <!-- Start of Header -->
        <header class="header header-type-2 floating-header white-scheme">
             <!-- end of top-bar -->

            <div class="header-area">
                <div class="container">
                  
                        @include('layouts.includes.header')
           
                </div> <!-- end of container -->
            </div> <!-- end of header-top -->



            <!-- Start of Main and Mobile Navigation -->
            <div class="main-nav-area text-secondary">
                            @include('layouts.includes.navigation');
                < <!-- end of container -->
            </div>
            <!-- End of Main and Mobile Navigation -->
        </header>
        <!-- End of Header -->

        <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper">

            <!-- Start of Primary Slider Section -->
            <section class="primary-slider-section mb0 pos-r">
                <div id="primary_slider" class="swiper-container slider-type-2 white-scheme">

                    <!-- Slides -->
                    <div class="swiper-wrapper">
                        @isset($sliders)
                          @foreach($sliders as $slider)
                        <div class="swiper-slide bg-img-wrapper">
                            <div class="slide-inner image-placeholder">
                                
                                <img src="{!!$slider->picture != '' ? asset('images/banners/'.$slider->id.'/'.$slider->picture):asset('images/banners/dummy-image.jpg')!!}" class="visually-hidden" alt="Slider Image">                          
                                <div class="slide-progress"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="slide-content layer-animation-2">
                                                <p class="promo-title"><span>limited edition</span> Sale Offer 20% Off This Week</p>
                                                <h1 class="main-title"><span>Lookbook</span> <span>2018</span></h1>
                                                <p class="subtitle">Two-Tone Low Sneakers in White</p>
                                                <div class="slide-button">
                                                    <a class="text-btn" href="shop-grid.html" title="Shop Now">Get Started Now</a>
                                                </div>
                                            </div> <!-- end of slide-content -->
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end of slider-inner -->
                        </div> <!-- end of swiper-slide -->
                        @endforeach
                        @endif
                       

                        <!-- end of swiper-slide -->
                    </div> <!-- end of swiper-slide -->

                    <!-- Slider Navigation -->
                    <div class="swiper-arrow next slide"><i class="fa fa-angle-right"></i></div>
                    <div class="swiper-arrow prev slide"><i class="fa fa-angle-left"></i></div>

                    <!-- Slider Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            <!-- End of Primary Slider Section -->

            <!-- Start of Banner Section -->
            <div class="banner-section mt-30 mb-half">
                <div class="container">
                    <div class="row">
                        @php $i=0;@endphp
                        
                         @foreach($banners as $banner)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="promo-banner hover-effect-1">
                                <a href="#">
                                    <img src="{!!$banner->picture != '' ? asset('images/banners/'.$banner->id.'/'.$banner->picture):asset('images/banners/dummy-image.jpg')!!}" alt="Promo Banner">
                                </a>
                            </div> <!-- end of promo-banner -->
                        </div>
                         @php $i++;@endphp
                       @endforeach
                    
                        
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Banner Section -->

            <!-- Start of New Arrivals Section -->
            <section class="new-arrivals-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="section-title">
                                <h2>New Trending Products</h2>
                                <p class="subtitle">Accumsan vitae pede lacus ut ullamcorper sollicitudin quisque libero est</p>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
                
                <div class="container-fluid">
                    <div class="row product-row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="new-products pos-r">
                                <div class="element-carousel anime-element-multi" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000" data-autoplay-delay="5000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper">
                                         @if(isset($allproducts) && count($allproducts)>0)
                                         @foreach($allproducts as $product)
                                        <div class="swiper-slide">
                                       
                                            <article class="product-layout">
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <!--<div class="label-product label-sale">-20%</div>-->
                                                            <!--<div class="label-product label-new">New</div>-->
                                                            <a href="{{url('gift/'.$product->slug)}}">
                                                                <img src="{!!$product->picture != '' ? asset('images/products/'.$product->id.'/'.$product->picture):asset('images/products/dummy-image.jpg')!!}" title="Compete Track Tote">
                                                            </a>
                                                            <!--<div class="action-links">-->
                                                            <!--    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>-->
                                                            <!--    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>-->
                                                            <!--    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>-->
                                                            <!--    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>-->
                                                            <!--</div>-->
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-meta d-flex justify-content-between align-items-center">
                                                                <div class="product-manufacturer">
                                                                    <a href="{{url('gift/'.$product->slug)}}">{{$product->store->name}}</a>
                                                                </div>
                                                                <!--<div class="product-ratings">-->
                                                                <!--    <div class="rating-box">-->
                                                                <!--        <ul class="rating d-flex">-->
                                                                <!--            <li><i class="ion ion-md-star-outline"></i></li>-->
                                                                <!--            <li><i class="ion ion-md-star-outline"></i></li>-->
                                                                <!--            <li><i class="ion ion-md-star-outline"></i></li>-->
                                                                <!--            <li><i class="ion ion-md-star-outline"></i></li>-->
                                                                <!--            <li><i class="ion ion-md-star-outline disabled"></i></li>-->
                                                                <!--        </ul>-->
                                                                <!--    </div>-->
                                                                <!--</div>-->
                                                            </div>
                                                            <h4 class="product-name"><a href="{{url('gift/'.$product->slug)}}">{{$product->name}}</a></h4>
                                                            <p class="product-price">
                                                               
                                                                <span class="price-new">{{showPrice($product->variants->sortBy('price')->first()->price)}}</span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                            </article> <!-- end of product-layout -->
                                        
                                          
                                        
                                        </div> <!-- end of swiper-slide -->
                                         @endforeach
                                         @endif
                                   
                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Slider Navigation -->
                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of element-carousel -->
                            </div> <!-- end of new-products -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container-fluid -->
            </section>
            <!-- End of New Arrivals Section -->

            <!-- Start of Promo Banner Section -->
             <section class="promo-banner-section bg-img-wrapper">
            	<div class="image-placeholder pos-r">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
	                            <div class="banner-with-text">
	                                <img src="{{asset('banner.jpg')}}" class="visually-hidden" alt="Promo Banner">
									<div class="promo-text">
										<h1>Hurry Up!</h1>
										<h2><span>Hurry Up!</span> Daily Deal Of The Day</h2>
										<p>Abdul, a young, widowed Muslim man, needed to leave Syria and not be delayed by the authorities in getting to Europe. The best way to do this, he reasoned, was to acquire another family as cover, and he found one. It was all a sham, however, just a means to an end.</p>
										<a href="{{url(''.$categories[0]->slug)}}" class="default-btn large">Discover Now</a>
									</div>
	                            </div> <!-- end of promo-banner -->
	                        </div>
	                    </div> <!-- end of row -->
	                </div> <!-- end of container -->
	            </div> <!-- end of image-placeholder -->
            </section>
            <!-- End of Promo Banner Section -->

            <!-- Start of Mini Blog Section -->
             <section class="categories-section">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12">
                            <div class="section-title">
                                <h2>Our Categories</h2>
                                <p class="subtitle">Consequat magna, massa vel suspendisse morbi aliquam faucibus ligula ante ipsum ac nulla.</p>
                            </div>
						</div>
					</div> <!-- end of row -->

                    <div class="row product-row">
                        <div class="col-12 col-sm-12 col-md-12">

                            <!-- Nav Pills -->
                            <ul class="nav nav-pills justify-content-center" id="our_categories" role="tablist">
                                @php $i=1;@endphp
                                @foreach($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link @if($i==1) active @endif" id="nav_{{$category->slug}}" data-toggle="pill" href="#{{$category->slug}}" role="tab" aria-controls="{{$category->slug}}" aria-selected="true">{{$category->name}}</a>
                                </li>
                                 @php $i++;@endphp
                                @endforeach
                                
                                
                            </ul> <!-- end of nav -->

                            <!-- Tab Contents -->
                            <div class="tab-content" id="our_categories_contents">

                               
                                @php $i=1;@endphp
                                @foreach($categories as $category)
                                <div class="tab-pane @if($i==1) show active @endif anime-tab" id="{{$category->slug}}" role="tabpanel" aria-labelledby="nav_{{$category->slug}}">
			                    	<div class="new-products pos-r">
		                                <div class="element-carousel" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

		                                    <!-- Slides -->
		                                    <div class="swiper-wrapper">
                                                @foreach($category['products'] as $product)
		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                    	
		                                                        <a href="{{url('gift/'.$product->slug)}}">
		                                                            <img src="{!!$product->picture != '' ? asset('images/products/'.$product->id.'/'.$product->picture):asset('images/products/dummy-image.jpg')!!}" alt="{{$product->name}}" title="{{$product->name}}">
		                                                        </a>
		                                                        <!-- <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div> -->
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		{{$product->store->name}}
			                                                    	</div>
			                                                        <!-- <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div> -->
			                                                    </div>
		                                                        <h4 class="product-name"><a href="{{url('gift/'.$product->slug)}}">{{$product->name}}</a></h4>
		                                                        <p class="product-price">
		                                                            <!-- <span class="price-old">$54.65</span> -->
		                                                            <span class="price-new">{{showPrice($product->variants->sortBy('price')->first()->price)}}</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->
                                                @endforeach

		                                        
		                                    </div> <!-- end of swiper-wrapper -->

		                                    <!-- Slider Navigation -->
                                       
		                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
		                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                       
		                                </div> <!-- end of element-carousel -->
		                            </div> <!-- end of new-products -->
                                </div> <!-- end of tab-pane -->
                                @php $i++;@endphp
                                @endforeach

                             

                            	
                            </div> <!-- end of tab-content -->
                        </div>
                    </div> <!-- end of row -->
				</div> <!-- end of container -->
        	</section>
            <!-- End of Mini Blog Section -->

            <!-- Start of Instagram Section -->
             <section class="instagram-section">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12">
                            <div class="section-title type-2 pt-full top-bordered">
                                <h2>Follow us On Instagram</h2>
                                <p class="subtitle">Consequat magna, massa vel suspendisse morbi aliquam faucibus ligula ante ipsum ac nulla.</p>
                            </div>
						</div>
					</div> <!-- end of row -->

					<div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="instagram-container">
                                <!-- Slides -->
                                <div id="instagram_feed" class="swiper-wrapper image-popup">
                            	</div> <!-- end of swiper-wrapper -->
                            </div> <!-- end of instagram-carousel -->
    						<div class="follow-link">
    							<a href="https://www.instagram.com/themeitems/" target="_blank">Follow us On Instagram</a>
    						</div>
                        </div>
					</div> <!-- end of row -->
				</div> <!-- end of container -->
			</section>
            <!-- End of Instagram Section -->
        </main>
        <!-- End of Main Content Wrapper -->

        <!-- Start of Footer -->
         <footer id="colophon" class="bgc-secondary pt-full">
            @include('layouts.includes.footer')
        </footer>
        <!-- End of Footer -->

        <!-- Quick View Content Start -->
        <div class="product-quick-view">
            <div class="container">
                <!-- Start of Modal -->
                <div class="modal fade" id="product_quick_view">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div> <!-- end of modal-header -->

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-7">
                                        <div class="product-gallery">
                                            <div class="gallery-with-thumbs" data-nav-center="false">
                                                <div class="product-image-container">
                                                    <div class="product-full-image main-slider image-popup">

                                                        <!-- Slides -->
                                                        <div class="swiper-wrapper">
                                                            <figure class="swiper-slide">
                                                                <a href="assets/images/products/single/product-1.jpg" data-size="600x600">
                                                                    <img src="assets/images/products/single/product-1.jpg" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="assets/images/products/single/product-2.jpg" data-size="600x600">
                                                                    <img src="assets/images/products/single/product-2.jpg" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="assets/images/products/single/product-3.jpg" data-size="600x600">
                                                                    <img src="assets/images/products/single/product-3.jpg" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="assets/images/products/single/product-4.jpg" data-size="600x600">
                                                                    <img src="assets/images/products/single/product-4.jpg" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="assets/images/products/single/product-5.jpg" data-size="600x600">
                                                                    <img src="assets/images/products/single/product-5.jpg" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="assets/images/products/single/product-6.jpg" data-size="600x600">
                                                                    <img src="assets/images/products/single/product-6.jpg" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                    </div> <!-- end of product-full-image -->
                                                </div>
                                                
                                                <div class="product-thumb-container">
                                                    <div class="product-thumb-image pos-r">
                                                        <div class="nav-slider">
                                                            <!-- Slides -->
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/images/products/single/product-thumb-1.jpg" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/images/products/single/product-thumb-2.jpg" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/images/products/single/product-thumb-3.jpg" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/images/products/single/product-thumb-4.jpg" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/images/products/single/product-thumb-5.jpg" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/images/products/single/product-thumb-6.jpg" alt="Product Thumbnail Image">
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
                                    <div class="col-12 col-md-6 col-lg-5">
                                        <div class="product-details">
                                            <h3 class="product-name">Cas Meque Metus</h3>
                                            <div class="product-ratings">
                                                <ul class="rating d-flex">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
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
                                                <p>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton.</p>
                                            </div>
                                            <form action="#" class="product-actions">
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
                                                </div>
                                                <div class="wishlist-compare">
                                                    <button class="btn-wishlist" type="button" title="Add to Wishlist">Add to Wishlist</button>
                                                    <button class="btn-compare" type="button" title="Add to Compare">Add to Compare</button>
                                                </div>
                                            </form>
                                        </div> <!-- end of product-details -->
                                    </div>
                                </div> <!-- end of row -->
                            </div> <!-- end of modal-body -->

                            <div class="modal-footer justify-content-start">
                                <div class="social-sharing d-flex align-items-center">
                                    <span>Share</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" class="bg-facebook" data-toggle="tooltip" data-position="top" data-original-title="Facebook" target="_blank"><i class="fa fa-facebook"></i><span>Share</span></a></li>
                                        <li class="list-inline-item"><a href="#" class="bg-twitter" data-toggle="tooltip" data-position="top" data-original-title="Twitter" target="_blank"><i class="fa fa-twitter"></i><span>Tweet</span></a></li>
                                        <li class="list-inline-item"><a href="#" class="bg-gplus" data-toggle="tooltip" data-position="top" data-original-title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i><span>Google+</span></a></li>
                                        <li class="list-inline-item"><a href="#" class="bg-pinterest" data-toggle="tooltip" data-position="top" data-original-title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                                    </ul>
                                </div>
                            </div> <!-- end of modal-footer -->
                        </div> <!-- end of modal-content -->
                    </div> <!-- end of modal-dialog -->
                </div> <!-- end of modal -->
            </div> <!-- end of container -->
        </div>
        <!-- Quick View Content End -->

        <!-- Start of Scroll to Top -->
        <div id="to_top">
            <i class="ion ion-ios-arrow-forward"></i>
            <i class="ion ion-ios-arrow-forward"></i>
        </div>
        <!-- End of Scroll to Top -->
    </div>
    <!-- End of Whole Site Wrapper -->

    <!-- Initializing Photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.includes.scripts')

</body>
@yield('bottom-scripts')
</html>