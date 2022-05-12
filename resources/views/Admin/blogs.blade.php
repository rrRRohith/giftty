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
                        <h1 class="d-inline-block font-weight-normal mb-0">Blogs</h1>
                      
                    </div>
                    <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                        <a href="#" class="btn d-block ml-auto btn-primary" role="button"><i
                                class="feather icon-plus mr-2"></i>New Blog</a>

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
                               
                                    <table id="usertable" class="table table-center mb-0 ">


                                        <thead>
                                            <tr>

                                                <th>id</th>
                                                <th>Title</th>
                                                <th>Body</th>
                                                <th>Status</th>
                                                <th>Created_at</th>
                                                <th class="text-right">Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                              
                                            @foreach($blogs as $blog)
                                            <tr>
                                                <td>{{$blog->id}}</td>
                                                <td>{{$blog->title}}</td> 
                                                <td>{{$blog->body}}</td>    
                                                 <td>
                                                    <div class="custom-control custom-switch custom-control-inline" style="margin-right:-10px;">
                                                        <input type="checkbox" class="custom-control-input input-success" id="list_input_featured{{$blog->id}}" 
                                                        {{$blog->status ? 'checked':''}} onchange="changeStatus('{{$blog->id}}');">
                                                        <label class="custom-control-label" id="list_label_featured{{$blog->id}}" for="list_input_featured{{$blog->id}}" ></label>
                                                    </div>
                                                </td>

                                                <td>{{$blog->created_at->diffForHumans()}}</td>
                                                <td class="text-right">
                                                <a href="#"> <i class="far fa-edit"></i></a> &nbsp; 
                                                 <a href="#" onclick="javascript:return confirm('Do you want to delete the Policy')";>
                                                 <i class="fas fa-trash-alt"></i></a>
                                                </td>
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

 $(function(){
    $('#usertable').DataTable();
 })

 
</script>
@endsection