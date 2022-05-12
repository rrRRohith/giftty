
@extends('layouts.main')
@section('content')               
@include('Customer.layouts.sidebar')

                                            
                                                    <div id="dashboard" class="tab-pane fade show active">
                                                        <h3>Dashboard </h3>

                                                        <p>From your account dashboard. you can easily check &amp; view your <a href="{{url('customer/orders')}}">recent orders</a>, manage your <a href="{{url('customer/addresses')}}">shipping and billing addresses</a> and <a href="{{url('customer/account-details')}}">edit your password and account details.</a></p>

                                                    </div> <!-- end of tab-pane -->

                                                                                           
                                                
        <!-- End of Main Content Wrapper -->
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