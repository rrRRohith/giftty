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
                    {!! session()->get('message') !!}
                </div>
                @endif

            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-4"> </h5>
                    <form action="{{admin('messages/compose')}}" class="user-form-wrap form-submit-vendor" method="post"
                        enctype="multipart/form-data">
                        @if(isset($message)) @method('PUT') @endif
                        {{ csrf_field() }}
                        <div class="form-group mb-4">
                            <select class="js-example-placeholder-multiple form-control" name="recipient_id">
                                <option value="">Select a recipient</option>
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
                                value="{{old('subject',isset($message) ? $message->subject:'')}}" placeholder="Subject">
                            <span class="form-error">{{$errors->first('subject')}}</span>
                        </div>
                        <div class="form-group mb-4">
                            <textarea rows="10" cols="100" class="ckeditor form-control body-width"
                                name="body">{{old('body',isset($message) ? $message->body:'')}}</textarea>
                            <span class="form-error">{{$errors->first('body')}}</span>
                        </div>
                        <div class="form-group mb-4">
                        <button class="btn btn-primary mt-3">Send Message</button>

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
<!-- [ Main Content ] nd -->

@section('bottom-scripts')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{asset('assets/admin/js/plugins/select2.full.min.js')}}"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script>
$(document).ready(function() {
    // [ With Placeholder ]
    $(".js-example-placeholder-multiple").select2({
        placeholder: "To"
    });
    $('.ckeditor').ckeditor();
});
</script>

@endsection