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
                            <span class="breadcrumb-item active">Shop</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->


         <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Products Wrapper -->
            <div class="products-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 order-1 order-md-1 order-lg-2">
                            <main id="primary" class="site-main">
                                <div class="shop-wrapper">
                                   <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <h1>Shop</h1>
                                            <div class="shop-toolbar">
                                                <div class="toolbar-inner">
                                                    <div class="product-view-mode">
                                                        <ul role="tablist" class="nav shop-item-filter-list">
                                                            <li role="presentation" class="active"><a href="#grid" aria-controls="grid" role="tab" data-toggle="tab" class="active show" aria-selected="true"><i class="ion-md-grid"></i></a></li>
                                                            <li role="presentation"><a href="#list" aria-controls="list" role="tab" data-toggle="tab"><i class="ion-md-list"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="toolbar-amount">
                                                        <span>Showing 10 to 18 of 27</span>
                                                    </div>
                                                </div>
                                                <div class="product-select-box">
                                                    <div class="product-sort">
                                                        <p>Sort By:</p>
                                                        <select class="nice-select" name="sortby">
                                                            <option value="trending">Relevance</option>
                                                            <option value="sales">Name (A - Z)</option>
                                                            <option value="sales">Name (Z - A)</option>
                                                            <option value="rating">Price (Low > High)</option>
                                                            <option value="date">Rating (Lowest)</option>
                                                            <option value="price-asc">Model (A - Z)</option>
                                                            <option value="price-asc">Model (Z - A)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="shop-products-wrapper">
                                                <div class="tab-content">
                                                    <div id="grid" class="tab-pane anime-tab active show" role="tabpanel">
                                                        <div class="row">
                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <div class="label-product label-sale">-20%</div>
                                                                            <div class="label-product label-new">New</div>
                                                                            <a href="{{url('/shop/product-slug')}}">
                                                                                <img src="assets/images/products/new/product-1.jpg" alt="Compete Track Tote" title="Compete Track Tote">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
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
                                                                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                                            <p class="product-price">
                                                                                <span class="price-old">$54.65</span>
                                                                                <span class="price-new">$43.72</span>
                                                                            </p>
                                                                        </div><!-- end of product-caption -->
                                                                    </div><!-- end of product-inner -->
                                                                </div><!-- end of product-thumb -->
                                                            </article> <!-- end of product-layout -->

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <div class="label-product label-new">New</div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/products/new/product-9.jpg" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
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

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <div class="label-product label-new">New</div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/products/new/product-2.jpg" alt="Fusion Backpack" title="Fusion Backpack">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
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

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <div class="label-product label-sale">-7%</div>
                                                                            <div class="label-product label-new">New</div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/products/new/product-10.jpg" alt="Strive Shoulder Pack" title="Strive Shoulder Pack">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
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

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <div class="label-product label-new">New</div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/products/new/product-3.jpg" alt="Rival Field Messenger 6" title="Rival Field Messenger 6">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
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

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <div class="label-product label-new">New</div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/products/new/product-11.jpg" alt="Rival Field Messenger" title="Rival Field Messenger">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
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

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <div class="label-product label-new">New</div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/products/new/product-4.jpg" alt="Rival Field Messenger" title="Rival Field Messenger">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
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

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <div class="label-product label-new">New</div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/products/new/product-12.jpg" alt="Crown Summit Backpack" title="Crown Summit Backpack">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
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

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <div class="label-product label-new">New</div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/products/new/product-5.jpg" alt="Crown Summit Backpack" title="Crown Summit Backpack">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
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
                                                        </div>
                                                    </div>
                                                    <div id="list" class="tab-pane anime-tab" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-12">
                                                                <article class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-sale">-20%</div>
                                                                                <div class="label-product label-new">New</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/products/new/product-1.jpg" title="Compete Track Tote" alt="Compete Track Tote">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Studio Design</a>
                                                                                </div>
                                                                                <h4 class="product-name">
                                                                                    <a href="single-product.html">Compete Track Tote</a>
                                                                                </h4>
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
                                                                                <p class="product-price">
                                                                                    <span class="price-old">$54.65</span>
                                                                                    <span class="price-new">$43.72</span>
                                                                                </p>
                                                                                <div class="product-des">
                                                                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                                </div>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </article> <!-- end of product-layout -->

                                                                <article class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-new">New</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/products/new/product-9.jpg" title="Wayfarer Messenger Bag" alt="Wayfarer Messenger Bag">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Studio Design</a>
                                                                                </div>
                                                                                <h4 class="product-name">
                                                                                    <a href="single-product.html">Wayfarer Messenger Bag</a>
                                                                                </h4>
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
                                                                                <p class="product-price">
                                                                                    <span class="price-new">$65.40</span>
                                                                                </p>
                                                                                <div class="product-des">
                                                                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                                </div>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </article> <!-- end of product-layout -->

                                                                <article class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-new">New</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/products/new/product-2.jpg" title="Fusion Backpack" alt="Fusion Backpack">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Graphic Corner</a>
                                                                                </div>
                                                                                <h4 class="product-name">
                                                                                    <a href="single-product.html">Fusion Backpack</a>
                                                                                </h4>
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
                                                                                <p class="product-price">
                                                                                    <span class="price-new">$55.70</span>
                                                                                </p>
                                                                                <div class="product-des">
                                                                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                                </div>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </article> <!-- end of product-layout -->

                                                                <article class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-sale">-7%</div>
                                                                                <div class="label-product label-new">New</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/products/new/product-10.jpg" title="Strive Shoulder Pack" alt="Strive Shoulder Pack">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Studio Design</a>
                                                                                </div>
                                                                                <h4 class="product-name">
                                                                                    <a href="single-product.html">Strive Shoulder Pack</a>
                                                                                </h4>
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
                                                                                <p class="product-price">
                                                                                    <span class="price-old">$76.40</span>
                                                                                    <span class="price-new">$71.05</span>
                                                                                </p>
                                                                                <div class="product-des">
                                                                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                                </div>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </article> <!-- end of product-layout -->

                                                                <article class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-new">New</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/products/new/product-3.jpg" title="Rival Field Messenger 6" alt="Rival Field Messenger 6">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Graphic Corner</a>
                                                                                </div>
                                                                                <h4 class="product-name">
                                                                                    <a href="single-product.html">Rival Field Messenger 6</a>
                                                                                </h4>
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
                                                                                <p class="product-price">
                                                                                    <span class="price-new">$54.40</span>
                                                                                </p>
                                                                                <div class="product-des">
                                                                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                                </div>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </article> <!-- end of product-layout -->

                                                                <article class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-new">New</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/products/new/product-11.jpg" title="Rival Field Messenger" alt="Rival Field Messenger">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Graphic Corner</a>
                                                                                </div>
                                                                                <h4 class="product-name">
                                                                                    <a href="single-product.html">Rival Field Messenger</a>
                                                                                </h4>
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
                                                                                <p class="product-price">
                                                                                    <span class="price-new">$54.50</span>
                                                                                </p>
                                                                                <div class="product-des">
                                                                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                                </div>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </article> <!-- end of product-layout -->

                                                                <article class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-new">New</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/products/new/product-4.jpg" title="Rival Field Messenger" alt="Rival Field Messenger">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Graphic Corner</a>
                                                                                </div>
                                                                                <h4 class="product-name">
                                                                                    <a href="single-product.html">Rival Field Messenger</a>
                                                                                </h4>
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
                                                                                <p class="product-price">
                                                                                    <span class="price-new">$67.50</span>
                                                                                </p>
                                                                                <div class="product-des">
                                                                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                                </div>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </article> <!-- end of product-layout -->

                                                                <article class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-new">New</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/products/new/product-12.jpg" title="Crown Summit Backpack" alt="Crown Summit Backpack">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Graphic Corner</a>
                                                                                </div>
                                                                                <h4 class="product-name">
                                                                                    <a href="single-product.html">Crown Summit Backpack</a>
                                                                                </h4>
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
                                                                                <p class="product-price">
                                                                                    <span class="price-new">$78.90</span>
                                                                                </p>
                                                                                <div class="product-des">
                                                                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                                </div>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </article> <!-- end of product-layout -->

                                                                <article class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-new">New</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="assets/images/products/new/product-5.jpg" title="Crown Summit Backpack" alt="Crown Summit Backpack">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Graphic Corner</a>
                                                                                </div>
                                                                                <h4 class="product-name">
                                                                                    <a href="single-product.html">Crown Summit Backpack</a>
                                                                                </h4>
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
                                                                                <p class="product-price">
                                                                                    <span class="price-new">$78.90</span>
                                                                                </p>
                                                                                <div class="product-des">
                                                                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                                </div>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </article> <!-- end of product-layout -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end of shop-products-wrapper -->

                                            <div class="pagination-area">
                                                <div class="row align-items-center">
                                                    <div class="col-12 order-2 col-sm-12 col-md-6 order-md-1 col-lg-6">
                                                        <div class="page-amount d-flex justify-content-center justify-content-md-start">
                                                            <p>Showing 10 to 18 of 27 (3 Pages)</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 order-1 col-sm-12 col-md-6 order-md-2 col-lg-6">
                                                        <ul class="pagination">
                                                            <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-left"></i> <span>Previous</span></a></li>
                                                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                            <li class="page-item active"><span class="page-link">2</span></li>
                                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                                            <li class="page-item"><a href="#" class="page-link"><span>Next</span> <i class="fa fa-angle-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> <!-- end of pagination-area -->
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of shop-wrapper -->
                            </main> <!-- end of #primary -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 order-2 order-md-2 order-lg-1">
                            <aside id="secondary" class="widget-area">
                                <div class="sidebar-widget list-categories-widget">
                                    <h2 class="widgettitle">Shop</h2>
                                    <div class="cat-accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Art Gallery</button>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <ul class="cat-sub-menu">
                                                        <li><a href="#">blandit vehicula</a></li>
                                                        <li><a href="#">Praesent molestie</a></li>
                                                        <li><a href="#">sagittis ipsum</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Rugs</button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                                <div class="card-body">
                                                    <ul class="cat-sub-menu">
                                                        <li><a href="#">Fire Pits</a></li>
                                                        <li><a href="#">Garden Accents</a></li>
                                                        <li><a href="#">Outdoor Fountains</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Accessories</button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                                <div class="card-body">
                                                    <ul class="cat-sub-menu">
                                                        <li><a href="#">Quard Trousers</a></li>
                                                        <li><a href="#">Maroon Detail</a></li>
                                                        <li><a href="#">Check Trousers</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <h5 class="mb-0">
                                                    <button type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Clothing</button>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                                <div class="card-body">
                                                    <ul class="cat-sub-menu">
                                                        <li><a href="#">Moleskin Blazers</a></li>
                                                        <li><a href="#">Wool Check Blazers</a></li>
                                                        <li><a href="#">Combined Jackets</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFive">
                                                <h5 class="mb-0">
                                                    <button type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Handbag</button>
                                                </h5>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                                <div class="card-body">
                                                    <ul class="cat-sub-menu">
                                                        <li><a href="#">Moleskin Blazers</a></li>
                                                        <li><a href="#">Wool Check Blazers</a></li>
                                                        <li><a href="#">Biker Jackets</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-widget list-widget">
                                    <h2 class="widgettitle">Categories</h2>
                                    <div class="list-widget-wrapper">
                                        <div class="list-group">
                                            <a href="#">Shoes (198)</a>
                                            <a href="#">backpacks (70)</a>
                                            <a href="#">Accessories (14)</a>
                                            <a href="#">Dresses (10)</a>
                                        </div>
                                    </div>
                                </div> <!-- end of sidebar-widget -->

                                <div class="sidebar-widget list-widget">
                                    <h2 class="widgettitle">Brands</h2>
                                    <div class="list-widget-wrapper">
                                        <div class="list-group">
                                            <a href="#">Graphic Corner (14)</a>
                                            <a href="#">Studio Design (14)</a>
                                            <a href="#">Tommy Hilfiger (14)</a>
                                            <a href="#">Versace (14)</a>
                                        </div>
                                    </div>
                                </div> <!-- end of sidebar-widget -->

                                <div class="sidebar-widget list-widget">
                                    <h2 class="widgettitle">Price</h2>
                                    <div class="list-widget-wrapper">
                                        <div class="list-group">
                                            <a href="#">$43.00 - $45.00 (10)</a>
                                            <a href="#">$54.00 - $58.00 (4)</a>
                                            <a href="#">$62.00 - $70.00 (5)</a>
                                            <a href="#">$78.00 - $83.00 (10)</a>
                                            <a href="#">$85.00 - $89.00 (13)</a>
                                        </div>
                                    </div>
                                </div> <!-- end of sidebar-widget -->

                                <div class="sidebar-widget color-widget">
                                    <h2 class="widgettitle">Color</h2>
                                    <div class="color-widget-wrapper">
                                        <ul class="color-options">
                                            <li>
                                                <span class="white"></span>
                                                <a href="#">white (4)</a>
                                            </li>
                                            <li>
                                                <span class="orange"></span>
                                                <a href="#">Orange (2)</a>
                                            </li>
                                            <li>
                                                <span class="blue"></span>
                                                <a href="#">Blue (6)</a>
                                            </li>
                                            <li>
                                                <span class="yellow"></span>
                                                <a href="#">Yellow (8)</a>
                                            </li>
                                            <li>
                                                <span class="black"></span>
                                                <a href="#">black (6)</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> <!-- end of sidebar-widget -->

                                <div class="sidebar-widget tag-cloud">
                                    <h2 class="widgettitle">Popular Tags</h2>
                                    <div class="tags-widget">
                                        <ul>
                                            <li><a href="#">Ecommerce</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">bags</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Sunglasses</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Smart</a></li>
                                        </ul>
                                    </div>
                                </div> <!-- end of sidebar-widget -->
                            </aside> <!-- end of #secondary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Products Wrapper -->
        </div>
        <!-- End of Main Content Wrapper -->

         <!-- Start of Scroll to Top -->
        <div id="to_top">
            <i class="ion ion-ios-arrow-forward"></i>
            <i class="ion ion-ios-arrow-forward"></i>
        </div>
        <!-- End of Scroll to Top -->

    </div>  
@endsection