
@extends('layouts.main')
@section('content')               
@include('Customer.layouts.sidebar')

    <div id="orders" class="tab-pane fade show active">
        <h3>Orders</h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Order</th>
                        <th>Product</th>
                        <th>Status</th>
                        <th>Total</th>
                        <!-- <th>Actions</th>                 -->
                    </tr>
                </thead>
                <tbody>

                    @if(isset($orders) && count($orders)>0)

                    @php $i=1;@endphp
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{date('F d ,Y',strtotime($order->created_at))}}</td>
                        <td>Delivered</td>
                        <td>$ {{$order->grand_total}} </td>
                        <!-- <td><a class="btn btn-secondary" href="cart.html">view</a></td> -->
                    </tr>
                    @php $i++;@endphp
                    @endforeach

                    @else
                     <tr><th style="text-align: center;color: red;" colspan="4">!! No Orders Found !!</th></tr>
                    @endif  
                </tbody>
            </table>
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