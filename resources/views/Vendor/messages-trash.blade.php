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
                    
                    <span><i class="fa fa-trash"></i> Messages - Trash</span></h1>

                @if(session()->has('message'))
                    {!! session('message') !!}
                @endif

                <div class="content-box">

                    <div class="table-responsive">

                        @if(count($deletedMessages))
                        <table id="usertable" class="table table-center mb-0 ">
                            <thead>
                                <tr>
                                  <!--   <th>#</th> -->
                                    <th>From</th>
                                    <th>Subject</th>
                                    
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
                                   <!--  <td>{{$message->sender->fullname}}</td> -->
                                    <td>{{$message->subject}}</td>
                                 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p class="empty-message">No messages deleted</p>
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