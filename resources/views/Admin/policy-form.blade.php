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
                                    <h1 class="d-inline-block font-weight-normal mb-0"> @if(isset($policy)) Edit Policy @else Create  New Policy @endif </h1>
                                </div>
                                <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                                    <a href="{{url('admin/policies')}}" class="btn d-block ml-auto btn-primary" role="button"><i
                                            class="feather icon-plus mr-2"></i>Back to
                                    Polices</a>
                                    <div class="btn-group btn-group-toggle btn-group-link">
                                    </div>
                                </div>
                        </div>               


                        <div class="card">
                            <div class="card-body">
                            
                                   <form action="@if(isset($policy)){{admin('policies/'.$policy->id)}}@else{{admin('policies')}}@endif" class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">
                                   @if(isset($policy)) @method('PUT') @endif
                                   {{ csrf_field() }}
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12 ">Title</label>
                                        <input type="text" class="form-control" name="title" value="{{old('title',isset($policy) ? $policy->title:'')}}">
                                        <span class="form-error">{{$errors->first('title')}}</span>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12">Content</label>
                                        <textarea rows="8" column="200" class="form-control" name="content">{{old('content',isset($policy) ? $policy->content:'')}}</textarea 
                                        <span class="form-error">{{$errors->first('content')}}</span>
                                    </div>
                                   
                                    <div class="custom-control custom-switch custom-control-inline">
                                      <input type="checkbox" class="custom-control-input input-success" name="status" id="customswitchclr3"  @if(old('status',isset($policy) ? $policy->status:0) == 1) checked @endif>
                                      <label class="custom-control-label" for="customswitchclr3">
                                       Active
                                      </label>
                                    </div>  

                                                    
                                   <button class="btn btn-primary btn-block mt-3"> @if(isset($policy)) Update Policy @else Add Policy @endif</button>
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
<!-- [ Main Content ] end -->

@section('bottom-scripts')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>

<script>
    // [ Sidebar Forms ] start
   
   // [ Sidebar Forms ] start
</script>

@endsection