
@extends('layouts.main')
@section('content')               
@include('Customer.layouts.sidebar')

    <div id="downloads" class="tab-pane fade show active">
        <h3>Downloads</h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Downloads</th>
                        <th>Expires</th>
                        <th>Download</th>               
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Volga - Ecommerce Bootstrap Template</td>
                        <td>August 10, 2018</td>
                        <td>Never</td>
                        <td><a class="btn btn-secondary" href="#">Download File</a></td>
                    </tr>
                    <tr>
                        <td>Gatcomart - Ecommerce HTML Template</td>
                        <td>September 11, 2018</td>
                        <td>Never</td>
                        <td><a class="btn btn-secondary" href="#">Download File</a></td>
                    </tr>
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