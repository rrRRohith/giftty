@extends('layouts.layout')
@section('styles')
<!-- <link rel="stylesheet" href="croppie.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
<style>
    fieldset {
        border-top: 1px solid #DDD !important;
        margin: 25px 0px;
    }
</style>
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
                            <h1 class="d-inline-block font-weight-normal mb-0"> @if(isset($vendor)) Modify Vendor @else Create New Vendor @endif  </h1>
                    </div>
                    <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                            <a href="{{url('admin/vendors')}}" class="btn d-block ml-auto btn-primary" role="button"><i class="feather icon-plus mr-2"></i>Back to Vendors</a>
                        <div class="btn-group btn-group-toggle btn-group-link">
                        </div>
                    </div>
                </div> 
                    
                <div class="card">
                    <div class="card-body">
                        
                        <form action="@if(isset($vendor)){{admin('vendors/'.$vendor->id)}}@else{{admin('vendors')}}@endif"
                            class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">
                            @if(isset($vendor)) @method('PUT') @endif
                            {{ csrf_field() }}
                            
                            <div class="row">
                                <div class="col-sm-9">
                                    
                                    <div class="row">
                                        <div class="col-sm-7 form-group mb-4">
                                            <label class="h6 f-12 ">Store Name</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{old('name',isset($store) ? $store->name:'')}}">
                                            <span class="form-error">{{$errors->first('name')}}</span>
                                        </div>
                                        <div class="col-sm-3 form-group mb-4">
                                            <label class="h6 f-12">Store Category </label>
                                            <select class="js-example-placeholder-multiple form-control" name="vendor_category_id">
                                                <option value="">--Select Vendor Category---</option>
                                                @foreach($vendorCategories as $vendorCategory)
                                                <option value="{{$vendorCategory->id}}"
                                                    <?php echo old('vendor_category_id',isset($store) ? $store->vendor_category_id:'') == $vendorCategory->id  ? 'selected="selected"':''; ?>>
                                                    {!!$vendorCategory->name!!}
                                                </option>
                                                @endforeach
                                            </select>
                                            <span class="form-error">{{$errors->first('vendor_category_id')}}</span>
                                        </div>
                                    </div>
        
                                    <div class="row">
        
                                         
                                        <div class="col-sm-4 form-group mb-4">
                                            <label class="h6 f-12">Email</label>
                                            <input type="email" class="form-control" name="email" autocomplete="off"
                                                value="{{old('email',isset($vendor) ? $vendor->email:'')}}">
                                            <span class="form-error">{{$errors->first('email')}}</span>
                                        </div> 
        
                                        <div class="col-sm-4 form-group mb-4">
                                            <label class="h6 f-12">Password</label>
                                            <input type="password" class="form-control" name="password" autocomplete="off" value="">
                                            <span class="form-error">{{$errors->first('password')}}</span>
                                        </div>
                                        <div class="col-sm-4 form-group mb-4">
                                            <label class="h6 f-12">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password" autocomplete="off" value="">
                                            <span class="form-error">{{$errors->first('confirm_password')}}</span>
                                        </div>
        
                                    </div>
                                    
                                    
                                    <fieldset>
                                        
                                        <legend>Contact & Address</legend>
                                    
        
                                        <div class="row">
            
                                            <div class="col-sm-5 form-group mb-4">
                                                <label class="h6 f-12 ">Contact Person</label>
                                                <input type="text" class="form-control" name="firstname"
                                                    value="{{old('firstname',isset($vendor) ? $vendor->firstname:'')}}">
                                                <span class="form-error">{{$errors->first('firstname')}}</span>
                                            </div> 
            
                                            <div class="col-sm-3 form-group mb-4">
                                                <label class="h6 f-12 ">Phone</label>
                                                <input type="text" class="form-control mob_no" data-mask="999-999-9999" name="phone"
                                                    value="{{old('phone',isset($vendor) ? $vendor->phone:'')}}">
                                                <span class="form-error">{{$errors->first('phone')}}</span>
                                            </div>
                                            
                                        </div>
            
            
                                        <div class="row">    
                                            <div class="col-sm-4 form-group mb-4">
                                                <label class="h6 f-12 ">Address</label>
                                                <input type="text" class="form-control" name="bio"
                                                    value="{{old('bio',isset($vendor) ? $vendor->bio:'')}}">
                                                <span class="form-error">{{$errors->first('bio')}}</span>
                                            </div>
                                            <div class="col-sm-2 form-group mb-4">
                                                <label class="h6 f-12">Postal code</label>
                                                <input type="text" class="form-control postalcode" data-mask="A0A-0A0" name="postalcode" value="{{old('postalcode',isset($store) ? $store->postalcode:'')}}"
                                                    autocomplete="off">
                                                <span class="form-error">{{$errors->first('postalcode')}}</span>
                                            </div>
                                            <div class="col-sm-3 form-group mb-4">
                                                <label class="h6 f-12">City</label>
                                                <input type="text" class="form-control" name="city"
                                                    value="{{old('city',isset($store) ? $store->city:'')}}" autocomplete="off">
                                                <span class="form-error">{{$errors->first('city')}}</span>
                                            </div>
                                    
                                            <div class="col-sm-3 form-group mb-4">
                                                <label class="h6 f-12">Province</label>
                                                <select class="form-control" name="province">
                                                    <option value=""> -- Select Province --</option>
                                                    @foreach($provinces as $province)
                                                    <option value="{{$province->short_code}}"
                                                        <?php echo old('province',isset($store) ? $store->province:'') == $province->short_code  ? 'selected="selected"':''; ?>>
                                                        {!!$province->name!!}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                <span class="form-error">{{$errors->first('province')}}</span>
                                            </div>
                                      
                                        </div>
            
                                        <div class="row"> 
                                            <div class="col-sm-4 form-group mb-4">
                                                <label class="h6 f-12">Store Email</label>
                                                <input type="email" class="form-control" name="store_email"  autocomplete="off"
                                                    value="{{old('store_email',isset($store) ? $store->store_email:'')}}">
                                                <span class="form-error">{{$errors->first('store_email')}}</span>
                                            </div>
            
                                            <div class="col-sm-3 form-group mb-4">
                                                <label class="h6 f-12">Support Number</label>
                                                <input type="text" class="form-control mob_no" data-mask="999-999-9999" name="mobile"
                                                    value="{{old('mobile',isset($store) ? $store->mobile:'')}}">
                                                <span class="form-error">{{$errors->first('mobile')}}</span>
                                            </div>
            
                                            <div class="col-sm-5 form-group mb-4">
                                                <label class="h6 f-12">Website</label>
                                                <input type="text" class="form-control" name="website"
                                                    value="{{old('website',isset($store) ? $store->website:'')}}" autocomplete="off">
                                                <span class="form-error">{{$errors->first('website')}}</span>
                                            </div>
                                       </div>
                                   
                                   </fieldset>
        
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12">Description</label>
                                        <textarea rows="8" column="200" class="form-control"
                                            name="description">{{old('description',isset($store) ? $store->description:'')}}</textarea>
                                        <span class="form-error">{{$errors->first('description')}}</span>
                                    </div>
                     
        
                                    <div class="custom-control custom-switch custom-control-inline">
                                        <input type="checkbox" class="custom-control-input input-success" name="status"
                                            id="customswitchclr3" @if(old('status',isset($vendor) ? $vendor->status:0) == 1)
                                        checked @endif>
                                        <label class="custom-control-label" for="customswitchclr3">
                                            Active
                                        </label>
                                    </div>
                                    
                                    
                                </div><!--Endo of Main Column //-->
                                
                                <div class="col-sm-3">
                                    <div class="jumbotron text-center">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label class="h6 f-12">Store Logo</label>
                                                <img id="uploaded-image" style="width:160px;height:200px;"
                                                    src="{{old('logo',isset($vendor) && $vendor->store->logo != '' ? asset('images/stores/'.$vendor->store->logo):asset('images/users/dummy-image.jpg'))}}">
    
                                            </div>
                                            
                                            <div class="input-group mt-3">
                                                <div class="custom-file">
                                                    <input type="file" accept="image/*" id="logo_pic">
                                                    <input type="hidden" name="logo" id="logo" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End of Sidebar Column //-->
                                
                            </div><!-- End of Row //-->
                            
                            
                            
                            

                            <button class="btn btn-primary btn-block mt-3"> @if(isset($vendor)) Update Vendor @else Add
                                Vendor @endif</button>

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
<script src="croppie.js"></script>
<script src="{% static 'ImageCropper/image-cropper.js' %}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
$('#logo_pic').on('change', function() {
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
        $("#logo").val(response);
    });
    $("#logo_pic").val("");
    $('#uploadimageModal').modal('hide');
});



// [ Sidebar Forms ] start

$(function() {
    $(document).ready(function() {
        // [ mobile-num masking ]
        $('.mob_no').mask('000-000-0000');
        // [ phone masking ]
        $('.phone').mask('000-000-0000');
        // [ telphone-code masking ]
      
    });
});
</script>

@endsection