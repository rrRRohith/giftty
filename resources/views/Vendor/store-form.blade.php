@extends('layouts.vendor')
@section('styles')
<!-- <link rel="stylesheet" href="croppie.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css"/>

@endsection

@section('content')
<section id="vendor-page">
    <div class="row">
        
        <div class="col-sm-12">

            <article>
                <h1><span><i class="fa fa-store-alt"></i> My Store</span></h1>

                @if(session()->has('message'))
                    {!! session('message') !!}
                @endif

                <div class="content-box">
                    <div class="content-box-body"> 
                        <form action="@if(isset($vendor)){{seller('store/edit/'.$vendor->id)}}@else{{seller('store/edit')}}@endif"
                            class="user-form-wrap vendor-form" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-8">

                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label class="h6 f-12">Store Name</label>
                                            <input type="text"  name="name"
                                                value="{{old('name',isset($store) ? $store->name:'')}}" autocomplete="off">
                                            <span class="form-error">{{$errors->first('name')}}</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 form-group mb-4">
                                            <label class="h6 f-12">Vendor Category </label>
                                            <select name="vendor_category_id">
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

                                        <div class="col-sm-6 form-group mb-4">
                                            <label class="h6 f-12 ">Phone</label>
                                            <input type="text" class="phone"   name="phone"
                                                value="{{old('phone',isset($vendor) ? $vendor->phone:'')}}">
                                            <span class="form-error">{{$errors->first('phone')}}</span>
                                        </div> 
                                    
                                    </div> 
                                    <div class="row">       
                                        <div class="col-sm-12 form-group">
                                            <label class="h6 f-12">Address</label>
                                            <input type="text" name="bio"
                                                value="{{old('bio',isset($vendor) ? $vendor->bio:'')}}" autocomplete="off">
                                            <span class="form-error">{{$errors->first('bio')}}</span>
                                        </div>
                                        
                                    </div>

                                    <div class="row">

                                        <div class="col-sm-3 form-group">
                                            <label class="h6 f-12">Postal code</label>
                                            <input type="text"   name="postalcode"
                                                value="{{old('postalcode',isset($store) ? $store->postalcode:'')}}"
                                                autocomplete="off">
                                            <span class="form-error">{{$errors->first('postalcode')}}</span>
                                        </div>

                                        <div class="col-sm-6 form-group mb-4">
                                            <label class="h6 f-12">City</label>
                                            <input type="text" name="city"
                                                value="{{old('city',isset($store) ? $store->city:'')}}" autocomplete="off">
                                            <span class="form-error">{{$errors->first('city')}}</span>
                                        </div> 
                                        <div class="col-sm-3 form-group mb-4">
                                            <label class="h6 f-12">Province</label>
                                            <select  name="province">
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

                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="status" value="" id="flexCheckChecked" @if(old('status',isset($vendor) ? $vendor->status:0) == 1)
                                                    checked @endif>
                                                  <label class="form-check-label" for="flexCheckChecked">
                                                   Store Visibilty
                                                  </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-submit" type="submit">
                                                    Update Store
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <label class="h6 f-12">Store Logo</label>
                                    <div class="jumbotron text-center">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <img id="uploaded-image"
                                                    src="{{old('logo',isset($store) && $store->logo != '' ? asset('images/stores/'.$store->logo):asset('images/default/store.jpg'))}}">


                                            </div>
                                            <div class="input-group mt-3">
                                                <div class="custom-file text-center">
                                                    <input type="file" accept="image/*" id="logo_pic">
                                                    <input type="hidden" name="logo" id="logo_image" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>  

                        </form>

                    </div>

                </div><!-- Content box //-->
            </article>

        </div>
    </div><!-- end of row //-->


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
</section>

@endsection
<!-- [ Main Content ] end -->

@push('bottom-scripts')


<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>

<script>
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
        $("#logo_image").val(response);
    });
    $("#logo_pic").val("");
    $('#uploadimageModal').modal('hide');
});

$(document).ready(function(){
    $('.phone').inputmask('999-999-9999');
    $('.postalcode').inputmask('A9A 9A9');
});


</script>

@endpush