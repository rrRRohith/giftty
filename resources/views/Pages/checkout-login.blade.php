@extends('layouts.seller')

@section('content')
 <div class="login-wrapper">
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
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-8 col-xl-6">
                                        	
                                                <div class="login-form" style="height:350px;">
	                                            	   @if(session()->has('success'))
					                                   <div class="success-message"><center> {!! session('success') !!}</center></div>
					                                   @endif
					                                   @if(session()->has('error'))
					                                   <div class="success-message"><center> {!! session('error') !!}</center></div>
					                                   @endif 

	                                   	            <h5>Existing User</h5>
		                                            <form action="{{url('/shop/login')}}" method="post">
		                                                  @csrf
		                                                    <div class="form-group row align-items-center mb-4">
		                                                           <div class="col-12 col-sm-12 col-md-12" style="margin-top: 10px;">
		                                                            <input type="email" class="form-control" name="email" required placeholder="Email address">
		                                                        </div>
		                                                    </div>
		                                                    <div class="form-group row align-items-center mb-4">
		                                                       <div class="col-12 col-sm-12 col-md-12">
		                                                            <input type="password" class="form-control" id="c-password" placeholder="Password" name="password" required>     
		                                                        </div>
		                                                    </div>
		                                                    <div class="col text-center">                                             
		                                                      <button type="submit" class="default-btn tiny-btn">Sign In</button>
		                                                  </div>
		                                                    <div class="login-box mt-5 text-center">
		                                                        <p><a href="#">Forgot your password?</a></p>
		                                                        <!-- <button type="submit" class="default-btn tiny-btn mt-4">Sign In</button> -->
		                                                    </div> 
		                                            </form>
                                                 </div>
	                                            
	                                    </div>
	                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"> 
	                                            <div class="login-form"  style="height:350px;"> 

		                                            	<h5>New User</h5>
		                                                <form action="{{url('/shop/guestlogin')}}" method="post">
		                                                  @csrf
		                                                    <div class="form-group row align-items-center mb-4">   
		                                                        <div class="col-12 col-sm-12 col-md-12" style="margin-top: 10px;">
		                                                            <input type="email" class="form-control" name="email" required placeholder="Email address">
		                                                        </div>
                                                            </div> 
                                                             <div class="col text-center">   
		                                                            <button type="submit" class="default-btn tiny-btn mt-4">continue</button>
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