@extends('layouts.vendor')
@section('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />

@endsection
@section('content')
<section id="vendor-page">
    <div class="row">
        <div class="col-sm-3">
          <aside>
            <nav>
                <h3>Folders</h3>
                <ul>
                    <li><a href="{{url('seller/profile')}}"><i class="fa fa-inbox"></i> Edit Profile</a></li>
                    <li><a href="{{url('seller/change-password')}}"><i class="fa fa-edit"></i> Change Password</a></li>
                    <li><a href="{{url('seller/logout')}}"><i class="fa fa-unlock" aria-hidden="true"></i> Logout</a></li>
                </ul>              
            </nav>
          </aside>
        </div>
        <div class="col-sm-9">
            <article>
                <h1>
                    
                    <span><i class="fa fa-user"></i> Profile</span></h1>
 
                @if(session()->has('message'))
                    {!! session('message') !!}
                @endif
                <div class="content-box">
                    <div class="content-box-body"> 
                       @if($errors->count())
                            <div class="alert alert-danger alert-dismissable">
                                Sorry some errors in form submission
                            </div> 
                        @endif
                         
                   
                        <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                 
                            <div class="row">
                          
                                <div class="col-sm-6 form-group">   
                                    <label for="exampleInputEmail1"> Firstname</label>
                                    <input type="text" class="form-control" name="firstname" value="{{old('firstname',isset($vendor) ? $vendor->firstname:'')}}">
                                    <span class="form-error">{{$errors->first('firstname')}}</span>
                                </div>

                                <div class="col-sm-6 form-group">   
                                    <label for="exampleInputEmail1"> Lastname</label>
                                    <input type="text" class="form-control" name="lastname" value="{{old('lastname',isset($vendor) ? $vendor->lastname:'')}}">
                                    <span class="form-error">{{$errors->first('lastname')}}</span>
                                </div>
                         
                                <div class="col-sm-6 form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" name="email" readonly value="{{old('email',isset($vendor) ? $vendor->email:'')}}">
                                    <span class="form-error">{{$errors->first('email')}}</span>
                                </div>

                                <div class="col-sm-6 form-group">   
                                    <label for="exampleInputEmail1"> Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{old('phone',isset($vendor) ? $vendor->phone:'')}}">

                                    <span class="form-error">{{$errors->first('phone')}}</span>
                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div><!-- Content box //-->
            </article>
        </div>
    </div><!-- end of row //-->
</section>
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
@endsection
<!-- [ Main Content ] end -->

@push('bottom-scripts')
<!-- <script src="{{asset('assets/admin/js/plugins/select2.full.min.js')}}"></script> -->
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
@endpush