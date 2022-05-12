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
                            <h1 class="d-inline-block font-weight-normal mb-0">  @if(isset($faq)) Edit @else Create New FAQ @endif  </h1>
                        </div>
                        <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                            <a href="{{url('admin/faqs')}}" class="btn d-block ml-auto btn-primary" role="button"><i class="feather icon-plus mr-2"></i>Back to Faqs</a>
                            <div class="btn-group btn-group-toggle btn-group-link">
                            </div>
                        </div>
                </div>   

                <div class="card">
                    <div class="card-body">
                        <form action="@if(isset($faq)){{admin('faqs/'.$faq->id)}}@else{{admin('faqs')}}@endif"
                            class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">
                            @if(isset($faq)) @method('PUT') @endif
                            {{ csrf_field() }}
                            <div class="form-group mb-4">
                                <label class="h6 f-12">Questions</label>
                                <textarea rows="8" column="200" class="form-control" name="question">{{old('question',isset($faq) ? $faq->question:'')}}</textarea 
                                        <span class="form-error">{{$errors->first('question')}}</span>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12">Answers</label>
                                        <textarea rows="8" column="200" class="form-control" name="answer">{{old('answer',isset($faq) ? $faq->answer:'')}}</textarea 
                                        <span class="form-error">{{$errors->first('answer')}}</span>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12 ">Display Order</label>
                                        <select class="form-control" name="display_order" style="width:150px;"> 
                                          @for($i=1;$i<=100;$i++)
                                            <option value="{{$i}}" <?php echo old('display_order',isset($faq) ? $faq->display_order:'') == $i ? 'selected="selected"':''; ?>> {{$i}}
                                            </option>
                                          @endfor
                                        </select>
                                        <span class="form-error">{{$errors->first('display_order')}}</span>
                                    </div>

                                   <button class="btn btn-primary btn-block mt-3"> @if(isset($faq)) Update Faq @else Add Faq @endif</button>
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


@endsection
<!-- [ Main Content ] end -->
@section('bottom-scripts')
<script src="{{asset('assets/admin/js/plugins/croppie.js')}}"></script>
<script src="{% static 'ImageCropper/image-cropper.js' %}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>
<script src="{{asset('assets/admin/js/plugins/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/dropify.min.js')}}"></script>
@endsection