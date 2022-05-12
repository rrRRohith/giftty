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
                        <h1 class="d-inline-block font-weight-normal mb-0">Discount</h1>

                    </div>
                    <div class="col-sm-6 d-block d-sm-flex align-items-center 
                                justify-content-end mb-4 text-right">
                        <a href="{{url('admin/discounts/create')}}" class="btn d-block ml-auto btn-primary"
                            role="button">
                            <i class="feather icon-plus mr-2"></i>New Discount</a>
                        <div class="btn-group btn-group-toggle btn-group-link">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">

                                    @if(session()->has('message'))
                                    {!! session('message') !!}
                                    @endif

                                    @if(count($discounts))
                                    <form action="{{admin('discounts/drop')}}" method="post">
                                        @csrf
                                        <table id="usertable" class="table table-center mb-0 ">


                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>id</th>
                                                    <th>Code</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Status</th>
                                                    <th>Created_at</th>
                                                    <th class="text-right">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                             
                                                @foreach($discounts as $discount)
                                                <tr>
                                                    <td>
                                                        <div class="form-group d-inline">
                                                            <div
                                                                class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                <input type="checkbox" name="checked[ ]"
                                                                    value="{{$discount->id}}"
                                                                    id="checkbox-s-{{$discount->id}}"
                                                                    class="vendors-for-delete">
                                                                <label for="checkbox-s-{{$discount->id}}" class="cr"
                                                                    onclick="checkDrop();"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$discount->id}}</td>
                                                    <td>{{$discount->code}}</td>
                                                    <td>{{$discount->start_time}}</td>
                                                    <td>{{$discount->end_time}}</td>


                                                    <td>
                                                        <div class="custom-control custom-switch custom-control-inline"
                                                            style="margin-right:-10px;">
                                                            <input type="checkbox"
                                                                class="custom-control-input input-success"
                                                                id="list_input_featured{{$discount->id}}"
                                                                {{$discount->status ? 'checked':''}}
                                                                onchange="changeStatus('{{$discount->id}}');">
                                                            <label class="custom-control-label"
                                                                id="list_label_featured{{$discount->id}}"
                                                                for="list_input_featured{{$discount->id}}"></label>
                                                        </div>
                                                    </td>
                                                    <td>{{$discount->created_at->diffForHumans()}}</td>
                                                    <td class="text-right">
                                                        <a href="{{route('discounts.edit', $discount->id)}}"> <i
                                                                class="far fa-edit"></i></a> &nbsp;
                                                        <a href="{{ url('admin/discounts/'.$discount->id.'/delete')}}"
                                                            onclick="javascript:return confirm('Do you want to delete the discount coupon');">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <p>
                                            <button type="submit" class="btn btn-danger" disabled id="bulk-delete"><i
                                                    class="fa fa-trash"></i> &nbsp; Delete Selected</button>
                                        </p>
                                    </form>
                                     @else
                                    <div id="empty-message"><p>Sorry no discount exists. <a href="{{admin('discounts/create')}}">Create the Discount</a></p></div>
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

function checkDrop() {
    setTimeout(function() {
        if ($(".vendors-for-delete:checked").length > 0) {
            $("#bulk-delete").removeAttr("disabled");
        } else {
            $("#bulk-delete").attr("disabled", "disabled");
        }
    }, 500);

}

function changeStatus(id) {
    if (id) {
        $.ajax({
            url: "/admin/discounts/" + id + "/status",
            type: 'get',
            data: {},
            success: function(data) {
                console.log(data.status);
            }
        });
    }
}
</script>
@endsection