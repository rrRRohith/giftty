@extends('layouts.layout')
@section('styles')
<!-- <link rel="stylesheet" href="croppie.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
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
           
                <div class="row">
                    <div class="col-sm-6 d-flex align-items-center mb-4">
                            <h1 class="d-inline-block font-weight-normal mb-0">  @if(isset($user)) Edit @else Create New User @endif </h1>
                    </div>
                    <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                        <a href="{{url('admin/users')}}" class="btn d-block ml-auto btn-primary" role="button"><i class="feather icon-plus mr-2"></i>Back to Users</a>
                        <div class="btn-group btn-group-toggle btn-group-link">
                        </div>
                    </div>
                </div> 


                <div class="card">
                    <div class="card-body">

                        <h5 class="mb-4"> @if(isset($user)) Edit @else Add User @endif </h5>

                        <form action="@if(isset($user)){{admin('users/'.$user->id)}}@else{{admin('users')}}@endif"
                            class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">

                            @if(isset($user)) @method('PUT') @endif

                            {{ csrf_field() }}

                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">First Name</label>
                                <input type="text" class="form-control" name="firstname"
                                    value="{{old('firstname',isset($user) ? $user->firstname:'')}}">
                                <span class="form-error">{{$errors->first('firstname')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">Last Name</label>
                                <input type="text" class="form-control" name="lastname"
                                    value="{{old('lastname',isset($user) ? $user->lastname:'')}}">
                                <span class="form-error">{{$errors->first('lastname')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">Email</label>
                                <input type="email" class="form-control" name="email" autocomplete="off"
                                    value="{{old('email',isset($user) ? $user->email:'')}}">
                                <span class="form-error">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12">Password</label>
                                <input type="password" class="form-control" name="password" autocomplete="off" value="">
                                <span class="form-error">{{$errors->first('password')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">Phone</label>
                                <input type="text" class="form-control mob_no" data-mask="999-999-9999" name="phone"
                                    value="{{old('phone',isset($user) ? $user->phone:'')}}">
                                <span class="form-error">{{$errors->first('phone')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12">Description</label>
                                <textarea rows="8" cols="200" class="form-control"
                                    name="bio">{{old('bio',isset($user) ? $user->bio:'')}}</textarea>
                                <span class="form-error">{{$errors->first('bio')}}</span>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <h3>Profile Picture</h3>
                            </div>
                            <div class="col-lg-12">
                                <div class="jumbotron text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <img id="uploaded-image"
                                                src="{{old('picture',isset($user) && $user->picture != '' ? asset('images/users/'.$user->id.'/'.$user->picture):asset('images/users/dummy-image.jpg'))}}">


                                        </div>
                                        <div class="input-group mt-3">
                                            <div class="custom-file">
                                                <input type="file" accept="image/*" id="profile_pic">
                                                <input type="hidden" name="picture" id="picture" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="custom-control custom-switch custom-control-inline">
                                <input type="checkbox" class="custom-control-input input-success" name="status"
                                    id="customswitchclr3" @if(old('status',isset($user) ? $user->status:0) == 1) checked
                                @endif>
                                <label class="custom-control-label" for="customswitchclr3">
                                    Active
                                </label>
                            </div>

                            <button class="btn btn-primary btn-block mt-3"> @if(isset($user)) Update User @else Add User
                                @endif</button>
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

<!-- This is the modal -->
<div class="modal" tabindex="-1" role="dialog" id="uploadimageModal">
    <div class="modal-dialog" role="document" style="min-width: 700px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div id="image_demo"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary crop_image">Crop and Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endsection
<!-- [ Main Content ] end -->

@section('bottom-scripts')
<script src="{{asset('assets/admin/js/plugins/croppie.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>
<script src="{{asset('assets/admin/js/plugins/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/select2.full.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/jquery.mask.min.js')}}"></script>
<script>
// [ Sidebar Forms ] start
var image_crop = $('#image_demo').croppie({
    viewport: {
        width: 250,
        height: 250,
        type: 'square'
    },
    boundary: {
        width: 350,
        height: 350
    }
});
/// catching up the cover_image change event and binding the image into my croppie. Then show the modal.
$('#profile_pic').on('change', function() {
    var reader = new FileReader();
    reader.onload = function(event) {
        image_crop.croppie('bind', {
            url: event.target.result,
        });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
});


$('.crop_image').click(function(event) {
    image_crop.croppie('result', {
        type: 'canvas',
        format: 'png'
    }).then(function(response) {
        $("#uploaded-image").attr("src", response);
        $("#picture").val(response);
    });
    $("#profile_pic").val("");
    $('#uploadimageModal').modal('hide');
});
$(function() {
    $(document).ready(function() {
        // [ mobile-num masking ]
        $('.mob_no').mask('000-000-0000');
        // [ phone masking ]
        $('.phone').mask('0000-0000');
    });
});
// [ Sidebar Forms ] start
</script>

@endsection