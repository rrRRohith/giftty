
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
                            <span class="breadcrumb-item active">My Account</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

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
                                                   <p class="user-name">Hello <span>{{$customer->firstname}} {{$customer->lastname}}</span> <br>(not {{$customer->firstname}} {{$customer->lastname}}? <a class="log-out" href="{{url('customer/logout')}}">Log Out</a>)</p>
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
                                                   <a class="btn btn-secondary" href="{{url('customer/cart')}}">View Cart</a>
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
                                                    <li><a class="nav-link" href="{{url('customer/logout')}}">logout</a></li>
                                                </ul> <!-- end of dashboard-list -->
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                <!-- Tab panes -->
                                                <div class="tab-content dashboard-content">