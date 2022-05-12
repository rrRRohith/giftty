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
                        <h1 class="d-inline-block font-weight-normal mb-0">Colors</h1>

                    </div>
                    <div class="col-sm-6 d-block d-sm-flex align-items-center 
                                justify-content-end mb-4 text-right">
                        <a href="{{url('admin/colors/create')}}" class="btn d-block ml-auto btn-primary" role="button">
                            <i class="feather icon-plus mr-2"></i>New Color</a>
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

                                    @if(count($colors))

                                    <form action="{{admin('colors/drop')}}" method="post">
                                        @csrf
                                        <table id="usertable" class="table table-center mb-0 ">


                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>id</th>
                                                    <th>Name</th>
                                                    <th>Color</th>
                                                    <th>Created_at</th>
                                                    <th class="text-right">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                @foreach($colors as $color)
                                                <tr>
                                                    <td>
                                                        <div class="form-group d-inline">
                                                            <div
                                                                class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                <input type="checkbox" name="checked[ ]"
                                                                    value="{{$color->id}}"
                                                                    id="checkbox-s-{{$color->id}}"
                                                                    class="vendors-for-delete">
                                                                <label for="checkbox-s-{{$color->id}}" class="cr"
                                                                    onclick="checkDrop();"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$color->id}}</td>
                                                    <td>{{$color->name}}</td>
                                                    <td>
                                                        <div
                                                            style="width:30px;height:30px; border-radius:50%;background-color:{{$color->code}};border:1px solid #eee;">
                                                        </div>
                                                    </td>
                                                    <td>{{$color->created_at->diffForHumans()}}</td>
                                                    <td class="text-right">
                                                        <a href="{{ route('colors.edit', $color->id)}}"> <i
                                                                class="far fa-edit"></i></a> &nbsp;
                                                        <a href="{{ url('admin/colors/'.$color->id.'/delete')}}"
                                                            onclick="javascript:return confirm('Do you want to delete the Color');" >
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
                                    <div id="empty-message"><p>Sorry no color exists. <a href="{{admin('colors/create')}}">Create the first color</a></p></div>
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
</script>
@endsection