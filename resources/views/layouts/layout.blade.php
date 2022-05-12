<!DOCTYPE html>
<html lang="en">

<head>
    <title>Giftty</title>
    @yield('title')
    @yield('metadata')
    @yield('keywords')
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('/favicon-32x32.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{url('admin/css/plugins/daterangepicker.css')}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/app.css')}}">
    <styles>
        @yield('styles')
    </styles>
    <script src="{{asset('assets/admin/js/vendor-all.min.js')}}"></script>
    <scripts>
        @yield('top-scripts')
    </scripts>

</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar dashboard-nav menu-light menupos-fixed ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar ">

                    <li class="nav-item"><a href="{{admin('dashboard')}}" class="nav-link "><span
                                class="pcoded-micon"><i class="fas fa-tachometer-alt"></i></span><span
                                class="pcoded-mtext">Dashboard</span></a></li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-users"></i></span><span class="pcoded-mtext">Vendors</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{admin('vendors')}}">All Vendors</a></li>
                            <li><a href="{{admin('vendors/list/1')}}">Active Vendors</a></li>
                            <li><a href="{{admin('vendors/list/0')}}">Inactive Vendors</a></li>

                            <li><a href="{{admin('vendor-categories')}}">Vendor Categories</a></li>
                            <!--    <li><a href="{{admin('stores')}}">Stores</a></li> -->
                            <li><a href="{{admin('shippings')}}">Shippings</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-blog"></i></span><span class="pcoded-mtext">Manage Site</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{admin('pages')}}"> Manage/Add Pages</a></li>
                            <!--<li><a href="#"> Manage Home Page</a></li>-->
                            <li><a href="{{admin('policies')}}">Manage Policies</a></li>
                            <li><a href="{{admin('faqs')}}">Manage FAQ</a></li>
                            <li><a href="{{admin('sliders')}}">Manage Sliders</a></li>
                            <li><a href="{{admin('provinces')}}"> Provinces</a></li>
                            <li><a href="{{admin('cities')}}">Cities</a></li>
                            <li><a href="{{admin('banners')}}">Manage Banners</a></li>


                        </ul>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-user"></i></span><span
                                class="pcoded-mtext">Products Setup</span></a>
                        <ul class="pcoded-submenu">

                            <li><a href="{{admin('categories')}}"> Product Categories</a></li>
                            <li><a href="{{admin('shopping-categories')}}">Shopping Categories</a></li>
                            <!--      <li><a href="{{admin('brands')}}">Brands</a></li> -->
                            <li><a href="{{admin('colors')}}">Colors</a></li>
                            <li><a href="{{admin('occasions')}}">Occasions</a></li>
                            <li><a href="{{admin('products')}}">Products</a></li>
                            <li><a href="{{admin('product-types')}}">Product type</a></li>

                            <li><a href="{{admin('attributes')}}">Product Attributes</a></li>
                            <li><a href="#">Product Filters</a></li>
                            <li><a href="{{admin('discounts')}}">Discount</a></li>

                        </ul>
                    </li>






                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-blog"></i></span><span class="pcoded-mtext">Blog</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{admin('posts')}}">Blog</a></li>
                            <li><a href="{{admin('topics')}}">Blog Category</a></li>
                        </ul>
                    </li>


                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-user"></i></span><span
                                class="pcoded-mtext">Communication</span></a>
                        <ul class="pcoded-submenu">

                            <li><a href="{{admin('tickets')}}">Tickets</a></li>
                            <li><a href="{{admin('order-supports')}}">Order Support</a></li>
                            <li><a href="{{admin('contacts')}}">Contact Us</a></li>
                            <li><a href="{{admin('send-an-update')}}">Send an Update</a></li>
                            <li><a href="#">Vendor News</a></li>


                        </ul> 
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-cart-arrow-down"></i></span><span
                                class="pcoded-mtext">Orders</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{admin('orders')}}">Orders</a></li>
                            <li><a href="{{admin('orders/list/3')}}">Completed Orders</a></li>
                            <li><a href="{{admin('orders/list/1')}}">Pending Orders</a></li>
                            <li><a href="{{admin('orders/list/0')}}">Cancelled Order</a></li>
                            <li><a href="#">Invoices</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-tachometer-alt"></i></span><span
                                class="pcoded-mtext">Payments</span></a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="far fa-credit-card"></i></span><span class="pcoded-mtext">Reports</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Vendor</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Location</a></li>
                        </ul>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-envelope"></i></span><span class="pcoded-mtext">Messages</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{admin('messages')}}">Inbox</a></li>
                            <li><a href="{{admin('messages/compose')}}">Compose</a></li>
                            <li><a href="{{admin('messages/sent')}}">Sent</a></li>
                            <li><a href="{{admin('messages/trash')}}">Trash</a></li>
                        </ul>
                    </li>


                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-user"></i></span><span
                                class="pcoded-mtext">Users</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{admin('users')}}">Users</a></li>
                            <li><a href="{{admin('customers')}}">Customers</a></li>
                            <li><a href="{{admin('subscribers')}}">Subscribers</a></li>
                            <li><a href="#">Staff</a></li>
                        </ul>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-cog"></i></span><span
                                class="pcoded-mtext">Settings</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{admin('social-medias')}}">Social Medias</a></li>
                            <li><a href="{{admin('navigations')}}">Navigations</a></li>
                            <li><a href="#">Configuration</a></li>
                        </ul>
                    </li>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed ">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="{{admin('/')}}" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{asset('assets/admin/images/logo.png')}}" alt="" class="logo" value="Giftty">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="dropdown-toggle h-drop" href="{{admin('dashboard')}}" data-toggle="dropdown">
                            <i class="feather icon-monitor mx-2"></i>
                            <span class="d-none d-sm-inline-block">Dashboard</span>
                        </a>

                    </div>
                </li>
                <li class="nav-item d-inline-block d-md-none">
                    <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                    <div class="search-bar">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search here">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
                <li class="nav-item h-auto d-none d-md-inline-block">
                    <div class="input-group search-form">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent"><i class="feather icon-search"></i></span>
                        </div>
                        <input type="text" class="form-control nav-search" placeholder="Search">
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="icon feather icon-bell"></i>
                            <span class="badge badge-circular badge-danger">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <!-- <ul class="noti-body">
										<li class="n-title">
											<p class="m-b-0">NEW</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="{{url('admin/images/user/avatar-1.jpg')}}" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Admin</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
													<p>New ticket Added</p>
												</div>
											</div>
										</li>
										<li class="n-title">
											<p class="m-b-0">EARLIER</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="{{url('admin/images/user/avatar-2.jpg')}}" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="{{url('admin/images/user/avatar-1.jpg')}}" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
													<p>currently login</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="{{url('admin/images/user/avatar-2.jpg')}}" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div> -->
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              @php $user=Auth::user(); @endphp
                            <img src="{{old('picture',isset($user) && $user->picture != '' ? asset('images/user/'.$user->id.'/'.$user->picture):asset('images/user/dummy-image.jpg'))}}" class="img-radius"
                                alt="User-Profile-Image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <ul class="pro-body">
                                <li><a href="{{url('admin/profile')}}" class="dropdown-item"><i
                                            class="feather icon-user"></i> Profile</a></li>
                                <li><a href="{{admin('messages')}}" class="dropdown-item"><i
                                            class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="{{url('admin/logout')}}" class="dropdown-item"><i
                                            class="feather icon-lock"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->




    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content container">

            @yield('content')

        </div>
    </div>

    <!--[Main Content ] end-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{asset('assets/admin/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/pcoded.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/plugins/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/plugins/moment.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/plugins/daterangepicker.js')}}"></script>


    <script>
    $(function() {
        $(function() {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#dashboardtaskreportrange2 span').html(start.format('MMMM D, YYYY') + ' - ' + end
                    .format('MMMM D, YYYY'));
            }
            $('#dashboardtaskreportrange2').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
                        .subtract(1, 'month').endOf('month')
                    ]
                }
            }, cb);
            cb(start, end);
        });
    });
    $(function() {
        var options = {
            chart: {
                height: 220,
                type: 'bar',
                stacked: true,
                toolbar: {
                    show: false,
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '30%',
                    endingShape: 'rounded'
                },
            },
            colors: ['#2DCA73', '#d7dfe9'],
            series: [{
                name: 'PRODUCT A',
                data: [10, 12, 15, 10, 8]
            }, {
                name: 'PRODUCT B',
                data: [18, 16, 13, 18, 20]
            }],
            dataLabels: {
                enabled: false,
            },
            xaxis: {
                categories: ['MON', 'Tue', 'Wed', 'Thu', 'Fri'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                }
            },
            grid: {
                show: false,
            },
            yaxis: {
                show: false,
            },
            legend: {
                show: false,
            },
            fill: {
                opacity: 1
            },
        }
        var chart = new ApexCharts(document.querySelector("#dashboardtastbar6"), options);
        chart.render();
    });
    $(function() {
        var options = {
            chart: {
                height: 220,
                type: 'bar',
                stacked: true,
                toolbar: {
                    show: false,
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '30%',
                    endingShape: 'rounded'
                },
            },
            colors: ['#FFB800', '#d7dfe9'],
            series: [{
                name: 'PRODUCT A',
                data: [8, 10, 12, 15, 10]
            }, {
                name: 'PRODUCT B',
                data: [20, 18, 16, 13, 18]
            }],
            dataLabels: {
                enabled: false,
            },
            xaxis: {
                categories: ['MON', 'Tue', 'Wed', 'Thu', 'Fri'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                }
            },
            grid: {
                show: false,
            },
            yaxis: {
                show: false,
            },
            legend: {
                show: false,
            },
            fill: {
                opacity: 1
            },
        }
        var chart = new ApexCharts(document.querySelector("#dashboardtastbar5"), options);
        chart.render();
    });
    $(function() {
        var options = {
            chart: {
                height: 220,
                type: 'bar',
                stacked: true,
                toolbar: {
                    show: false,
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '30%',
                    endingShape: 'rounded'
                },
            },
            colors: ['#FF0B37', '#FFB800', '#d7dfe9'],
            series: [{
                name: 'PRODUCT A',
                data: [13, 13, 13, 13, 13]
            }, {
                name: 'PRODUCT B',
                data: [15, 15, 15, 15, 15]
            }, {
                name: 'PRODUCT c',
                data: [20, 20, 20, 20, 20]
            }],
            dataLabels: {
                enabled: false,
            },
            xaxis: {
                categories: ['MON', 'Tue', 'Wed', 'Thu', 'Fri'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                }
            },
            grid: {
                show: false,
            },
            yaxis: {
                show: false,
            },
            legend: {
                show: false,
            },
            fill: {
                opacity: 1
            },
        }
        var chart = new ApexCharts(document.querySelector("#dashboardtastbar4"), options);
        chart.render();
    });
    $(function() {
        var options = {
            chart: {
                height: 200,
                type: 'donut',
                sparkline: {
                    enabled: true
                },
            },
            series: [44, 55, 41, 17, 15],
            colors: ["#4680ff", "#0e9e4a", "#00acc1", "#ffa21d", "#ff5252"],
            legend: {
                show: false,
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '85%',
                        labels: {
                            show: true,
                            name: {
                                show: true
                            },
                            value: {
                                show: true
                            }
                        }
                    }
                }
            },
            dataLabels: {
                enabled: false
            },
        }
        var chart = new ApexCharts(document.querySelector("#taskfull-dashboard-chart2"), options);
        chart.render();
    });
    $(function() {
        var options = {
            chart: {
                height: 200,
                type: 'donut',
                sparkline: {
                    enabled: true
                },
            },
            series: [44, 55, 41, 17, 15],
            colors: ["#4680ff", "#0e9e4a", "#00acc1", "#ffa21d", "#ff5252"],
            legend: {
                show: false,
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '85%',
                        labels: {
                            show: true,
                            name: {
                                show: true
                            },
                            value: {
                                show: true
                            }
                        }
                    }
                }
            },
            dataLabels: {
                enabled: false
            },
        }
        var chart = new ApexCharts(document.querySelector("#taskfull-dashboard-chart1"), options);
        chart.render();
    });
    $(function() {
        var options = {
            chart: {
                type: 'radialBar',
                offsetY: -20,
                sparkline: {
                    enabled: true
                },
            },
            plotOptions: {
                radialBar: {
                    startAngle: -90,
                    endAngle: 90,
                    track: {
                        background: "#D7DFE9",
                        strokeWidth: '97%',
                        margin: 5, // margin is in pixels
                        shadow: {
                            enabled: true,
                            top: 2,
                            left: 0,
                            color: '#999',
                            opacity: 1,
                            blur: 2
                        }
                    },
                    dataLabels: {
                        value: {
                            offsetY: -40,
                            fontSize: '22px'
                        }
                    }
                }
            },
            colors: ['#FFB800'],
            fill: {
                type: 'solid',
            },
            series: [65],
            labels: ['open tasks'],
        }
        var chart = new ApexCharts(document.querySelector("#opentask-taskchart1"), options);
        chart.render();
    });
    $(function() {
        var options = {
            chart: {
                type: 'radialBar',
                offsetY: -20,
                sparkline: {
                    enabled: true
                },
            },
            plotOptions: {
                radialBar: {
                    startAngle: -90,
                    endAngle: 90,
                    track: {
                        background: "#D7DFE9",
                        strokeWidth: '97%',
                        margin: 5, // margin is in pixels
                        shadow: {
                            enabled: true,
                            top: 2,
                            left: 0,
                            color: '#999',
                            opacity: 1,
                            blur: 2
                        }
                    },
                    dataLabels: {
                        value: {
                            offsetY: -40,
                            fontSize: '22px'
                        }
                    }
                }
            },
            colors: ['#ff0b37'],
            fill: {
                type: 'solid',
            },
            series: [65],
            labels: ['overdue tasks'],
        }
        var chart = new ApexCharts(document.querySelector("#opentask-taskchart2"), options);
        chart.render();
    });
    $(function() {
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#dashboarddatepicker1 span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                'MMMM D, YYYY'));
        }
        $('#dashboarddatepicker1').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                    'month').endOf('month')]
            }
        }, cb);
        cb(start, end);
    });
    </script>

    <scripts>
        @yield('bottom-scripts')
    </scripts>
</body>

</html>