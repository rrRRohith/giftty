
@extends('layouts.main')
@section('content')               
@include('Customer.layouts.sidebar')

    <div id="address" class="tab-pane fade show active">
        @if(session()->has('success'))
                    <div class="alert alert-info alert-dismissible fade show">{{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

        @if(isset($shippingaddress) && count($shippingaddress)>0)
        <p>The following addresses will be used on the checkout page by default.</p>
        @foreach($shippingaddress as $shipping)
        <div class="col-sm-6">
        <div id="ship">
        <h4 class="billing-address">{{$shipping->firstname}} {{$shipping->lastname}}</h4>
        
         <p>{{$shipping->address}}</p>
         <p>{{$shipping->city}} , {{$shipping->province}}</p>
         <p>{{$shipping->postalcode}}</p>
         <a class="btn btn-secondary my-4" href="{{url('customer/editaddress/'.$shipping->id)}}">edit</a>
        </div>
        <!-- <div id="addship" style="display: none;">
          <p><input type="text" value="{{isset($shipping) ? $shipping->firstname: ''}}" name="firstname" class="form-control"></p>
          <p><input type="text" value="{{isset($shipping) ? $shipping->address: ''}}" name="shippingaddress" class="form-control"></p>
          <p><input type="text" value="{{isset($shipping) ? $shipping->address: ''}}" name="shippingaddress" class="form-control"></p>
          <a class="btn btn-secondary my-4" href="#">Save</a>
        </div> -->
        </div>
        @endforeach
        @else
        <p style="color: red">No Address Found.</p>
        <a class="btn btn-secondary my-4" href="{{url('customer/addaddress')}}">Add New</a>
        @endif
     
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