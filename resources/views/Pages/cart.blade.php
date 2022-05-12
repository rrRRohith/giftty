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
                            <span class="breadcrumb-item active">Shopping Cart</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->
     


         <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Shopping Cart Wrapper -->
            <div class="shopping-cart-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="shopping-cart">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="section-title">
                                                <h2>Shopping Cart</h2>
                                            </div>
                               
                                          
                                            @if(isset($cart) && count($cart->items))
                                            <form action="#">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <td>Image</td>
                                                                <td>Product Name</td>
                                                                <td>Quantity</td>
                                                                <td>Sub Total</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(isset($cart))
                                                            @foreach($cart->items as $item)
                                                            <tr>
                                                                <td>
                                                                    <a href="#"><img src="{!!$item->product_picture != '' ? asset('images/products/'.$item->product_picture):asset('images/products/dummy-image.jpg')!!}" alt="Cart Product Image" title="Compete Track Tote" class="img-thumbnail"></a>
                                                                </td>
                                                                <td>
                                                                    <a href="@if(isset($item->slug)) {{url('gift/'.$item->slug)}}@else @endif"
                                                                  >{{$item->product_name}}</a>
                                                                    <span>Delivery Date: {{$item->delivery_date}}</span>
                                                                    <span>Color: Brown</span>
                                                                </td>
                                                                <td>
                                                                    <form action="" method="post" ></form>
                                                                    <form action="{{url('item/'.$item->id.'/update')}}" method="post" >
                                                                        @csrf
                                                                        <div class="input-group btn-block">
                                                                            <div class="cart-input">
                                                                                <input class="cart-input-box" type="text" value="{{$item->quantity}}" name="quantity">
                                                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                                            </div>
                                                                            <span class="input-group-btn">
    
                                                                             <button type="submit" data-toggle="tooltip" data-direction="top" class="btn btn-primary" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                                                                         
                                                                             <a href="{{url('item/'.$item->id.'/delete')}}" role="button" data-toggle="tooltip" data-direction="top" class="btn btn-danger pull-right" data-original-title="Remove"  onclick="javascript:return confirm('Do you want to delete the item');"><i class="fa fa-times-circle"></i></a>
                                                                            </span>
                                                                      
                                                                        </div>
                                                                    </form>
                                                                    
                                                                </td>
                                                                <td>{{showPrice($item->subtotal)}}</td>
                                                            </tr>    
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>
                                            <!-- Discount coupon section start -->
                                         
                                            <div class="cart-accordion-wrapper mt-full">
                                                <h2>What would you like to do next?</h2>
                                                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                                                   @if(session()->has('error'))
                                                  <div class="success-message"><center> {!! session('error') !!}</center></div>
                                                  @endif
                                                <div id="cart_accordion" class="mt-4" role="tablist">
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingCoupon">
                                                            <h4 class="mb-0">
                                                                <a data-toggle="collapse" href="#collapseCoupon" aria-expanded="false" aria-controls="collapseCoupon">Use Coupon Code<i class="ion ion-ios-arrow-down"></i></a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseCoupon" class="collapse" role="tabpanel" aria-labelledby="headingCoupon" data-parent="#cart_accordion">
                                                            <div class="card-body">


                                                                <div class="input-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-coupon">Enter your coupon here</label>
                                                                    <form action="{{url('/shop/coupon')}}" method="post">
                                                                        @csrf
                                                                        <div class="col-12 col-sm-12 col-md-9">
                                                                            <div class="input-group">
                                                                            <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control" required>&nbsp
                                                                    <!--         <button  type="submit" value="Apply Coupon" id="button-coupon" class="btn btn-secondary"> -->
                                                                            <button type="submit" name="coupon_submit" value="Apply" class="btn btn-secondary form-control">Apply</button>    
                                                                           </div>
                                                                        </div>
                                                                   </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 <!--    <div class="card">
                                                        <div class="card-header" role="tab" id="headingTax">
                                                            <h4 class="mb-0">
                                                                <a class="collapsed" data-toggle="collapse" href="#collapseTax" aria-expanded="false" aria-controls="collapseTax">Estimate Shipping &amp; Taxes<i class="ion ion-ios-arrow-down"></i></a>
                                                              </h4>
                                                        </div>
                                                        <div id="collapseTax" class="collapse" role="tabpanel" aria-labelledby="headingTax" data-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <p>Enter your destination to get a shipping estimate.</p>
                                                                <div class="input-group form-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-country"><span class="text-danger">*</span> Country</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <select name="country_id" id="input-country" class="form-control nice-select">
                                                                            <option value=""> --- Please Select --- </option>
                                                                            <option value="">Argentina</option>
                                                                            <option value="">Bangladesh</option>
                                                                            <option value="">Belgium</option>
                                                                            <option value="">Brazil</option>
                                                                            <option value="">Germany</option>
                                                                            <option value="">India</option>
                                                                            <option value="">United Kingdom</option>
                                                                            <option value="">United States</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group form-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-zone"><span class="text-danger">*</span> Region / State</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <select name="zone_id" id="input-zone" class="form-control nice-select">
                                                                            <option value=""> --- Please Select --- </option>
                                                                            <option value="">Alabama</option>
                                                                            <option value="">Arizona</option>
                                                                            <option value="">California</option>
                                                                            <option value="">Florida</option>
                                                                            <option value="">Newyork</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group form-group mb-5">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-postcode"><span class="text-danger">*</span> Post Code</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control mb-0">
                                                                    </div>
                                                                </div>
                                                                <button type="button" id="button-quote" class="btn btn-secondary">Get Quotes</button>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="card">
                                                        <div class="card-header" role="tab" id="headingGift">
                                                            <h4 class="mb-0">
                                                                <a class="collapsed" data-toggle="collapse" href="#collapseGift" aria-expanded="false" aria-controls="collapseGift">Use Gift Certificate<i class="ion ion-ios-arrow-down"></i></a>
                                                              </h4>
                                                        </div>
                                                        <div id="collapseGift" class="collapse" role="tabpanel" aria-labelledby="headingGift" data-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <div class="input-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-voucher">Enter your gift certificate code here</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <div class="input-group">
                                                                            <input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
                                                                            <input type="button" value="Apply Gift Certificate" id="button-boucher" class="btn btn-secondary">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                   <!-- end discount coupon section -->
                                            <div class="cart-amount-wrapper">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-4 offset-md-8">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>Cart Subtotal:</strong></td>
                                                                    <td>{{showPrice($cart->subtotal)}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Discount:</strong></td>
                                                                    <td>{{showPrice($cart->discount)}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Total:</strong></td>
                                                                    <td><span class="color-primary">{{showPrice($cart->total)}}</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                                @else
                                                <div id="empty-message"><h1> No Items in your cart.</h1></div>
                                            @endif

                                         
                                            <div class="cart-button-wrapper mt-4">
                                                 @if(isset($cart) && count($cart->items) < 1)
                                                <a href="{{url('/')}}" class="btn btn-secondary dark">Continue Shopping</a>

                                                @else
                                                <a href="{{url('/shop/checkout')}}" class="btn btn-secondary dark float-right">Checkout</a>
                                                 @endif
                                            </div>
                                               
                                        </div>
                                    </div>
                                </div> <!-- end of shopping-cart
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Shopping Cart Wrapper -->
        </div>
        <!-- End of Main Content Wrapper -->

    </div>    

@endsection