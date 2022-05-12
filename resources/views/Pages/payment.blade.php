@extends('layouts.main')
@section('content')
<div class="fixed-header-space"></div>
<!-- empty placeholder div for Fixed Menu bar height-->
<!-- Start of Breadcrumbs -->
<div class="breadcrumb-section bgc-offset mb-full">
   <div class="container">
      <div class="row">
         <div class="col-12 col-sm-12 col-md-12">
            <nav class="breadcrumb">
               <a class="breadcrumb-item" href="index.html">Home</a>
               <a class="breadcrumb-item" href="cart.html">Shopping Cart</a>
               <span class="breadcrumb-item active">Payment</span>
            </nav>
         </div>
      </div>
      <!-- end of row -->
   </div>
   <!-- end of container -->
</div>
<!-- End of Breadcrumbs -->
<!-- Start of Main Content Wrapper -->
<div id="content" class="main-content-wrapper">
   <!-- Start of Checkout Wrapper -->
   <div class="checkout-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
               <main id="primary" class="site-main">
             
                @if($errors->count())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissable">
                    Sorry some errors in form submission
               {{$error}}

                </div>
                @endforeach
                @endif

                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif


                  <!-- end of user-actions -->
                  <div class="checkout-area">
                     <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                           <div class="checkout-form">
                              <div class="section-title left-aligned">
                                 <h2>Payment Details</h2>
                              </div>
                              <form action="{{url('cart/payment')}}" method="post">
                                 @csrf
                                 <div class="form-row mb-3">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label>Card Holder <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control"  name="name"  required>
                                       <span class="form-error">{{$errors->first('name')}}</span>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label>Card Number <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control" id="number" name="number" maxlength="16"  required >
                                       <span class="form-error">{{$errors->first('number')}}</span>
                                    </div>
                                 </div>   
                                 <div class="form-row mb-3">
                                 
                                    <div class="form-group col-12 col-sm-12 col-md-3">
                                       <label >CVV<span class="text-danger">*</span></label>
                                       <input type="text" class="form-control" id="cvv" name="cvv" maxlength="3" required >
                                      <span class="form-error">{{$errors->first('cvv')}}</span>
                                    </div>
                                   
                              
                                    <div class="form-group col-12 col-sm-12 col-md-3">
                                       <label >Expiry Month<span class="text-danger">*</span></label>
                                       <select name="expiry_month" class="form-control nice-select" required="">
                                           @for($i=1;$i<=12;$i++)
                                                <option value="{{sprintf("%2d",$i)}}">{{sprintf("%02d",$i)}}</option> 
                                            @endfor
                                       </select>
                                      <span class="form-error">{{$errors->first('expiry_month')}}</span>
                                    </div>
                                   <div class="form-group col-12 col-sm-12 col-md-3">
                                       <label >Expiry Year<span class="text-danger">*</span></label>
                                      <select name="expiry_year" class="form-control nice-select" required="">
                                           @for($i=1;$i<=10;$i++)
                                                <option value="{{date('Y')-$i}}">{{date('Y')+$i}}</option> 
                                            @endfor
                                       </select>
                                       <span class="form-error">{{$errors->first('expiry_year')}}</span>
                                    </div>
                                 </div>
                                 
                                 
                                 

                                 <input type="submit" value="Pay and Finish">
                              </form>
                           </div>
                           <!-- end of checkout-form -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                           <div class="order-summary">
                              <div class="section-title left-aligned">
                                 <h2>Your Order</h2>
                              </div>
                              <div class="product-container">
                                 @foreach($cart->items as $item)
                                 <div class="product-list">
                                    <div class="product-inner media align-items-center">
                                       <div class="product-image mr-4 mr-sm-5 mr-md-4 mr-lg-5">
                                          <a href="#">
                                          <img src="{!!$item->product_picture != '' ? asset('images/products/'.$item->product_picture):asset('images/products/dummy-image.jpg')!!}" alt="Compete Track Tote" title="Compete Track Tote">
                                          </a>
                                       </div>
                                       <div class="media-body">
                                          <h5>{{$item->product_name}}</h5>
                                          <p class="product-quantity">Quantity: {{$item->quantity}}</p>
                                          <p class="product-final-price">{{showPrice($item->price)}}</p>
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                              <!-- end of product-container -->
                              <div class="order-review">
                                 <div class="table-responsive">
                                    <table class="table table-bordered">
                                       <tbody>
                                          <tr class="cart-subtotal">
                                             <th>Subtotal</th>
                                             <td class="text-center">{{showPrice($cart->subtotal)}}</td>
                                          </tr>
                                          @if($cart->discount !=0)
                                          <tr class="cart-subtotal">
                                             <th>Discount</th>
                                             <td class="text-center">{{showPrice($cart->discount)}}</td>
                                          </tr>
                                          @endif
                                          <tr class="order-total">
                                             <th>Total</th>
                                             <td class="text-center"><strong><span class="color-primary">{{showPrice($cart->total)}}</span></strong></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <!--Check Payments -->
                           </div>
                           <!-- end of order-summary -->
                        </div>
                     </div>
                     <!-- end of row -->
                  </div>
                  <!-- end of checkout-area -->
               </main>
               <!-- end of #primary -->
            </div>
         </div>
         <!-- end of row -->
      </div>
      <!-- end of container -->
   </div>
   <!-- End of Checkout Wrapper -->
</div>
<!-- End of Main Content Wrapper -->
</div>    
@endsection
@section('bottom-scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script>
$(document).ready(function(){
 $('#number').mask('0000-0000-0000-0000');
 $('#cvv').mask('000');
 $('#expiry_month').mask('00');
 $('#expiry_year').mask('00');
 
});
</script>
@endsection