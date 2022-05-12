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
                            <span class="breadcrumb-item active">Contact Us</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper page-about">
            
                @if($errors->count())
                <div class="alert alert-danger alert-dismissable">
                    Sorry some errors in form submission
                </div>
                @endif
              
            <!-- Start of Contact Section -->
            <section class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div id="map_location" class="map-location">
                                <div id="map">
                                    <div id="gmap-wrap">
                                        <div id="gmap">
                                        </div>
                                    </div>
                                </div> <!-- end of #map -->
                            </div> <!-- end of #map_location -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                            <h4>@if(isset($page)){{$page->content}}@endif</h4>
                            <div class="contact-form-wrapper">
                                <div class="section-title left-aligned">
                                    <h2>get In Touch</h2>
                                </div>
                                <form id="contact-form" action="{{url('contact-us')}}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                            <input type="text" name="name" class="form-control" id="com-name" placeholder="Your Name *" >
                                            <span class="form-error">{{$errors->first('name')}}</span>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                            <input type="email" name="email" class="form-control" id="com-email" placeholder="Your Email *">
                                             <span class="form-error">{{$errors->first('email')}}</span>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject">
                                            <span class="form-error">{{$errors->first('subject')}}</span>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                            <textarea id="comment" placeholder="Type Your Message....." name="message" class="form-control"></textarea>
                                            <span class="form-error">{{$errors->first('message')}}</span>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <button name="send_message" type="submit" class="btn btn-secondary">Send Your Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end of contact-form-wrapper -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Contact Section -->

            <!-- Start of Info Section -->
            <section class="info-section pt-full pb-half bgc-offset">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="ion ion-md-locate"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Our Location</h4>
                                    <p>Attn. Customer Service,3-200 Evans Ave,Etobicoke, Ontario, Canada,M8Z 1J7</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="ion ion-ios-call"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Contact Us Anytime</h4>
                                    <p>Mobile: <a href="#">(+1) 416-613-9495</a></p>
                                    <p>Fax: (+1) 800 666 999</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="ion ion-md-mail-open"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Write Some Words</h4>
                                    <p><a href="#">support24/7@gifty.com</a></p>
                                    <p><a href="#">contact@gifty.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Info Section -->

            
        </main>
        <!-- End of Main Content Wrapper -->
        @endsection