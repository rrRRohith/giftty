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
                            <span class="breadcrumb-item active">About Us</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper page-about">
            
            <!-- Start of About US Section -->
            <section class="about-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-7 col-lg-6">
                            <div class="content-wrapper">
                                <div class="section-title left-aligned">
                                    <h2>Welcome To Gifty Store!</h2>
                                </div>
                                @if(isset($page))<p class="lead">{{$page->content}}</p>@else
                                <p>The theme design package provides a complete Magento theme set for your online store according to your desired theme. This includes all Magento themes that are required for your online store's successful implementation.</p>
                                <a class="default-btn" href="{{url('/')}}">Shop now!</a>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-6">
                            <div class="overview-img text-center">
                                <a href="#">
                                    @if(isset($page))<img src="{{asset('images/page/'.$page->id.'/'.$page->picture)}}"> @else<img src="assets/images/about/about.jpg" alt="About Us">@endif
                                </a>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of About US Section -->

            

           


            

            
        </main>
        <!-- End of Main Content Wrapper -->
         @endsection