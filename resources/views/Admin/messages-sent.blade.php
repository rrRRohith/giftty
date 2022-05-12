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
                        <h1 class="d-inline-block font-weight-normal mb-0">Sent Messages</h1>
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
                                    @if(count($messages))
                                    <table id="usertable" class="table table-center mb-0 ">
                                        <thead>
                                            <tr>

                                                <th>To</th>
                                                <th>Subject</th>
                                                <th>Sent at</th>
                                                 <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($messages as $message)
                                            <tr>
                                                <td>{{$message->recipient->email ?? ''}}</td>
                                                <td>{{$message->subject}}</td>
                                                <td>{{$message->created_at->diffForHumans()}}</td>
                                                <td> <a href="{{ url('admin/messages/'.$message->id.'/delete')}}"
                                                        onclick="javascript:return confirm('Do you want to delete the Message');">
                                                        <i class="fas fa-trash-alt" style="color:red;"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else

                                    <p class="empty">No messages sent</p>

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