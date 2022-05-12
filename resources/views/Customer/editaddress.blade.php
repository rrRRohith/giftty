
@extends('layouts.main')
@section('content')               
@include('Customer.layouts.sidebar')

    <div id="address" class="tab-pane fade show active">
       <h4 class="billing-address">{{isset($address)?'Edit':'Add'}} delivery Address</h4>
       
        <form method="post" action="{{url('customer/editaddress')}}">
          @csrf
       <input type="hidden" name="id" value="{{isset($address)?$address->id:''}}">
        <div id="addship">
          <p><input type="text" value="{{old('firstname',isset($address)?$address->firstname:'')}}" name="firstname" class="form-control" placeholder="First Name"></p>
          @if($errors->has('firstname'))
            <span class="help-block"><strong>{{ $errors->first('firstname') }}</strong></span>          
          @endif

          <br>
          <p><input type="text" value="{{old('lastname',isset($address)?$address->lastname:'')}}" name="lastname" class="form-control" placeholder="Last Name"></p>
          @if($errors->has('lastname'))
            <span class="help-block"><strong>{{ $errors->first('lastname') }}</strong></span>          
          @endif
          <br>
          <p><input type="text" value="{{old('address',isset($address)?$address->address:'')}}" name="address" class="form-control" placeholder="Address"></p>
          @if($errors->has('address'))
            <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>          
          @endif
          <br>
          <p><input type="text" value="{{old('city',isset($address)?$address->city:'')}}" name="city" class="form-control" placeholder="City"></p>
          @if($errors->has('city'))
            <span class="help-block"><strong>{{ $errors->first('city') }}</strong></span>          
          @endif
          <br>
          <p><select name="province" class="form-control">
            <option value="">Select Province</option>
            @foreach($provinces as $province)
            <option value="{{$province->short_code}}" @if(isset($address))@if($province->short_code==$address->province) selected @endif @endif>{{$province->name}}</option>
            @endforeach
          </select></p>
          @if($errors->has('province'))
            <span class="help-block"><strong>{{ $errors->first('province') }}</strong></span>          
          @endif
          <br>
          <p><input type="text" value="{{old('postalcode',isset($address)?$address->postalcode:'')}}" name="postalcode" class="form-control" placeholder="Postalcode"></p>
          @if($errors->has('postalcode'))
            <span class="help-block"><strong>{{ $errors->first('postalcode') }}</strong></span>          
          @endif
          <br>
          <button class="btn btn-secondary my-4" type="submit">Save</button>
        </div>
      </form>
        
        
     
    </div>
@include('Customer.layouts.footer')        
@endsection 
     