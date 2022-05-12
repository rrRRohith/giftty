@extends('layouts.main')
@section('content')



    <div id="whole" class="whole-site-wrapper">

      

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
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
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
                                                        <span>Showing
                                                            {{$products->firstItem()}} to {{$products->lastItem()}}  of {{$products->total()}}</span>
                                                    </div>
                                                </div>
                                                <div class="product-select-box">
                                                    <form method="get" action="">
                                                    <div class="product-sort">
                                                        <p>Sort By:</p>
                                                        <select class="nice-select" name="sortby"  onchange="this.form.submit()">
                                                            <option value="Ascending">Name (A - Z)</option>
                                                            <option value="Descending">Name (Z - A)</option>
                                                            <option value="Low">Price (Low > High)</option>
                                                        </select>
                                                    </div>
                                                    </form>
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
                                                            @foreach($products as $product)
                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-3">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <!--<div class="label-product label-sale">-20%</div>-->
                                                                            <!--<div class="label-product label-new">New</div>-->
                                                                            <a href="{{url('gift/'.$product->slug)}}">
                                                                                <img src="{!!$product->picture != '' ? asset('images/products/'.$product->id.'/'.$product->picture):asset('images/products/dummy-image.jpg')!!}" alt="Compete Track Tote" title="Compete Track Tote">
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
                                                                                    <!--<a href="#">Studio Design</a>-->
                                                                                </div>
                                                                                <div class="product-ratings">
                                                                                    <!--<div class="rating-box">-->
                                                                                    <!--    <ul class="rating d-flex">-->
                                                                                    <!--        <li><i class="ion ion-md-star-outline"></i></li>-->
                                                                                    <!--        <li><i class="ion ion-md-star-outline"></i></li>-->
                                                                                    <!--        <li><i class="ion ion-md-star-outline"></i></li>-->
                                                                                    <!--        <li><i class="ion ion-md-star-outline"></i></li>-->
                                                                                    <!--        <li><i class="ion ion-md-star-outline disabled"></i></li>-->
                                                                                    <!--    </ul>-->
                                                                                    <!--</div>-->
                                                                                </div>
                                                                            </div>
                                                                            <h4 class="product-name"><a href="{{url('gift/'.$product->slug)}}">{{$product->name}}</a></h4>
                                                                            <p class="product-price">
                                                                               <p>SKU:{{$product->sku}}</p></span>
                                                                                <span class="price-new">{{showPrice($product->variants->sortBy('price')->first()->price)}}</span>
                                                                            </p>
                                                                        </div><!-- end of product-caption -->
                                                                    </div><!-- end of product-inner -->
                                                                </div><!-- end of product-thumb -->
                                                            </article> <!-- end of product-layout -->
                                                            @endforeach  

                                  

                                                          
                                                        </div>
                                                    </div>
                                                    <div id="list" class="tab-pane anime-tab" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-12">
                                                                 @foreach($products as $product)
                                                                <article class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <!--<div class="label-product label-sale">-20%</div>-->
                                                                                <!--<div class="label-product label-new">New</div>-->
                                                                                 <a href="{{url('gift/'.$product->slug)}}">
                                                                                      <img src="{!!$product->picture != '' ? asset('images/products/'.$product->id.'/'.$product->picture):asset('images/products/dummy-image.jpg')!!}" title="Compete Track Tote" alt="Compete Track Tote">
                                                                                </a>
                                                                                <!--<div class="action-links">-->
                                                                                <!--    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>-->
                                                                                <!--    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>-->
                                                                                <!--    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>-->
                                                                                <!--    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>-->
                                                                                <!--</div>-->
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-manufacturer">
                                                                                    <!--<a href="#">Studio Design</a>-->
                                                                                </div>
                                                                                <h4 class="product-name">
                                                                                    <a href="single-product.html">{{$product->name}}</a>
                                                                                </h4>
                                                                                <div class="product-ratings">
                                                                                    <!--<div class="rating-box">-->
                                                                                    <!--    <ul class="rating d-flex">-->
                                                                                    <!--        <li><i class="ion ion-md-star-outline"></i></li>-->
                                                                                    <!--        <li><i class="ion ion-md-star-outline"></i></li>-->
                                                                                    <!--        <li><i class="ion ion-md-star-outline"></i></li>-->
                                                                                    <!--        <li><i class="ion ion-md-star-outline"></i></li>-->
                                                                                    <!--        <li><i class="ion ion-md-star-outline disabled"></i></li>-->
                                                                                    <!--    </ul>-->
                                                                                    <!--</div>-->
                                                                                </div>
                                                                                <p class="product-price">
                                                                                  
                                                                                    <span class="price-new">{{showPrice($product->variants->sortBy('price')->first()->price)}}</span>
                                                                                    <p>SKU : {{$product->sku}}</p>
                                                                                </p>
                                                                                <div class="product-des">
                                                                                    <p>{{$product->description}}</p>
                                                                                </div>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </article> <!-- end of product-layout -->
                                                                @endforeach 
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end of shop-products-wrapper -->

                                             <div class="pagination-area">
                                                <div class="row align-items-center">
                                                    <div class="col-12 order-2 col-sm-12 col-md-6 order-md-1 col-lg-6">
                                                        <div class="page-amount d-flex justify-content-center justify-content-md-start">
                                                           <p>Showing
                                                            {{$products->firstItem()}} to {{$products->lastItem()}}  of {{$products->total()}} ({{$products->lastPage()}} Pages)</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 order-1 col-sm-12 col-md-6 order-md-2 col-lg-6">
                                                      {{$products->links()}}     
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of shop-wrapper -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Products Wrapper -->
        </div>
        <!-- End of Main Content Wrapper -->

        <!-- Start of Footer -->
      

        <!-- Quick View Content Start -->
       
        <!-- Quick View Content End -->

        <!-- Start of Scroll to Top -->
       
        <!-- End of Scroll to Top -->
    </div>
    <!-- End of Whole Site Wrapper -->

 

@endsection