@extends('layouts.vendor')
@section('content')
<section id="vendor-page">
    <div class="row">
        <div class="col-sm-3">
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
        <div class="col-sm-9">

                <article>
                    <h1> View Messages</h1>
                 @if(session()->has('message'))
                    {!! session('message') !!}
                @endif
                   <div class="col-xl-10 col-md-9">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="d-inline-block m-0">Subject:{{$message->subject}}</h6>
                                <p class="float-right m-0"><strong>{{$message->created_at->diffForHumans()}}</strong></p>
                            </div>
                            <div class="card-body">
                                <div class="email-read">
                                    <div class="photo-table m-r-10">
                                        <!--     <a href="#">
                                            <img class="media-object img-radius" src="assets/images/user/avatar-1.jpg" alt="E-mail user" style="width:50px;">
                                        </a> -->
                                    </div>
                                    <div>
                                        <a href="#">
                                            <p class="user-name text-dark mb-1"><strong>{{$message->sender->fullname}}</strong></p>
                                        </a>
                                        <a class="user-mail txt-muted" href="#">
                                            <p class="user-name text-dark mb-1"><strong>From : {{$message->sender->email}}</strong></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="m-b-20 m-l-50 p-l-10 email-contant">
                                    <div class="photo-contant">
                                        <hr/>
                                        <div class="email-content">
                                                {!!$message->body_html!!}
                                        </div>
                                        <hr/>
                                        <a href="{{url('seller/messages/reply')}}" id="send-reply" class="btn btn-dark"><i class="fa fa-reply"></i> Reply</a> <a href="{{ url('seller/messages/'.$message->id.'/deleteInbox')}}" class="btn btn-dark" onclick="confirm('Are you sure to delete?');"><i class="fa fa-trash"></i>  Delete</a> <a href="{{url('seller/messages')}}" class="btn btn-dark"><i class="fa fa-envelope"></i>  Back to Inbox</a>
                               
                                        <div class="m-t-15">
                                            <form action="{{seller('messages/reply')}}" method="post" enctype="multipart/form-data"
                                                class="form-material" id="reply-form" style="display:none;">

                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{$message->id}}" name="id">
                                                <input type="hidden" value="{{$message->sender_id}}" name="sender_id">
                                                <input type="hidden" value="{{$message->recipient_id}}" name="recipient_id">
                                                <input type="hidden" value="{{$message->subject}}" name="subject">

                                                <div class="form-group">
                                                    <textarea rows="10" cols="100" name="reply_body" id="reply" class="form-control ckeditor"
                                                        placeholder="Reply" required>
                                                    </textarea>
                                                </div>
                                                <button class="btn btn-primary  float-right" id="reply-button" type="submit">Send Reply</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div><!-- end of row //-->
</section>
@endsection
@push('bottom-scripts')
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
$(document).ready(function(){
  $("#reply-button").click(function(){
   $("#reply").toggle();
   CKEDITOR.replace( 'reply' );
  });
  $("#reply").hide();

  $("#send-reply").click(function(e){
    e.preventDefault();
    $("#reply-form").removeAttr("style");
  })

});
</script>
@endpush

