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
                            <h1 class="d-inline-block font-weight-normal mb-0"> @if(isset($navigation)) Edit @else Create New Navigation @endif </h1>
                    </div>
                    <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                            <a href="{{url('admin/navigations')}}" class="btn d-block ml-auto btn-primary" role="button"><i class="feather icon-plus mr-2"></i>Back to  Navigations</a>
                        <div class="btn-group btn-group-toggle btn-group-link">
                        </div>
                    </div>
                </div>     
                <div class="card">
                    <div class="card-body">
                      
                        <form
                            action="@if(isset($navigation)){{admin('navigations/'.$navigation->id)}}@else{{admin('navigations')}}@endif"
                            class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">
                            @if(isset($navigation)) @method('PUT') @endif
                            {{ csrf_field() }}
                            <div class="form-group mb-4">
                                <label class="h6 f-12 "> Name</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{old('name',isset($navigation) ? $navigation->name:'')}}">
                                <span class="form-error">{{$errors->first('name')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12">Link to</label>
                                @php
                                    $links = array('#','/','/contact','/terms-conditions','/customer','0-50','50-100','100-1000');
                                @endphp
                                
                                 <select name="link_to" class="form-control" id="link_to">
                                    <option value="#">#Blank Link</option>
                                    <option value="/">Home Page</option>
                                    <option value="/contact">Contact Page</option>
                                    <optgroup label="Categories">
                                        @foreach($categories as $catrow)
                                            @php $links[]='/'.$catrow->slug; @endphp
                                        <option value="{{'/'.$catrow->slug}}" @if(old('link',isset($navigation) ? $navigation->link:'') == '/'.$catrow->slug) selected="selected"  @endif>{{$catrow->name}}</option>
                                        @endforeach
                                    </optgroup>
                                    <optgroup label="Occasions">
                                        @foreach($occasions as $occasion)
                                            @php $links[]='/occasion/'.$occasion->slug; @endphp
                                        <option value="{{'/occasion/'.$occasion->slug}}" @if(old('link',isset($navigation) ? $navigation->link:'') == '/occasion/'.$occasion->slug) selected="selected"  @endif>{{$occasion->name}}</option>
                                        @endforeach
                                    </optgroup>
                                    <optgroup label="Shopping Categories">
                                        @foreach($shoppingcategories as $shopcat)
                                            @php $links[]='/shopping/'.$shopcat->slug; @endphp
                                        <option value="{{'/shopping/'.$shopcat->slug}}" @if(old('link',isset($navigation) ? $navigation->link:'') == '/shopping/'.$shopcat->slug) selected="selected"  @endif>{{$shopcat->name}}</option>
                                        @endforeach
                                    </optgroup>
                                    <optgroup label="Shopping Budget">
                                        <option value="{{'/budget/0-50'}}" @if(old('link',isset($navigation) ? $navigation->link:'') == '/budget/0-50') selected="selected"  @endif>Under $50</option>
                                        <option value="{{'/budget/50-100'}}" @if(old('link',isset($navigation) ? $navigation->link:'') == '/budget/50-100') selected="selected"  @endif>$50 - $100</option>
                                        <option value="{{'/budget/100-1000'}}" @if(old('link',isset($navigation) ? $navigation->link:'') == '/budget/100-1000') selected="selected"  @endif>$100 Above</option>
                                    </optgroup>
                                    <optgroup label="Product types">
                                        @foreach($types as $type)
                                            @php $links[]='/type/'.$type->slug; @endphp
                                        <option value="{{'/type/'.$type->slug}}" @if(old('link',isset($navigation) ? $navigation->link:'') == '/type/'.$type->slug) selected="selected"  @endif>{{$type->name}}</option>
                                        @endforeach
                                    </optgroup>
                                    <optgroup label="Pages">
                                        @foreach($pages as $page)
                                            @php $links[]='/page/'.$page->slug; @endphp
                                        <option value="{{'/page/'.$page->slug}}" @if(old('link',isset($navigation) ? $navigation->link:'') == '/page/'.$page->slug) selected="selected"  @endif>{{$page->name}}</option>
                                        @endforeach
                                    </optgroup>
                                    <option value="/terms-conditions">Terms & Conditions</option>
                                    <option value="/customer">My Account</option>
                                    <option value="" @if(!in_array(old('link', isset($navigation) ? $navigation->link:''), $links)) selected="selected" @endif >Custom Link</option>
                                 </select>
                                <span class="form-error">{{$errors->first('link')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12">Link</label>
                                 <input type="text" class="form-control" name="link"
                               value="{{old('link',isset($navigation) ? $navigation->link:'')}}" id="link"> 
                                <span class="form-error">{{$errors->first('link')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12">Parent Navigations</label>
                                <select class="form-control" name="parent_id">
                                    <option value=""> -- No Parent Navigation --</option>
                                    @foreach($navigations as $row)
                                    <option value="{{$row->id}}"
                                        <?php echo old('parent_id',isset($navigation) ? $navigation->parent_id:'') == $row->id ? 'selected="selected"':''; ?>>
                                        {!!$row->name!!}</option>
                                    @foreach($row->children as $child)
                                    <option value="{{$child->id}}"
                                        <?php echo old('parent_id',isset($navigation) ? $navigation->parent_id:'') == $child->id ? 'selected="selected"':''; ?>>
                                        &nbsp; &nbsp; {!!$child->name!!}</option>
                                    @endforeach
                                    @endforeach
                                </select>
                                <span class="form-error">{{$errors->first('parent_id')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">Display Order</label>
                                <select class="form-control" name="display_order" style="width:150px;">
                                    @for($i=1;$i<=15;$i++) 
                                        <option value="{{$i}}" <?php echo old('display_order',isset($navigation) ? $navigation->display_order:'') == $i ? 'selected="selected"':''; ?>>
                                        {{$i}}
                                        </option>
                                    @endfor
                                </select>
                                <span class="form-error">{{$errors->first('display_order')}}</span>
                            </div>

                            <div class="custom-control custom-switch custom-control-inline">
                                <input type="checkbox" class="custom-control-input input-success" name="status"
                                    id="customswitchclr3" @if(old('status',isset($navigation) ? $navigation->status:0) == 1) checked @endif>
                                <label class="custom-control-label" for="customswitchclr3">
                                    Active
                                </label>
                            </div>

                            <button class="btn btn-primary btn-block mt-3"> @if(isset($navigation)) Update Navigations @else Add Navigation @endif</button>

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
<script src="{{asset('assets/admin/js/plugins/daterangepicker.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/dropify.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/select2.full.min.js')}}"></script>
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
$('#picture_pic').on('change', function() {
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

$('#icon_pic').on('change', function() {
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
        $("#uploaded-image2").attr("src", response);
        $("#icon").val(response);
    });
    $("#icon_pic").val("");
    $('#uploadimageModal').modal('hide');
});

$("#link_to").change(function(){
    var newlink = $(this).val();
    $("#link").val(newlink);
});

// [ Sidebar Forms ] start
</script>

@endsection