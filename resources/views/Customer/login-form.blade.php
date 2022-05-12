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
                            <span class="breadcrumb-item active">Login</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->

        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Login Wrapper -->
            <div class="login-wrapper">
                                
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="user-login">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="section-title">
                                                <h2>Log in to your account</h2>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->
                                    @if(session()->has('success'))
                                   <div class="success"><center> {!! session('success') !!}</center></div>
                                    @endif
                                   @if(session()->has('error'))
                                   <div class="success"><center> {!! session('error') !!}</center></div>
                                    @endif   

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 offset-lg-2 offset-xl-3">
                                            <div class="login-form">
                                                <form action="{{url('customer/login')}}" method="post">
                                                  @csrf
                                                    <div class="form-group row align-items-center mb-4">
                                                        <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Email address</label>
                                                        <div class="col-12 col-sm-12 col-md-8">
                                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-4">
                                                        <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">Password</label>
                                                        <div class="col-12 col-sm-12 col-md-8">
                                                            <input type="password" class="form-control" id="c-password" placeholder="Password" name="password" required>
                                                           <!--  <button class="pass-show-btn" type="button">Show</button> -->
                                                        </div>
                                                    </div>
                                                    <div class="login-box mt-5 text-center">
                                                        <p><a href="#">Forgot your password?</a></p>
                                                        <button type="submit" class="default-btn tiny-btn mt-4">Sign In</button>
                                                    </div>
                                                    <div class="text-center mt-half pt-half top-bordered">
                                                        <p>No account? <a href="{{url('customer/register')}}">Create one here</a>.</p>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of user-login -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Login Wrapper -->
        </div>
        <!-- End of Main Content Wrapper -->



@endsection