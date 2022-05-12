<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giftty</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}">

    <!-- CSS files
    ============================================ -->

    <!-- Boostrap stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/app.css')}}">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />

    <!-- modernizr JS
    ============================================ -->
    <script src="{{asset('assets/vendor/js/modernizr-2.8.3.min.js')}}"></script>
   
</head>

<body>

    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
    <![endif]-->

    <!-- Start of Whole Site Wrapper with mobile menu support -->
    <div id="whole" class="whole-site-wrapper">

 

        <!-- Start of Header -->
        <header class="header bgc-white header-type-1">
           
            <div class="header-area" id="vendor-header">
                <div class="container">
                    <div class="row">
                  
                        <div class="col-sm-6">
                            <div class="logo">
                                <a href="http://dev.giftty.ca/">
                                    <img src="{{asset('assets/images/logo.png')}}" alt="Logo" class="img-fluid" id="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!--
                                <ul class="list-inline">
                                    <li class="top-links list-inline-item">
                                        <div class="btn-group">
                                            <button class="btn-link dropdown-toggle"><i class="pe-7s-config"></i></button>
                                            <div class="dropdown-menu">
                                                <ul>
                                                   <li><a href="{{url('seller/profile')}}">Profile</a></li>
                                                   <li><a href="{{url('seller/change-password')}}">Settings</a></li>
                                                   <li><a href="{{url('seller/logout')}}">Logout</a></li>
                                               
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            //-->
                        </div>
                    </div>
                </div> <!-- end of container -->
            </div> <!-- end of header-top -->

            <div id="vendor-navigation">
              <div class="container">
                <nav>
                  <ul>
                    <li class="@if(!isset(request()->segments()[1])) active @endif">
                      <a href="{{url('seller')}}"><i class="fa fa-tachometer-alt"></i><span>Dashboard</span></a>
                    </li>
                    <li class="@if(array_search('store',request()->segments())) active @endif">
                      <a href="{{url('seller/store/edit')}}" ><i class="fa fa-store-alt"></i><span>Store</span></a>
                    </li>
                    <li class="@if(array_search('products',request()->segments())) active @endif">
                      <a href="{{url('seller/products')}}"><i class="fa fa-gift"></i><span>Products</span></a>
                    </li>
                    <li class="@if(array_search('orders',request()->segments())) active @endif">
                      <a href="{{url('seller/orders')}}"><i class="fa fa-shopping-cart"></i><span>Orders</span></a>
                    </li>
                    <li class="@if(array_search('payments',request()->segments())) active @endif">
                      <a href="{{url('seller/payments')}}"><i class="fa fa-money-bill-wave"></i><span>Payments</span></a>
                    </li>
                    <li class="@if(array_search('reports',request()->segments())) active @endif">
                      <a href="{{url('seller/reports')}}"><i class="fa fa-file-pdf"></i><span>Reports</span></a>
                    </li>
                    <li class="@if(array_search('messages',request()->segments())) active @endif">
                      <a href="{{url('seller/messages')}}"><i class="fa fa-envelope"></i><span>Messages</span></a>
                    </li>
                   
                    <li  class="@if(array_search('profile',request()->segments())) active @endif">
                      <a href="{{url('seller/profile')}}"><i class="fa fa-cog"></i><span>Settings</span></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div><!-- Vendor Navigation //-->

        </header>
        <!-- End of Header -->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper">
          <div class="container">
              
                @yield('content')

          </div> <!-- end of container -->
        </main>
        <!-- End of Main Content Wrapper -->

        <!-- Start of Footer -->
        <footer id="colophon" class="bgc-secondary pt-full vendorfooter_section">
            <div class="footer-copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <p class="copyright-text text-center">&copy; {{date('Y')}} Giftty.ca. All rights are reserved.</p>
                        </div>
                        <!--<div class="col-12 col-sm-12 col-md-6 col-lg-6">-->
                        <!--    <div class="footer-payment">-->
                        <!--        <a href="#"><img src="{{asset('assets/images/icons/payment.png')}}" alt="Payment Icons"></a>-->
                        <!--    </div>-->
                        <!--</div>-->
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
   
    <!-- JS
    ============================================ -->

    <!-- jQuery JS -->
    <script src="{{asset('assets/vendor/js/jquery.1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/plugins.js')}}"></script>
    <script src="{{asset('assets/vendor/js/main.js')}}"></script>
    @stack('bottom-scripts')
</body>
</html>