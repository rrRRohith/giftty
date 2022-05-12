@extends('layouts.vendor')
@section('styles')

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
<link rel="stylesheet" href="{{asset('assets/admin/css/plugins/select2.min.css')}}"> -->
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
                    
                    <span><i class="fa fa-edit"></i> Messages - Compose New</span></h1>

                @if(session()->has('message'))
                    {!! session('message') !!}
                @endif

                <div class="content-box">

                    <div class="content-box-body"> 

                        <form action="{{seller('messages/compose')}}"
                            class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">
                           
                            {{ csrf_field() }}
                            <div class="form-group mb-4">
                                <select class="form-control" id="recipient_id" name="recipient_id">
                                    <option value="">Sent To</option>
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}"
                                        <?php echo old('recipient',isset($message) ? $message->recipient_id:'') == $user->id  ? 'selected="selected"':''; ?>>
                                        {!!$user->email!!}
                                    </option>
                                    @endforeach
                                </select>
                                <span class="form-error">{{$errors->first('recipient_id')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" name="subject"
                                    value="{{old('subject',isset($message) ? $message->subject:'')}}" placeholder="Subject" required>
                                <span class="form-error">{{$errors->first('subject')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <textarea rows="10" cols="200" class="ckeditor form-control"
                                    name="body" id="body" required>{{old('body',isset($message) ? $message->body:'')}}</textarea>
                                <span class="form-error">{{$errors->first('body')}}</span>
                            </div>
                            
                            <div class="form-group mb-4">
                                <button class="btn btn-primary mt-3" type="submit">Send Message</button>
                                
                            </div>
                        </form>

                    </div>

                </div><!-- Content box //-->
            </article>

        </div>
    </div><!-- end of row //-->
</section>


@endsection
<!-- [ Main Content ] end -->

@push('bottom-scripts')
<!-- <script src="{{asset('assets/admin/js/plugins/select2.full.min.js')}}"></script> -->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
$(document).ready(function() {
    // [ With Placeholder ]
  
    CKEDITOR.replace( 'body' );
      
});
</script>
@endpush