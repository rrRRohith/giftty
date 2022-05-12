<div class="header-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-6 order-2 col-sm-6 order-sm-2 col-md-4 order-md-1 col-lg-3">
                <div class="header-search-area">
                	<form action="{{url('search')}}" method="get">
                		<div class="input-group">
                            <input type="text" class="form-control" placeholder="Search entire store here ..." name="keyword" @if(isset(request()->keyword)) value="{{request()->keyword}}" @endif>
                            <div class="input-group-append">
                            	<button class="header-search-btn" type="submit"><i class="pe-7s-search"></i></button>
                            </div>
                		</div>
                    </form>
                </div>
			</div>
			<div class="col-12 order-1 col-sm-12 order-sm-1 col-md-4 order-md-2 col-lg-6">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('assets/images/logo.png')}}" alt="Logo" id="logo-image"></a>
                </div>
			</div>
			<div class="col-6 order-3 col-sm-6 col-md-4 col-lg-3">
                <?php $cart = getCart(); ?>
                <div class="header-cart-area">
                    <div class="header-cart">
                        <div class="btn-group">
                            <button class="btn-link dropdown-toggle icon-cart">
                                <i class="pe-7s-shopbag"></i>
                          
                         
                                <span class="count-style">
                                    {{isset($cart) ? $cart->items->count():0}}
                                </span>
                            </button>
                            <div class="dropdown-menu">
                                <div class="shopping-cart-content">
                                    @if(isset($cart) && $cart->items->count())
                                    
                                    <ul class="list-unstyled">
                                       @foreach($cart->items as $item)
                                       
                                        <li class="single-cart-item media">
                                            <div class="shopping-cart-img mr-4">
                                                <a href="#">
                                                    <img class="img-fluid" alt="Cart Item" src="{!!$item->product_picture != '' ? asset('images/products/'.$item->product_picture):asset('images/products/dummy-image.jpg')!!}">
                                                    <span class="product-quantity">{{$item->quantity}}x</span>
                                                </a>
                                            </div>
                                            <div class="shopping-cart-title media-body">
                                                <h4><a href="#">{{$item->product_name}}</a></h4>
                                                <p class="cart-price">{{showPrice($item->price)}}</p>
                                                <div class="product-attr">
                                                    <span>Qty: {{$item->quantity}}</span>
                                                    <span>Color: Black</span>
                                                </div>
                                            </div>
                                            <!-- <div class="shopping-cart-delete">
                                                <a href="#"><i class="ion ion-md-close"></i></a>

                                            </div> -->

                                        </li>
                                       @endforeach
                              
                                    </ul>
                                    <div class="shopping-cart-total">
                                        <h4>Sub-Total : <span>{{showPrice($cart->subtotal)}}</span></h4>

                                        <h4>Total : <span>{{showPrice($cart->total)}}</span></h4>

                                    </div>

                                    <div class="shopping-cart-btn">
                                        <a class="default-btn" href="{{url('/shop/cart')}}">view cart</a>
                                        <a class="default-btn" href="{{url('/shop/checkout')}}">checkout</a>
                                    </div>
                                    
                                    @else
                                    <div class="shopping-cart-mt">
                                        <h3>Your Cart is Empty</h3>
                                        <p>Please Add an Item to the cart</p>
                                    </div>
                                    

                                    @endif
                                     
                                 
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="list-inline">
                        <li class="top-links list-inline-item">
                            <div class="btn-group">
                                <button class="btn-link dropdown-toggle"><i class="pe-7s-config"></i></button>
                                <div class="dropdown-menu">
                                    <ul>
                                       <li><a href="{{url('customer/register')}}">Register</a></li>
                                       <li><a href="{{url('seller/login')}}">Login</a></li>
                                       <li><a href="{{url('customer/dashboard')}}">My Account</a></li>

                                    <!--    <li><a href="#">Wishlist</a></li> -->

                                       <li><a href="{{url('/shop/checkout')}}">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of header-cart-area -->
			</div>
		</div>
	</div> <!-- end of container -->
</div> <!-- end of header-top -->