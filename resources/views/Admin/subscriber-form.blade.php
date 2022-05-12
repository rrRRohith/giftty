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
                                  <h1 class="d-inline-block font-weight-normal mb-0"> @if(isset($subscriber)) Edit Subscriber @else Create New Subscriber @endif  </h1>
                          </div>
                          <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                                  <a href="{{url('admin/subscribers')}}" class="btn d-block ml-auto btn-primary" role="button"><i class="feather icon-plus mr-2"></i>Back to Subscribers</a>
                              <div class="btn-group btn-group-toggle btn-group-link">
                              </div>
                          </div>
                      </div> 


                        <div class="card">
                            <div class="card-body">
                                   <form action="@if(isset($subscriber)){{admin('subscribers/'.$subscriber->id)}}@else{{admin('subscribers')}}@endif" class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">
                                   @if(isset($subscriber)) @method('PUT') @endif
                                   {{ csrf_field() }}
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12 ">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{old('name',isset($subscriber) ? $subscriber->name:'')}}">
                                        <span class="form-error">{{$errors->first('name')}}</span>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12">Email</label>
                                        <input type="email" class="form-control" name="email" value="
                                       {{old('email',isset($subscriber) ? $subscriber->email:'')}}">
                                        <span class="form-error">{{$errors->first('email')}}</span>
                                    </div>
                                   
                                    <div class="custom-control custom-switch custom-control-inline">
                                      <input type="checkbox" class="custom-control-input input-success" name="status" id="customswitchclr3"  @if(old('status',isset($subscriber) ? $subscriber->status:0) == 1) checked @endif>
                                      <label class="custom-control-label" for="customswitchclr3">
                                       Active
                                      </label>
                                    </div>  

                                                    
                                   <button class="btn btn-primary btn-block mt-3"> @if(isset($subscriber)) Update Subscriber @else Add Subscriber @endif</button>
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
@endsection