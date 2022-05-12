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
                            <a class="breadcrumb-item" href="cart.html">Shopping Cart</a>
                            <span class="breadcrumb-item active">Checkout</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
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
                                            <div class="user-actions user-login">
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
                                            </div> <!-- end of user-actions -->

                                            <div class="user-actions user-coupon">
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
                                            </div> <!-- end of user-actions -->
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of user-actions -->

                                <div class="checkout-area">
                                    <div class="row">
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
                                                            <input type="text" class="form-control"  name="firstname" required>
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label>Last Name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control"  name="lastname" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                                <label  class="d-block">Location Type <span class="text-danger">*</span></label>
                                                                
                                                                
                                                         </div>

                                                 
                                                            <div class="form-group col-12 col-sm-12 col-md-6">
                                                                <label >Address <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="address" required>
                                                            </div>
                                                      
                                                   </div>
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-4">
                                                            <label >Postal code <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="postal_code"  required>
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-4">
                                                            <label >City <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="city" required>
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-4">
                                                            <label class="d-block">Province <span class="text-danger">*</span></label>
                                                            <select name="province" class="form-control nice-select" required="">
                                                                <option value=""> --- Please Select --- </option>
                                                                @foreach($provinces as $province)
                                                               <option value="{{$province->short_code}}"
                                                                    <?php echo old('province',isset($city) ? $city->province:'') == $province->short_code  ? 'selected="selected"':''; ?>>
                                                                    {!!$province->name!!}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                    </div>
                                               
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label >Phone</label>
                                                            <input type="tel" class="form-control" name="phone" >
                                                        </div>
                                                       
                                                    </div>
                                                    <!-- <div class="form-row">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <div class="form-check mb-3">
                                                               <div class="custom-checkbox">
                                                                    <input class="form-check-input" type="checkbox" id="create_account">
                                                                    <span class="checkmark"></span>
                                                                    <label class="form-check-label" for="create_account">Create an account?</label>
                                                                </div>
                                                            </div>
                                                            <div class="new-account-info mt-4">
                                                                <div class="form-row">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <p class="mb-4">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                                        <label for="new_pass">Account Password <span class="text-danger">*</span></label>
                                                                        <input type="password" class="form-control" id="new_pass">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  -->
                                                    <div class="form-row">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <div class="form-check mb-3">
                                                                <div class="custom-checkbox">
                                                                    <input class="form-check-input" type="checkbox" id="different_shipping">
                                                                    <span class="checkmark"></span>
                                                                    <label class="form-check-label" for="different_shipping" id="different_shipping_address">Ship to a different address?</label>
                                                                </div>
                                                            </div>
                                                            <div class="ship-box-info mt-4">
                                                                <div class="form-row mb-3">
                                                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                                                        <label >First Name <span class="text-danger">*</span></label>
                                                                        <input type="text" name="firstname" class="form-control"  required>
                                                                    </div>
                                                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                                                        <label>Last Name <span class="text-danger">*</span></label>
                                                                        <input type="text"  class="form-control"  required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-3">
                                                                  
                                                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                                                        <label >Email Address <span class="text-danger">*</span></label>
                                                                        <input type="email" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-3">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <label  class="d-block">Country <span class="text-danger">*</span></label>
                                                                        <select   class="form-control nice-select" required="">
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
                                                                <div class="form-row mb-3">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <label for="street_add">Street Address</label>
                                                                        <input type="text" class="form-control" >
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-3">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <label for="ap_add">Apartment, suite, unit etc. (optional)</label>
                                                                        <input type="text" class="form-control" i>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-3">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <label for="cit_name">City <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mb-3">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <label for="prov_name">Province <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                                        <label for="zp_code">Zip Code <span class="text-danger">*</span></label>
                                                                        <input type="number" class="form-control" equired>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <label for="order_notes">Cart Message</label>
                                                            <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                        </div>
                                                    </div>
                                  
                                                <div class="section-title left-aligned">
                                                    <h2>Billing Details</h2>
                                                </div>

                                         
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label >First Name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="billing_firstname"   required>
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label >Last Name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control"  name="billing_lastname"  required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb-3">
                                                       
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label >Email Address <span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" name="billing_email" required>
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label >Address <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="billing_address" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-4">
                                                            <label >Postal code <span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="billing_postal_code"  required>
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-4">
                                                            <label >City <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control"  name="billing_city"  required>
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-4">
                                                            <label  class="d-block">Country <span class="text-danger">*</span></label>
                                                            <select name="billing_province" class="form-control nice-select" required>
                                                                <option value=""> --- Please Select --- </option>
                                                                @foreach($provinces as $province)
                                                               <option value="{{$province->short_code}}"
                                                                    <?php echo old('province',isset($city) ? $city->province:'') == $province->short_code  ? 'selected="selected"':''; ?>>
                                                                    {!!$province->name!!}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                                            <label>Phone</label>
                                                            <input type="tel" class="form-control" name="billing_phone">
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <div class="form-check mb-3">
                                                                <div class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox">
                                                                    <span class="checkmark"></span>
                                                                    <label class="form-check-label" for="create_account">Create an account?</label>
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
                                                    
                                                    <div class="form-row">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <label for="order_notes">Order Notes</label>
                                                            <textarea class="form-control" id="order_notes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                        </div>
                                                    </div>
                                                    <input type="submit" value="check">
                                                </form>

                                            </div> <!-- end of checkout-form -->
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
                                                                    <img src="{!!$item->product_picture != '' ? asset('images/user/'.$item->product_picture):asset('images/user/dummy-image.jpg')!!}" alt="Compete Track Tote" title="Compete Track Tote">
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
                                                </div> <!-- end of product-container -->
                                                <div class="order-review">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr class="cart-subtotal">
                                                                    <th>Subtotal</th>
                                                                    <td class="text-center">{{showPrice($cart->subtotal)}}</td>
                                                                </tr>            
                                                                <tr class="order-total">
                                                                    <th>Total</th>
                                                                    <td class="text-center"><strong><span class="color-primary">{{showPrice($cart->subtotal)}}</span></strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            <!--Check Payments -->
                                            </div> <!-- end of order-summary -->
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of checkout-area -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Checkout Wrapper -->
        </div>
        <!-- End of Main Content Wrapper -->


    </div>    

@endsection
