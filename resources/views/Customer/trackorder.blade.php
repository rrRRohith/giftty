
@extends('layouts.main')
@section('content')               
@include('Customer.layouts.sidebar')

    <div id="address" class="tab-pane fade show active">
       <h4 class="billing-address">Track My Order</h4>

        <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your reciept and in the confirmation email you should have received.</p>
       
        <form method="post" action="{{url('customer/track-my-order')}}">
          @csrf
       
        <div id="addship">
          <p><input type="text" value="{{old('orderno')}}" name="orderno" class="form-control" placeholder="Order Number"></p>
          @if($errors->has('orderno'))
            <span class="help-block"><strong>{{ $errors->first('orderno') }}</strong></span>          
          @endif

          <br>
          <p><input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="Email used On Checkout"></p>
          @if($errors->has('email'))
            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>          
          @endif
          <br>
          
          <button class="btn btn-secondary my-4" type="submit">Track</button>
        </div>
      </form>
        
        
     
    </div>
@include('Customer.layouts.footer')        
@endsection 
     