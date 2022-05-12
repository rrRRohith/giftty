<!-- Footer Widgets Area -->
<div class="footer-widgets-area">
    <div class="container">
        <div class="footer-inner">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <aside class="widget-container">
                        <div class="widget-content">
                        	<div class="footer-logo mb-half">
                        		<img src="{{asset('assets/images/logo.png')}}" style="width:140px;" alt="Footer Logo">
                        	</div>
                            <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                            <div class="footer-contact">
                                <p><span>Address:</span>Attn. Customer Service,3-200 Evans Ave,Etobicoke, Ontario, Canada,M8Z 1J7</p>
                                <p><span>Phone:</span><a href="#">+1 416-613-9495</a></p>
                                <p><span>Email:</span><a href="#">support@giftty.com</a></p>
                            </div>
                        </div> <!-- end of widget-content -->
                    </aside> <!-- end of widget-container -->
                </div>

                <div class="col-12 col-sm-12 col-md-6 order-md-3 col-lg-2 order-lg-2">
                    <aside class="widget-container">
                        <h4 class="widgettitle">Products</h4>
                        <div class="widget-content">
                            <div class="widgetized-menu">
                                <ul class="list-unstyled">
                                    <li><a href="#">Prices drop</a></li>
                                    <li><a href="#">New Products</a></li>
                                    <li><a href="#">Best Sales</a></li>
                                    <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                                    <li><a href="{{url('seller/login')}}">Login</a></li>
                                </ul>
                            </div>
                        </div> <!-- end of widget-content -->
                    </aside> <!-- end of widget-container -->
                </div>

                <div class="col-12 col-sm-12 col-md-6 order-md-4 col-lg-2 order-lg-3">
                    <aside class="widget-container">
                        <h4 class="widgettitle">Our Company</h4>
                        <div class="widget-content">
                            <div class="widgetized-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('about-us')}}">About Us</a></li>
                                    <li><a href="{{url('faqs')}}">FAQ'S</a></li>
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">Stores</a></li>

                                    <li><a href="{{url('policies')}}">Policies</a></li>

                                    <li><a href="{{url('customer/dashboard')}}">My Account</a></li>
                                </ul>
                            </div>
                        </div> <!-- end of widget-content -->
                    </aside> <!-- end of widget-container -->
                </div>

                <div class="col-12 col-sm-12 col-md-6 order-md-2 col-lg-4 order-lg-4">
                    <aside class="widget-container">
                        <h4 class="widgettitle">Sign up for our newsletter</h4>
                        <div class="widget-content">
                            <div class="newsletter-widget">
                                <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                                <form  action="{{url('subscription')}}" method="post">
                                    @csrf
                                    <div class="input-group">
                                        <input type="email" autocomplete="off" placeholder="Your Email Address" name="email" required >
                                        <button class="default-btn" type="submit">Sign Up</button>
                                    </div>
                                </form> <!-- end of form -->

                                <div class="mailchimp-alerts">
                                    <div class="mailchimp-submitting"></div>
                                    <div class="mailchimp-success"></div>
                                    <div class="mailchimp-error"></div>
                                </div><!-- end of mailchimp-alerts -->
                            </div>
                        </div> <!-- end of widget-content -->
                    </aside> <!-- end of widget-container -->

                    <aside class="widget-container">
                        <div class="widget-content">
                            <div class="social-widget mt-half">
                                <div class="socials d-flex align-items-center justify-content-center justify-content-md-start">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="https://www.facebook.com" class="bg-facebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="https://twitter.com" class="bg-twitter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="https://in.pinterest.com" class="bg-pinterest" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com" class="bg-instagram" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="https://in.linkedin.com" class="bg-linkedin" title="Linked In" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end of widget-content -->
                    </aside> <!-- end of widget-container -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of footer-inner -->
    </div> <!-- end of container -->
</div> <!-- end of footer-widgets-area -->

<!-- Footer Copyright -->
<div class="footer-copyright">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <p class="copyright-text">&copy; {{date('Y')}} Giftty.ca. All rights are reserved.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="footer-payment">
					<a href="#"><img src="{{asset('assets/images/icons/payment.png')}}" alt="Payment Icons"></a>
                </div>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer-copyright -->