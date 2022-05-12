
@extends('layouts.main')
@section('content')               
@include('Customer.layouts.sidebar')

    <div id="account-details" class="tab-pane fade show active">
      <h3>Account details </h3>
        <div class="login-form">
          @if(session()->has('success'))
                    <div class="alert alert-info alert-dismissible fade show">{{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
          <form action="{{url('customer/editprofile')}}" method="post">
              @csrf

              <div class="form-group row">
                  <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Email Address</label>
                  <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                      <input type="text" class="form-control" id="email" name="email" readonly="" value="{{old('email',isset($customer)?$customer->email:'')}}">
                      @if($errors->has('email'))
                      <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>                 
                      @endif
                  </div>
              </div>
              
              <div class="form-group row">
                  <label for="newpassword" class="col-12 col-sm-12 col-md-4 col-form-label"> Password</label>
                  <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                      <input type="password" class="form-control" id="newpassword" name="password">
                      @if($errors->has('password'))
                      <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>                 
                      @endif
                      <!-- <button class="pass-show-btn" type="button">Show</button> -->
                  </div>
              </div>
              <div class="form-group row">
                  <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">Confirm Password</label>
                  <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                      <input type="password" class="form-control" id="c-password" name="confirm_password">
                      <!-- <button class="pass-show-btn" type="button">Show</button> -->
                      @if($errors->has('confirm_password'))
                      <span class="help-block"><strong>{{ $errors->first('confirm_password') }}</strong></span>                 @endif
                  </div>

              </div>
              <div class="form-group row">
                  <label for="f-name" class="col-12 col-sm-12 col-md-4 col-form-label">First Name</label>
                  <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                      <input type="text" class="form-control" id="f-name" name="firstname" required="" value="{{old('firstname',isset($customer)?$customer->firstname:'')}}">
                      @if($errors->has('firstname'))
                      <span class="help-block"><strong>{{ $errors->first('firstname') }}</strong></span>                 
                      @endif
                  </div>
              </div>
              <div class="form-group row">
                  <label for="l-name" class="col-12 col-sm-12 col-md-4 col-form-label">Last Name</label>
                  <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                      <input type="text" class="form-control" id="l-name" name="lastname" required="" value="{{old('lastname',isset($customer)?$customer->lastname:'')}}">
                      @if($errors->has('lastname'))
                      <span class="help-block"><strong>{{ $errors->first('lastname') }}</strong></span>                 
                      @endif
                  </div>
              </div>
              <div class="form-group row">
                  <label for="l-name" class="col-12 col-sm-12 col-md-4 col-form-label">Address</label>
                  <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                      <input type="text" class="form-control" id="address" name="address" required="" value="{{old('address',isset($customer)?$customer->address:'')}}">
                      @if($errors->has('address'))
                      <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>                 
                      @endif
                  </div>
              </div>
              <div class="form-group row">
                  <label for="phone_number" class="col-12 col-sm-12 col-md-4 col-form-label">Phone Number</label>
                  <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                      <input type="text" class="form-control" id="phone_no" name="phoneno" required="" value="{{old('phoneno',isset($customer)?$customer->phone:'')}}">
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
                      <input type="text" class="form-control" id="city" name="city" required="" value="{{old('city',isset($customer)?$customer->city:'')}}">
                      @if($errors->has('city'))
                      <span class="help-block"><strong>{{ $errors->first('city') }}</strong></span>                 
                      @endif
                  </div>
              </div>
              <div class="form-group row">
                  <label for="phone_number" class="col-12 col-sm-12 col-md-4 col-form-label">Postal Code</label>
                  <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                      <input type="text" class="form-control" id="postal_code" name="postalcode" required="" value="{{old('postalcode',isset($customer)?$customer->postalcode:'')}}">
                      @if($errors->has('postalcode'))
                      <span class="help-block"><strong>{{ $errors->first('postalcode') }}</strong></span>                 
                      @endif
                  </div>
              </div>
                          
              <div class="register-box d-flex justify-content-end mt-half">
                  <button type="submit" class="btn btn-secondary">Save</button>
              </div>
          </form>
      </div>
    </div>
@include('Customer.layouts.footer')        
@endsection 
@section('bottom-scripts')
<script type="text/javascript">
    function billing()
    {
      $('#bill').hide();
      $('#addbill').show();  
    }
    function shipping()
    {
      $('#ship').hide();
      $('#addship').show();  
    }
</script>
@endsection       