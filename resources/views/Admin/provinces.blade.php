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
                        <h1 class="d-inline-block font-weight-normal mb-0">Provinces</h1>

                    </div>
                    <!--  <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                        <a href="{{url('admin/brands/create')}}" class="btn d-block ml-auto btn-primary" role="button"><i
                                class="feather icon-plus mr-2"></i>New Brand</a>

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



                                    <!--  <form action="{{admin('brands/drop')}}" method="post">
                                     @csrf  -->
                                    <table id="usertable" class="table table-center mb-0 ">


                                        <thead>
                                            <tr>



                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Short Code</th>
                                                <th>Country</th>
                                                <!--   <th>Created_at</th> -->


                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($provinces as $province)

                                            <tr>


                                                <td>{{$province->id}}</td>
                                                <td>{{$province->name}}</td>
                                                <td>{{$province->short_code}}</td>

                                                <td>{{$province->country}}</td>
                                                <!--  <td>{{$province->created_at->diffForHumans()}}</td> -->


                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>


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
<script src="{{asset('assets/admin/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/pcoded.min.js')}}"></script>

<script>
$(function() {
    $('#usertable').DataTable();
})
</script>
@endsection