@extends('layouts.layout')
@section('styles')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
@endsection
@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content container">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Dashboard ] start -->
            .<div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12 mb-4">
                        <h1 class="d-inline-block font-weight-normal mb-0">Edit Profile</h1>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
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
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                                <figure class="figure">
                                 <img id="uploaded-image"
                                    src="{{old('picture',isset($admin) && $admin->picture != '' ? asset('images/user/'.$admin->id.'/'.$admin->picture):asset('images/user/dummy-image.jpg'))}}"  class="figure-img img-fluid rounded" alt="...">
                                    <!-- <figcaption class="figure-caption text-center mt-2"><i class="m-r-10 f-18 feather icon-upload"></i>Change photo</figcaption> -->
                                    <div class="custom-file">
                                         <input type="file" accept="image/*" id="profile_pic" >
                                         <input type="hidden" name="picture" id="picture" />
                                    </div>
                                </figure>
                    </div>
                    <div class="col-md-12 col-xl-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="hidden" class="form-control" name="user" value="{{auth()->id()}}" >
                                <div class="form-group">   
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" name="firstname" value="{{old('firstname',isset($admin) ? $admin->firstname:'')}}">
                                    <span class="form-error">{{$errors->first('firstname')}}</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{old('email',isset($admin) ? $admin->email:'')}}">
                                    <span class="form-error">{{$errors->first('email')}}</span>
                                </div>
                                <button class="btn btn-primary">Update</button>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Second Name</label>
                                    <input type="text" class="form-control" name="lastname" value="{{old('lastname',isset($admin) ? $admin->lastname:'')}}">
                                    <span class="form-error">{{$errors->first('lastname')}}</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" class="form-control" name="password">
                                    <span class="form-error">{{$errors->first('password')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>     
                </div>
            </div>         
        </div>
    </div>
</div>
        <!--Image modal -->
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

@section('bottom-scripts')
<script src="{{asset('assets/admin/js/plugins/croppie.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>
<script src="{{asset('assets/admin/js/plugins/moment.min.js')}}"></script>
<script>
    // [ Sidebar Forms ] start
    var image_crop = $('#image_demo').croppie({
    viewport: {
        width: 250,
        height: 250,
        type:'square'
    },
    boundary:{
        width: 350,
        height: 350
    }
});
/// catching up the cover_image change event and binding the image into my croppie. Then show the modal.
$('#profile_pic').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
        image_crop.croppie('bind', {
            url: event.target.result,
        });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
});


$('.crop_image').click(function(event){
    image_crop.croppie('result', {type: 'canvas', format: 'png'}).then(function(response) {
        $("#uploaded-image").attr("src",response);
        $("#picture").val(response);
    });
    $("#profile_pic").val("");
    $('#uploadimageModal').modal('hide');
});

    // [ Sidebar Forms ] start
</script>
@endsection
        

