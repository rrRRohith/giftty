@extends('layouts.layout')
@section('styles')
<!-- <link rel="stylesheet" href="croppie.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
<link rel="stylesheet" href="{{asset('assets/admin/css/plugins/select2.min.css')}}">
@endsection
@section('content')
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content container">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Sidebar Forms ] start -->
            <div class="col-lg-12">
                @if($errors->count())
                <div class="alert alert-danger alert-dismissable">
                    Sorry some errors in form submission
                </div>
                @endif
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif

            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-4"> @if(isset($message)) Edit Message @else New Message @endif </h5>
                    <form
                        action="@if(isset($message)){{admin('messages/'.$message->id)}}@else{{admin('messages')}}@endif"
                        class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">
                        @if(isset($message)) @method('PUT') @endif
                        {{ csrf_field() }}
                        <div class="form-group mb-4">
                            <select class="js-example-placeholder-multiple form-control" name="recipient">
                                <option value="">To</option>
                                @foreach($users as $user)
                                <option value="{{$user->id}}"
                                    <?php echo old('recipient',isset($message) ? $message->recipient:'') == $user->id  ? 'selected="selected"':''; ?>>
                                    {!!$user->email!!}
                                </option>
                                @endforeach
                            </select>
                            <span class="form-error">{{$errors->first('recipient')}}</span>
                        </div>
                        <div class="form-group mb-4">
                            <input type="text" class="form-control" name="subject"
                                value="{{old('subject',isset($message) ? $message->subject:'')}}" placeholder="Subject">
                            <span class="form-error">{{$errors->first('subject')}}</span>
                        </div>
                        <div class="form-group mb-4">

                            <textarea rows="10" cols="200" class="form-control"
                                name="body">{{old('body',isset($message) ? $message->body:'')}}</textarea>
                            <span class="form-error">{{$errors->first('body')}}</span>
                        </div>
                        <!--     <div class="form-group mb-4">
                                        <label class="h6 f-12">Body Html</label>
                                        <textarea rows="5" cols="200" class="form-control" name="body_html">{{old('body_html',isset($message) ? $message->body_html:'')}}</textarea>
                                        <span class="form-error">{{$errors->first('body_html')}}</span>
                                    </div> -->


                        <!-- 
                                 
                                    <div class="custom-control custom-switch custom-control-inline">     
                                      <input type="checkbox" class="custom-control-input input-success" name="sender_status"   @if(old('sender_status',isset($message) ? $message->sender_status:0) == 1) checked @endif  id="sender_status">
                                      <label class="custom-control-label" for="sender_status">sender Status</label>
                                    </div>
                                    <div class="custom-control custom-switch custom-control-inline">
                                      <input type="checkbox" class="custom-control-input input-success" name="recipient_status" id="customswitchclr3"  @if(old('recipient_status',isset($message) ? $message->recipient_status:0) == 1) checked @endif>
                                      <label class="custom-control-label" for="customswitchclr3">
                                  Recipent Status
                                      </label>
                                    </div> -->
                        <div class="form-group mb-4">
                            <button class="btn btn-primary mt-3"> @if(isset($message)) Update Message @else Add Message
                                @endif</button>
                            <button class="btn  btn-primary pull-right mt-3"> Attachment</button>



                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- [ Sidebar Forms ] end -->
</div>
<!-- [ Main Content ] end -->
</div>
</div>



@endsection
<!-- [ Main Content ] end -->

@section('bottom-scripts')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{asset('assets/admin/js/plugins/select2.full.min.js')}}"></script>

<script>
$(document).ready(function() {
    // [ With Placeholder ]
    $(".js-example-placeholder-multiple").select2({
        placeholder: "To"
    });
});
</script>

@endsection