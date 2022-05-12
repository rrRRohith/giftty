@extends('layouts.seller')

@section('content')
 <div class="login-wrapper">
                                  @if(session()->has('message'))
                                    {!! session('message') !!}
                                    @endif
                <div class="container">

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="user-login">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="section-title">
                                                <!-- <h2>Log in to your account</h2> -->
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 offset-lg-2 offset-xl-3">
                                            <div class="login-form">
                                                <form action="" method="post">
                                                  @csrf
                                                    <div class="form-group row align-items-center mb-4">
                                                        <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Email address</label>
                                                        <div class="col-12 col-sm-12 col-md-8">
                                                            <input type="email" class="form-control" name="email" required placeholder="Email address">
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
            @endsection