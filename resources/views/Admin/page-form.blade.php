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
                        <h1 class="d-inline-block font-weight-normal mb-0"> @if(isset($page)) Edit @else Create New Page @endif </h1>
                    </div>
                    <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                        <a href="{{url('admin/pages')}}" class="btn d-block ml-auto btn-primary" role="button"><i
                                class="feather icon-plus mr-2"></i>Back to
                        Pages</a>
                        <div class="btn-group btn-group-toggle btn-group-link">
                        </div>
                    </div>
                </div>               


                <div class="card">
                    <div class="card-body">

                        <form action="@if(isset($page)){{admin('pages/'.$page->id)}}@else{{admin('pages')}}@endif"
                            class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">
                            @if(isset($page)) @method('PUT') @endif
                            {{ csrf_field() }}
                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">Name</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{old('name',isset($page) ? $page->name:'')}}">
                                <span class="form-error">{{$errors->first('name')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">Content</label>
                                <textarea rows="6" class="form-control" name="content"> {{old('content',isset($page) ? $page->content:'')}}</textarea>
                                <span class="form-error">{{$errors->first('content')}}</span>
                            </div>
                            
                        
                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">Seo Title</label>
                                <input type="text" class="form-control" name="seo_title" autocomplete="off"
                                    value="{{old('seo_title',isset($page) ? $page->seo_title:'')}}">
                                <span class="form-error">{{$errors->first('seo_title')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">Seo Description</label>
                                <input type="text" class="form-control" name="seo_description"
                                    value="{{old('seo_description',isset($page) ? $page->seo_description:'')}}">
                                <span class="form-error">{{$errors->first('seo_description')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">Seo Keyword</label>
                                <input type="text" class="form-control" name="seo_keyword" autocomplete="off"
                                    value="{{old('seo_keyword',isset($page) ? $page->seo_keyword :'')}}">
                                <span class="form-error">{{$errors->first('seo_keyword')}}</span>
                            </div>


                            <div class="col-lg-12 col-md-12 text-center">
                                <h3>Image</h3>
                            </div>
                            <div class="col-lg-12">
                                <div class="jumbotron text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <img id="uploaded-image"
                                                src="{{old('picture',isset($page) && $page->picture != '' ? asset('images/page/'.$page->id.'/'.$page->picture):asset('images/page/dummy-image.jpg'))}}">


                                        </div>
                                        <div class="input-group mt-3">
                                            <div class="custom-file">
                                                <input type="file" accept="image/*" id="page_pic">
                                                <input type="hidden" name="picture" id="picture" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="custom-control custom-switch custom-control-inline">
                                <input type="checkbox" class="custom-control-input input-success" name="published"
                                    id="customswitchclr3" @if(old('published',isset($page) ? $page->published:0) == 1)
                                checked @endif>
                                <label class="custom-control-label" for="customswitchclr3">
                                    Active
                                </label>
                            </div>

                            <button class="btn btn-primary btn-block mt-3"> @if(isset($page)) Update Page @else Add Page
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
    <div class="modal-dialog" role="document" style="min-width:800px">
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
        width: 285,
        height: 200,
        type: 'square'
    },
    boundary: {
        width: 350,
        height: 220
    }
});
/// catching up the cover_image change event and binding the image into my croppie. Then show the modal.
$('#page_pic').on('change', function() {
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
    $("#page_pic").val("");
    $('#uploadimageModal').modal('hide');
});


$(function() {
    $('#logo-dropify1').dropify({
        messages: {
            'default': 'Drag and drop a file here',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happended.'
        }
    });
    $('#attachments-dropify1').dropify({
        messages: {
            'default': 'Drag and drop a file here',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happended.'
        }
    });
    $(".office-mlt-select").select2();
    $(".location-mlt-select").select2();
});
// [ Sidebar Forms ] start
</script>

@endsection