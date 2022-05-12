@extends('layouts.vendor')

@section('styles')
<link rel="stylesheet" href="{{asset('assets/admin/css/plugins/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')

<section id="vendor-page">
    <div class="row">
        <div class="col-sm-2">
          <aside>
            <nav>
                <h3>Folders</h3>
                <ul>
                    <li><a href="{{url('seller/messages')}}"><i class="fa fa-inbox"></i> Inbox</a></li>
                    <li><a href="{{url('seller/messages/compose')}}"><i class="fa fa-edit"></i> Compose</a></li>
                    <li><a href="{{url('seller/messages/sent')}}"><i class="fa fa-paper-plane"></i> Sent</a></li>
                    <li><a href="{{url('seller/messages/trash')}}"><i class="fa fa-trash"></i>Trash</a></li>
                </ul>
                
            </nav>
          </aside>
        </div>
        <div class="col-sm-10">
            <article>
                 <h1>
                    
                    <span><i class="fa fa-paper-plane"></i> Messages - Sent</span></h1>

                @if(session()->has('message'))
                    {!! session('message') !!}
                @endif

                <div class="content-box">

                    <div class="table-responsive">

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
                                    <td>{{$message->recipient->email}}</td>
                                    <td>{{$message->subject}}</td>
                                    <td>{{$message->created_at->diffForHumans()}}</td>
                                    <td class="text-right">
                                        <a href="{{ url('seller/messages/'.$message->id.'/delete')}}" onclick="javascript:return confirm('Do you want to delete the Message');" class="btn btn-deafult">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                     </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else

                        <p class="empty-message">No messages sent!</p>

                        @endif

                    </div>

                </div><!-- Content box //-->
            </article>
        </div>
    </div><!-- end of row //-->
</section>

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