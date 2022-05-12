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
                            <span class="breadcrumb-item active">Register</span>
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
                                                <h2>Create an Account</h2>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
                                            <div class="registration-form login-form">
                                                <form action="{{url('customer/register')}}" method="post">
                                                    @csrf
                                                    <div class="login-info mb-half">
                                                        <p>Already have an account? <a href="{{url('customer/login')}}">Log in instead!</a></p>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Email Address</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="text" class="form-control" id="email" maxlength="50" name="email" required="" value="{{old('email')}}">
                                                            @if($errors->has('email'))
                                                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>                 
                                                            @endif
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label for="newpassword" class="col-12 col-sm-12 col-md-4 col-form-label"> Password</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="password" class="form-control" maxlength="100" id="newpassword" required="" name="password">
                                                            @if($errors->has('password'))
                                                            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>                 
                                                            @endif
                                                            <!-- <button class="pass-show-btn" type="button">Show</button> -->
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">Confirm Password</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="password" class="form-control" maxlength="100" id="c-password" name="confirm_password" required="">
                                                            <!-- <button class="pass-show-btn" type="button">Show</button> -->
                                                            @if($errors->has('confirm_password'))
                                                            <span class="help-block"><strong>{{ $errors->first('confirm_password') }}</strong></span>                 @endif
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="f-name" class="col-12 col-sm-12 col-md-4 col-form-label">First Name</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="text" class="form-control" id="f-name" maxlength="50" name="firstname" required="" value="{{old('firstname')}}">
                                                            @if($errors->has('firstname'))
                                                            <span class="help-block"><strong>{{ $errors->first('firstname') }}</strong></span>                 
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="l-name" class="col-12 col-sm-12 col-md-4 col-form-label">Last Name</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="text" class="form-control" id="l-name" maxlength="50" name="lastname" required="" value="{{old('lastname')}}">
                                                            @if($errors->has('lastname'))
                                                            <span class="help-block"><strong>{{ $errors->first('lastname') }}</strong></span>                 
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="l-name" class="col-12 col-sm-12 col-md-4 col-form-label">Address</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="text" class="form-control" id="address" maxlength="100" name="address" required="" value="{{old('address')}}">
                                                            @if($errors->has('address'))
                                                            <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>                 
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="phone_number" class="col-12 col-sm-12 col-md-4 col-form-label">Phone Number</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="text" class="form-control" id="phoneno" name="phoneno" required="" value="{{old('phoneno')}}">
                                                            @if($errors->has('phoneno'))
                                                            <span class="help-block"><strong>{{ $errors->first('phoneno') }}</strong></span>                 
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="phone_number" class="col-12 col-sm-12 col-md-4 col-form-label">Province</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <select name="province" class="form-control">
                                                            @foreach($provinces as $province)
                                                            <option value="{{$province->id}}">{{$province->name}}</option>
                                                            @endforeach
                                                            </select>
                                                           
                                                            @if($errors->has('province'))
                                                            <span class="help-block"><strong>{{ $errors->first('province') }}</strong></span>                 
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="phone_number" class="col-12 col-sm-12 col-md-4 col-form-label">City</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="text" class="form-control" id="city" maxlength="50" name="city" required="" value="{{old('city')}}">
                                                            @if($errors->has('city'))
                                                            <span class="help-block"><strong>{{ $errors->first('city') }}</strong></span>                 
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="phone_number" class="col-12 col-sm-12 col-md-4 col-form-label">Postal Code</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="text" class="form-control" id="postalcode" name="postalcode" required="" value="{{old('postalcode')}}">
                                                            @if($errors->has('postalcode'))
                                                            <span class="help-block"><strong>{{ $errors->first('postalcode') }}</strong></span>                 
                                                            @endif
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="register-box d-flex justify-content-end mt-half">
                                                        <button type="submit" class="default-btn tiny-btn">Register</button>
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
@section('bottom-scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script>
$(document).ready(function(){
 $('#phoneno').mask('000-000-0000');
 $('#postalcode').mask('A0A 0A0');
});
</script>
@endsection