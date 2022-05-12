@extends('layouts.layout')
@section('styles')
<!-- <link rel="stylesheet" href="croppie.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
<link rel="stylesheet" href="{{asset('assets/admin/css/plugins/select2.min.css')}}">
<link href="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
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
                                    <h1 class="d-inline-block font-weight-normal mb-0"> @if(isset($post)) Edit @else Create New Blog Post @endif </h1>
                            </div>
                            <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                                    <a href="{{url('admin/posts')}}" class="btn d-block ml-auto btn-primary" role="button"><i class="feather icon-plus mr-2"></i>Back to blog posts</a>
                                <div class="btn-group btn-group-toggle btn-group-link">
                                </div>
                            </div>
                        </div> 

                        <div class="card">
                            <div class="card-body">
                                 <form action="@if(isset($post)){{admin('posts/'.$post->id)}}@else{{admin('posts')}}@endif" class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data" >
                                  @if(isset($post)) @method('PUT') @endif
                                  {{ csrf_field() }}
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12 ">Title</label>
                                        <input type="text" class="form-control" name="title" value="{{old('title',isset($post) ? $post->title:'')}}">
                                        <span class="form-error">{{$errors->first('title')}}</span>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12">Blog Categories</label>
                                        <select  class="form-control" id="topics"  name="topics[]" multiple>
                                             @foreach($topics as $topic)
                                               <option value="{{$topic->id}}" @if(isset($post) && $post->topics()->where('topic_id',$topic->id)->count() > 0) selected @endif >
                                                {!!$topic->name!!}</option>
                                             @endforeach
                                        </select>
                                        <span class="form-error">{{$errors->first('topics')}}</span>
                                     </div>
                                     <div class="form-group mb-4">
                                        <label class="h6 f-12">excerpt</label>
                                        <textarea rows="4"  id="excerpt" class="form-control" name="excerpt">{{old('excerpt',isset($post) ? $post->excerpt:'')}}</textarea> 
                                        <span class="form-error">{{$errors->first('excerpt')}}</span>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12">Content</label>
                                        <textarea rows="8"  id="content" class="form-control" name="content">{!!$post->content!!}</textarea> 
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12">Tags</label>
                                        <textarea rows="4"  class="form-control" name="tags">{{old('tags',isset($post) ? $post->tags:'')}}</textarea> 
                                        <span class="form-error">{{$errors->first('tags')}}</span>
                                    </div>
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <h3>Post Picture</h3>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="jumbotron text-center">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <img id="uploaded-image"
                                                  src="{{old('picture',isset($post) && $post->picture != '' ? asset('images/post/'.$post->id.'/'.$post->picture):asset('images/post/dummy-image.jpg'))}}" >
                                                </div>
                                                <div class="input-group mt-3">
                                                    <div class="custom-file">
                                                        <input type="file" accept="image/*" id="profile_pic" >
                                                        <input type="hidden" name="picture" id="picture" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="custom-control custom-switch custom-control-inline">
                                    <input type="checkbox" class="custom-control-input input-success" name="published" id="customswitchclr3"  @if(old('published',isset($post) ? $post->published:0) == 1) checked @endif>
                                     <label class="custom-control-label" for="customswitchclr3">
                                       Publish
                                    </label>
                                </div> 
                                <button class="btn btn-primary btn-block mt-3"> @if(isset($post)) Update Blog  post @else Add Blog post @endif</button>
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
<script src="{% static 'ImageCropper/image-cropper.js' %}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>
<script src="{{asset('assets/admin/js/plugins/moment.min.js')}}"></script>

<script src="{{asset('assets/admin/js/plugins/select2.full.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
     $("#topics").select2();
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

$(document).ready(function() {
          $('#content').summernote({
             placeholder: 'Share you ideas',
             height: 350
          });
        //   var content = {!! json_encode( old('content') ) !!};
        //   // alert(content);
        //   $('#content').summernote('code', content);
          
            // var info = $("#content").summernote("code"); 
            // alert(info);
        }); 
</script>
@endsection