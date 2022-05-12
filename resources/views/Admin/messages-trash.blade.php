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
                        <h1 class="d-inline-block font-weight-normal mb-0">Deleted Messages</h1>

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
                                    @if(count($deletedMessages))
                                    <table id="usertable" class="table table-center mb-0 ">
                                        <thead>
                                            <tr>

                                                <th>From</th>
                                                <th>Subject</th>
                                             <!--    <th>Deleted at</th> -->

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($deletedMessages as $message)
                                            <tr>
                                             <td>
                                                <i class="fas fa-trash-alt"></i>
                                                 @if($message->sender_id==auth()->user()->id)
                                                  me
                                                @else
                                                {{$message->sender->fullname}}
                                                @endif
                                            </td>
                                              <!--   <td>{{$message->sender->fullname}}</td> -->
                                                <td>{{$message->subject}}</td>
                                              <!--   <td>{{$message->deleted_at}}</td> -->

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else

                                    <p class="empty">No messages deleted</p>

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