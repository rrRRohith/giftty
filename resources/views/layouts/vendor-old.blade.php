<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pebona - eCommerce HTML5 Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">


    <!-- CSS files
    ============================================ -->

    <!-- Boostrap stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">

    <!-- Plugins stylesheet -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Master stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
    <![endif]-->

    <!-- Start of Whole Site Wrapper with mobile menu support -->
    <div id="whole" class="whole-site-wrapper color-scheme-one">

        
      



       

        <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

 

        <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of My Account Wrapper -->
            <div class="my-account-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="user-dashboard">
                                    <div class="user-info">
                                        <div class="row align-items-center no-gutters">
                                           <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                               <div class="single-info">
                                                   <p class="user-name">Hello <span>John Doe</span> <br>(not John Doe? <a class="log-out" href="login.html">Log Out</a>)</p>
                                               </div>
                                           </div>
                                           <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                               <div class="single-info">
                                                   <p>Need Assistance? Customer service at <a href="#">admin@example.com</a></p>
                                               </div>
                                           </div>
                                           <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                               <div class="single-info">
                                                   <p>E-mail them at <a href="#">support@example.com</a></p>
                                               </div>
                                           </div>
                                           <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-3">
                                               <div class="single-info justify-content-lg-center">
                                                   <a class="btn btn-secondary" href="cart.html">View Cart</a>
                                               </div>
                                           </div>
                                       </div> <!-- end of row -->
                                    </div> <!-- end of user-info -->

                                    <div class="main-dashboard">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                                                <ul class="nav flex-column dashboard-list" role="tablist">
                                                    <li><a class="nav-link active" data-toggle="tab" href="#dashboard">Dashboard</a></li>
                                                    <li> <a class="nav-link" data-toggle="tab" href="#orders">Orders</a></li>
                                                    <li><a class="nav-link" data-toggle="tab" href="#downloads">Downloads</a></li>
                                                    <li><a class="nav-link" data-toggle="tab" href="#address">Addresses</a></li>
                                                    <li><a class="nav-link" data-toggle="tab" href="#account-details">Account details</a></li>
                                                    <li><a class="nav-link" href="login.html">logout</a></li>
                                                </ul> <!-- end of dashboard-list -->
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                <!-- Tab panes -->
                                                <div class="tab-content dashboard-content">
                                                    <div id="dashboard" class="tab-pane fade show active">
                                                        <h3>Dashboard </h3>
                                                        <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a></p>
                                                    </div> <!-- end of tab-pane -->

                                                    <div id="orders" class="tab-pane fade">
                                                        <h3>Orders</h3>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Order</th>
                                                                        <th>Date</th>
                                                                        <th>Status</th>
                                                                        <th>Total</th>
                                                                        <th>Actions</th>                
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>September 10, 2018</td>
                                                                        <td>Processing</td>
                                                                        <td>$25.00 for 1 item </td>
                                                                        <td><a class="btn btn-secondary" href="cart.html">view</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>October 4, 2018</td>
                                                                        <td>Processing</td>
                                                                        <td>$17.00 for 1 item </td>
                                                                        <td><a class="btn btn-secondary" href="cart.html">view</a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div> <!-- end of tab-pane -->

                                                    <div id="downloads" class="tab-pane fade">
                                                        <h3>Downloads</h3>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Product</th>
                                                                        <th>Downloads</th>
                                                                        <th>Expires</th>
                                                                        <th>Download</th>               
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Volga - Ecommerce Bootstrap Template</td>
                                                                        <td>August 10, 2018</td>
                                                                        <td>Never</td>
                                                                        <td><a class="btn btn-secondary" href="#">Download File</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gatcomart - Ecommerce HTML Template</td>
                                                                        <td>September 11, 2018</td>
                                                                        <td>Never</td>
                                                                        <td><a class="btn btn-secondary" href="#">Download File</a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div> <!-- end of tab-pane -->

                                                    <div id="address" class="tab-pane">
                                                       <p>The following addresses will be used on the checkout page by default.</p>
                                                        <h4 class="billing-address">Billing address</h4>
                                                        <a class="btn btn-secondary my-4" href="#">edit</a>
                                                        <p>Pebona Themes</p>
                                                        <p>Bangladesh</p>   
                                                    </div> <!-- end of tab-pane -->

                                                    <div id="account-details" class="tab-pane fade">
                                                        <h3>Account details </h3>
                                                        <div class="login-form">
                                                            <form action="#">
                                                                <div class="form-group row align-items-center">
                                                                    <label class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Title</label>
                                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                        <div class="form-row">
                                                                            <div class="col-6 col-sm-3">
                                                                                <div class="custom-radio">
                                                                                    <input class="form-check-input" type="radio" name="gender" id="male">
                                                                                    <span class="checkmark"></span>
                                                                                    <label class="form-check-label" for="male">Mr.</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6 col-sm-3">
                                                                                <div class="custom-radio">
                                                                                    <input class="form-check-input" type="radio" name="gender" id="female">
                                                                                    <span class="checkmark"></span>
                                                                                    <label class="form-check-label" for="female">Mrs.</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="f-name" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">First Name</label>
                                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                        <input type="text" class="form-control" id="f-name" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="l-name" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Last Name</label>
                                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                        <input type="text" class="form-control" id="l-name" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="email" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Email Address</label>
                                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                        <input type="text" class="form-control" id="email" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputpassword" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Current Password</label>
                                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                        <input type="password" class="form-control" id="inputpassword" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="newpassword" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">New Password</label>
                                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                        <input type="password" class="form-control" id="newpassword" required>
                                                                        <button class="pass-show-btn" type="button">Show</button>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="c-password" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Confirm Password</label>
                                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                        <input type="password" class="form-control" id="c-password" required>
                                                                        <button class="pass-show-btn" type="button">Show</button>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="birth" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Birthdate (Optional)</label>
                                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                        <input type="text" class="form-control" id="birth" placeholder="MM / DD / YYYY" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-check row p-0 mt-5">
                                                                    <div class="col-12 col-sm-12 col-md-8 offset-md-4 col-lg-6 offset-lg-3">
                                                                        <div class="custom-checkbox">
                                                                            <input class="form-check-input" type="checkbox" id="offer">
                                                                            <span class="checkmark"></span>
                                                                            <label class="form-check-label" for="offer">Receive offers from our partners</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-check row p-0 mt-4">
                                                                    <div class="col-12 col-sm-12 col-md-8 offset-md-4 col-lg-6 offset-lg-3">
                                                                        <div class="custom-checkbox">
                                                                            <input class="form-check-input" type="checkbox" id="subscribe" required>
                                                                            <span class="checkmark"></span>
                                                                            <label class="form-check-label" for="subscribe">Sign up for our newsletter<br>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers..</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="register-box d-flex justify-content-end mt-half">
                                                                    <button type="submit" class="btn btn-secondary">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div> <!-- end of tab-pane -->                                        
                                                </div>
                                            </div>
                                        </div> <!-- end of row -->
                                    </div> <!-- end of main-dashboard -->
                                </div> <!-- end of user-dashboard -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of My Account Wrapper -->
        </div>
        <!-- End of Main Content Wrapper -->

        <!-- Start of Footer -->
        <footer id="colophon" class="bgc-secondary pt-full">

            <!-- Footer Widgets Area -->
            <div class="footer-widgets-area">
                <div class="container">
                    <div class="footer-inner">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <aside class="widget-container">
                                    <div class="widget-content">
                                        <div class="footer-logo mb-half">
                                            <img src="assets/images/footer-logo.png" alt="Footer Logo">
                                        </div>
                                        <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                                        <div class="footer-contact">
                                            <p><span>Address:</span>6688Princess Road, London, Greater London BAS 23JK, UK</p>
                                            <p><span>Phone:</span><a href="#">(012) 800 456 789-987</a></p>
                                            <p><span>Email:</span><a href="#">support@example.com</a></p>
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
                                                <li><a href="#">Contact Us</a></li>
                                                <li><a href="#">Login</a></li>
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
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Site Map</a></li>
                                                <li><a href="#">Stores</a></li>
                                                <li><a href="#">Terms &amp; Conditions</a></li>
                                                <li><a href="#">My Account</a></li>
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
                                            <form class="mc-subscribe-form">
                                                <div class="input-group">
                                                    <input type="email" autocomplete="off" placeholder="Your Email Address" required>
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
                                                    <li class="list-inline-item"><a href="#" class="bg-facebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="bg-twitter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="bg-gplus" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="bg-pinterest" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="bg-instagram" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="bg-linkedin" title="Linked In" target="_blank"><i class="fa fa-linkedin"></i></a></li>
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
                            <p class="copyright-text">Copyright © 2018 <a href="#" rel="nofollow">Pebona Themes</a>. All Right Reserved.</p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="footer-payment">
                                <a href="#"><img src="assets/images/icons/payment.png" alt="Payment Icons"></a>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of footer-copyright -->
        </footer>
        <!-- End of Footer -->

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
    <!-- End of Photoswipe -->


    <!-- JS
    ============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/jquery.1.12.4.min.js"></script>

    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>
</html>