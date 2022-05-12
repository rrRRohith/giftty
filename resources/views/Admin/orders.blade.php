@extends('layouts.layout')

@section('styles')
<link rel="stylesheet" href="{{asset('assets/admin/css/plugins/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content container">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Dashboard ] start -->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6 d-flex align-items-center mb-4">
                        <h1 class="d-inline-block font-weight-normal mb-0">
                        @if(isset($status))
                             @if($status==1) 
                                 Pending Orders 
                             @elseif($status==3)
                                 Completed Orders
                             @else
                                 Cancelled Orders
                             @endif

                        @else All Orders 
                        @endif 
                        </h1>

                    </div>
                    <!-- <div class="col-sm-6 d-block d-sm-flex align-items-center 
                                justify-content-end mb-4 text-right">
                        <a href="{{url('admin/colors/create')}}" class="btn d-block ml-auto btn-primary" role="button">
                            <i class="feather icon-plus mr-2"></i>New Color</a>
                        <div class="btn-group btn-group-toggle btn-group-link">
                        </div>
                    </div> -->

                </div>
                <div class="row">
                    <div class="col-sm-12">


                        <div class="card">
                            <div class="card-body">


                                <div class="table-responsive">

                                    @if(session()->has('message'))
                                    {!! session('message') !!}
                                    @endif

                                    @if(isset($orders) && count($orders) > 0)
                                    <!-- <form action="{{admin('colors/drop')}}" method="post">
                                        @csrf -->
                                    <table id="usertable" class="table table-center mb-0 ">
                                        <thead>
                                            <tr>
                                                <!--   <th></th> -->
                                                <th>id</th>
                                                <th>Date</th>
                                                <!--<th>Name</th>-->
                                                <th>Total</th>
                                                <th>Status</th>
                                                <!-- <th class="text-right">Action</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <!-- <td>
                                                    <div class="form-group d-inline">
                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                            <input type="checkbox" name="checked[ ]"
                                                                value="{{$order->id}}" id="checkbox-s-{{$order->id}}"
                                                                class="vendors-for-delete">
                                                            <label for="checkbox-s-{{$order->id}}" class="cr"
                                                                onclick="checkDrop();"></label>
                                                        </div>
                                                    </div>
                                                </td> -->
                                                <td>{{$order->id}}</td>
                                                <td>{{date('F d ,Y',strtotime($order->created_at))}}</td>
                                               
                                             
                                                <td>${{$order->grand_total}} </td>
                                                <td>
                    							   @foreach($statuses as $s)
                                                            @if($order->status==$s->id)
                                                                @if($order->status == '0' && $s->id =='0')
                                                                  <span class="text-primary">   {{$s->name}}
                                                                @elseif($order->status == '1' && $s->id =='1')
                                                                  <span class="text-warning">   {{$s->name}}
                                                                @elseif($order->status == '2' && $s->id =='2')
                                                                   <span class="text-info">   {{$s->name}}
                                                                @elseif($order->status == '3' && $s->id =='3')
                                                                  <span class="font-weight-bold">  {{$s->name}}    
                                                                    
                                                                @elseif($order->status == '4' && $s->id =='4')
                                                                    <span class="text-success"> {{$s->name}}    
                                                                @else
                                                                    <span class="text-danger">
                                                            
                                                                {{$s->name}}
                                                                    @endif
                                                                </span>
                                                            @endif
                                                        @endforeach 
						 
						                     	</td>
                                                
                                                <td>
                                                    <form action="{{url('admin/orders/'.$order->id.'/edit')}}" method="post">
                                                        @csrf
                                                        <div>
                                                            <select  name="status" style="width:125px;">
                                                                <option value="0">Cancelled </option>
                                                                <option value="1">Pending</option>
                                                                <option value="2">Processing</option>
                                                                <option value="3">Completed</option>
                                                                <option value="4">Dispute</option>
                                                                <option value="-1">Deleted</option>
                                                            </select>
                                                              <button type="submit">Update</button>
                                                         </div>
                                                       
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- <p>
                                        <button type="submit" class="btn btn-danger" disabled id="bulk-delete"><i
                                                class="fa fa-trash"></i> &nbsp; Delete Selected</button>
                                    </p> -->
                                    </form>

                                    @else
                                    <div id="empty-message">
                                        <p>Sorry no orders</p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- [ Dashboard ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</div>
@endsection
@section('bottom-scripts')
<!-- datatable Js -->
<script src="{{asset('assets/admin/js/plugins/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/dataTables.bootstrap4.min.js')}}"></script>

<script>
$(function() {
    $('#usertable').DataTable();
})


</script>
@endsection