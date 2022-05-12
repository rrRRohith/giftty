<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giftty</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">


    <!-- CSS files
    ============================================ -->

    <!-- Boostrap stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pe-icon-7-stroke.css')}}">

    <!-- Plugins stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">

    <!-- Master stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <!-- modernizr JS
    ============================================ -->
    <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
    <![endif]-->

    <!-- Start of Whole Site Wrapper with mobile menu support -->
    <div id="whole" class="whole-site-wrapper">

        <!-- Start of Header -->
        <header class="header bgc-white header-type-1">
			@include('layouts.includes.header')
        </header>
        <!-- End of Header -->

        <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper">
            @yield('content')
        </main>
        <!-- End of Main Content Wrapper -->

        <!-- Start of Footer -->
        <footer id="colophon" class="bgc-secondary pt-full">
            @include('layouts.includes.footer')
        </footer>
        <!-- End of Footer -->


    </div>
    <!-- End of Whole Site Wrapper -->
    
    
    @include('layouts.includes.scripts')
</body>
</html>