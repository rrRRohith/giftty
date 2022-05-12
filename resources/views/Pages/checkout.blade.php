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
               <a class="breadcrumb-item" href="{{url('/')}}">Home</a>
               <a class="breadcrumb-item" href="{{url('/shop/cart')}}">Shopping Cart</a>
               <span class="breadcrumb-item active">Checkout</span>
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
                  <div class="user-actions-area">
                     <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                           <!-- <div class="user-actions user-login">
                              <h3>Returning customer? <span id="show_login">Click here to login.</span></h3>
                              <div id="checkout_login" class="display-content">
                                 <div class="login-info">
                                    <p class="login-text">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                                    <form>
                                       <div class="form-row mb-3">
                                          <div class="form-group col-12 col-sm-12 col-md-6">
                                             <label for="login_user">Username Or Email <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control"  required>
                                          </div>
                                          <div class="form-group col-12 col-sm-12 col-md-6">
                                             <label for="login_pass">Password <span class="text-danger">*</span></label>
                                             <input type="password" class="form-control"  required>
                                          </div>
                                       </div>
                                       <div class="form-row align-items-center mb-3">
                                          <div class="form-group col-4 col-sm-2 col-md-2 col-lg-1">
                                             <button type="submit" class="btn btn-secondary">Login</button>
                                          </div>
                                          <div class="form-group col-8 col-sm-10 col-md-10 col-lg-11">
                                             <div class="form-check">
                                                <div class="custom-checkbox">
                                                   <input class="form-check-input" type="checkbox" >
                                                   <span class="checkmark"></span>
                                                   <label class="form-check-label" for="remember_check">remember Me</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <p class="lost-password">
                                          <a href="#">Lost your password?</a>
                                       </p>
                                    </form>
                                 </div>
                              </div>
                           </div> -->
                           <!-- end of user-actions -->
                           <!-- <div class="user-actions user-coupon">
                              <h3>Have A Coupon? <span id="show_coupon">Click Here To Enter Your Code.</span></h3>
                              <div id="checkout_coupon" class="display-content">
                                 <div class="coupon-info">
                                    <form action="#">
                                       <div class="row">
                                          <div class="col-12 col-sm-12 col-md-6">
                                             <div class="input-group">
                                                <input type="text" name="coupon" value="" placeholder="Coupon Code" id="input-coupon" class="form-control mr-3" required>
                                                <input type="submit" value="Apply Coupon" id="button-coupon" class="btn btn-secondary">
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div> -->
                           <!-- end of user-actions -->
                        </div>
                     </div>
                     <!-- end of row -->
                  </div>
                  <!-- end of user-actions -->
                  <div class="checkout-area">
                     <div class="row">
                        @if($errors->count())
                        <div class="alert alert-danger alert-dismissable">
                           Sorry some errors in form submission
                        </div>
                        @endif
                        @if(session()->has('success'))
                        <div class="success-message"><center> {!! session('success') !!}</center></div>
                        @endif
                        @if(session()->has('error'))
                        <div class="success-message"><center> {!! session('error') !!}</center></div>
                        @endif 
                        <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                           <div class="checkout-form">
                              <div class="section-title left-aligned">
                                 <h2>Shipping Details</h2>
                              </div>
                              <form action="{{url('/shop/checkout')}}" method="post">
                                 @csrf
                                 <div class="form-row mb-3">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label>First Name <span class="text-danger">*</span></label>

                                       <input type="text" class="form-control" id="delivery_firstname" name="firstname" value="{{old('firstname',isset($shipping_addresses) ? $shipping_addresses->firstname :'')}}" required>
                                    </div> 
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label>Last Name <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control" id="delivery_lastname" name="lastname"  value="{{old('lastname',isset($shipping_addresses) ? $shipping_addresses->lastname :'')}}" required>

                                    </div>
                                 </div>
                                 <div class="form-row mb-3">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label  class="d-block">Location Type <span class="text-danger">*</span></label>
                                       <select name="location_type" class="form-control nice-select"  required>

                              
                                          <option value="Residence" {{old('location_type',isset($shipping_addresses) ? $shipping_addresses->location_type :'')=='Residence' ? 'selected':''}}>Residence</option>
                                          <option value="Business" {{old('location_type',isset( $shipping_addresses) ?  $shipping_addresses->location_type :'')=='Business' ? 'Business':''}}>Business</option>

                                       </select>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label >Address <span class="text-danger">*</span></label>

                                       <input type="text" class="form-control" id="delivery_address" name="address"  value="{{old('address',isset($shipping_addresses) ? $shipping_addresses->address :'')}}" required>

                                    </div>
                                 </div>
                                 <div class="form-row mb-3">
                                    <div class="form-group col-12 col-sm-12 col-md-2">
                                       <label >Postal code <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control" id="delivery_postalcode"  name="postalcode"  value="{{old('postalcode',isset($shipping_addresses) ? $shipping_addresses->postalcode :'')}}"  required>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label >City <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control" id="delivery_city" name="city"  value="{{old('city',isset($shipping_addresses) ? $shipping_addresses->city :'')}}" required>

                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-4">
                                       <label class="d-block">Province <span class="text-danger">*</span></label>
                                       <select name="province" id="delivery_province" class="form-control nice-select"  required="">
                                          <option value=""> --- Please Select --- </option>
                                          @foreach($provinces as $province)
                                          <option value="{{$province->short_code}}"

                                             <?php echo old('province',isset($shipping_addresses->province) ? $shipping_addresses->province:'') == $province->short_code  ? 'selected="selected"':''; ?>>

                                             {!!$province->name!!}
                                          </option>
                                          @endforeach
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-row mb-3">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label >Phone</label>

                                       <input type="text" class="form-control" id="delivery_phone" name="phone"  value="{{old('phone',isset($shipping_addresses) ? $shipping_addresses->phone :'')}}" >

                                    </div>
                                 </div>
                                    <div class="form-row">
                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                       <label for="order_notes">Card Message</label>
                                       <textarea class="form-control" placeholder="Notes about your card messages" onkeyup="countChar(this)" name="card_message">{{old('card_message',isset($carts) ? $carts->card_message :'')}}</textarea>
                                      <div id="charNum"></div>
                                    </div>
                                 </div>
                                 
                                 
                                 <div class="form-row mt-4">
                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                        <div class="form-check mb-3">
                                          <div class="form-check-label">
                                             <input class="form-check-input" type="checkbox" onclick="checkDeliveryInfo()">
                                             <span class="checkmark"></span>
                                             <label class="form-check-label">Billing Info same as Delivery Info</label>
                                          </div>
                                       </div> 
                                       <!-- <div class="new-account-info mt-4">
                                          <div class="form-row">
                                              <div class="form-group col-12 col-sm-12 col-md-12">
                                                  <p class="mb-4">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                  <label for="new_pass">Account Password <span class="text-danger">*</span></label>
                                                  <input type="password" class="form-control" id="new_pass">
                                              </div>
                                          </div>
                                          </div> -->
                                    </div>
                                 </div>
                                 
                                 
                                 
                                 
                                 <div class="section-title left-aligned">
                                    <h2>Billing Details</h2>
                                 </div>
                                 <div class="form-row mb-3">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label >First Name <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control" id="billing_firstname"  name="billing_firstname"  value="{{old('billing_firstname',isset($billing) ? $billing->firstname :'')}}"  required>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label >Last Name <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control" id="billing_lastname" name="billing_lastname" value="{{old('billing_lastname',isset($billing) ?$billing->lastname :'')}}" required>

                                    </div>
                                 </div>
                                 <div class="form-row mb-3">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label >Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="billing_email" name="billing_email" value="{{old('billing_email',isset($cart) ? $cart->email :'')}}"  required>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label >Address <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control" id="billing_address" name="billing_address" value="{{old('billing_address',isset($billing) ? $billing->address :'')}}" required>

                                    </div>
                                 </div>
                                 <div class="form-row mb-3">
                                    <div class="form-group col-12 col-sm-12 col-md-2">
                                       <label >Postal code <span class="text-danger">*</span></label>

                                       <input type="text" class="form-control" id="billing_postalcode" name="billing_postalcode" value="{{old('billing_postalcode',isset($billing) ? $billing->postalcode :'')}}"  required>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label >City <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control" id="billing_city"  name="billing_city"   value="{{old('billing_city',isset($billing) ? $billing->city :'')}}"  required>

                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-4">
                                       <label  class="d-block">Province <span class="text-danger">*</span></label>
                                       <select name="billing_province"  id="billing_province" class="form-control"  required>
                                          <option value=""> --- Please Select --- </option>
                                          @foreach($provinces as $province)

                                          <option value="{{$province->short_code}}"
                                             <?php echo old('billing_province',isset($billing->province) ? $billing->province:'') == $province->short_code ? 'selected="selected"':''; ?>>

                                             {!!$province->name!!}
                                          </option>
                                          @endforeach
                                       </select>
                                    </div>
                                    
                                   
                                    
                                 </div>
                                 <div class="form-row mb-3">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                       <label>Phone</label>

                                       <input type="text" class="form-control" id="billing_phone" name="billing_phone" value="{{old('billing_phone',isset($billing) ? $billing->phone :'')}}">

                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                       <!-- <div class="form-check mb-3">
                                          <div class="form-check-label">
                                             <input class="form-check-input" type="checkbox">
                                             <span class="checkmark"></span>
                                             <label class="form-check-label" for="create_account">Create an account?</label>
                                          </div>
                                       </div> -->
                                       <!-- <div class="new-account-info mt-4">
                                          <div class="form-row">
                                              <div class="form-group col-12 col-sm-12 col-md-12">
                                                  <p class="mb-4">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                  <label for="new_pass">Account Password <span class="text-danger">*</span></label>
                                                  <input type="password" class="form-control" id="new_pass">
                                              </div>
                                          </div>
                                          </div> -->
                                    </div>
                                 </div>
                               
                                 <div class="form-row">
                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                       <label for="order_notes"></label>Special Notes</label>
                                       <textarea class="form-control" onkeyup="countCharSpecial(this)" name="special_note" placeholder="Notes about your special notes for order, e.g. special notes for delivery.">{{old('special_note',isset($carts) ? $carts->special_note :'')}}</textarea>
                                       <div id="charNumSpecial">
                                           
                                       </div>
                                    </div>
                                 </div>
                                 <input type="submit" value="Continue & Payment">

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
                                 @if(isset($cart->items))
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
                              @endif
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
 $('#billing_phone').mask('000-000-0000');
 $('#billing_postalcode').mask('A0A 0A0');
 $('#delivery_phone').mask('000-000-0000');
 $('#delivery_postalcode').mask('A0A 0A0');
});
   
      function countChar(val) {
        var len = val.value.length;
        if (len >= 250) {
          val.value = val.value.substring(0, 250);
        } else {
          $('#charNum').text(249 - len);
        }
      };
      function countCharSpecial(val) {
        var len = val.value.length;
        if (len >= 250) {
          val.value = val.value.substring(0, 250);
        } else {
          $('#charNumSpecial').text(249 - len);
        }
      };
      function checkDeliveryInfo(){
          $("#billing_firstname").val($("#delivery_firstname").val());
          $("#billing_lastname").val($("#delivery_lastname").val());
          $("#billing_address").val($("#delivery_address").val());
          $("#billing_city").val($("#delivery_city").val());
          $("#billing_postalcode").val($("#delivery_postalcode").val());
         
          $("#billing_phone").val($("#delivery_phone").val());
          var province = $('#delivery_province option:selected').val();
         // alert(province);
        // $('select[name^="billing_province"] option:selected').attr("selected",null);
         $('select[name^="billing_province"] option[value=' + province + ']').attr("selected","selected");
        //   $('#billing_province option[value=' + province + ']').va();
       
      }
    

</script>
@endsection

