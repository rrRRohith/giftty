@extends('layouts.layout')
@section('styles')
<!-- <link rel="stylesheet" href="croppie.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
<link rel="stylesheet" href="{{asset('assets/admin/css/plugins/select2.min.css')}}">
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
                                    <h1 class="d-inline-block font-weight-normal mb-0"> @if(isset($discount)) Edit Discount Coupon @else Create New Discount Coupon @endif  </h1>
                            </div>
                            <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                                    <a href="{{url('admin/discounts')}}" class="btn d-block ml-auto btn-primary" role="button"><i class="feather icon-plus mr-2"></i>Back to  Discount Coupon </a>
                                <div class="btn-group btn-group-toggle btn-group-link">
                                </div>
                            </div>
                        </div> 

                        <div class="card">
                            <div class="card-body">
                               
                                   <form action="@if(isset($discount)){{admin('discounts/'.$discount->id)}}@else{{admin('discounts')}}@endif" class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">
                                   @if(isset($discount)) @method('PUT') @endif
                                   {{ csrf_field() }}
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12 ">Code</label>
                                        <input type="text" class="form-control" name="code" value="{{old('code',isset($discount) ? $discount->code:'')}}">
                                        <span class="form-error">{{$errors->first('code')}}</span>
                                    </div>

		                            <div class="form-group mb-4">
		                                <label class="h6 f-12">Description</label>
		                                <textarea rows="3"  class="form-control"
		                                    name="description">{{old('description',isset($discount) ? $discount->description:'')}}</textarea>
		                                <span class="form-error">{{$errors->first('discount')}}</span>
		                            </div>
		                            <div class="row">
			                            <div class="col-sm-3 form-group mb-4">
	                                        <label class="h6 f-12 ">Start Date</label>
	                                        <input type="date" class="form-control" name="start_time" value="{{old('start_time',isset($discount) ? date('Y-m-d',strtotime($discount->start_time)):'')}}">
	                                        <span class="form-error">{{$errors->first('start_time')}}</span>
	                                    </div>
	                                    <div class="col-sm-3 form-group mb-4">
	                                        <label class="h6 f-12 ">End Date</label>
	                                        <input type="date" class="form-control" name="end_time" value="{{old('end_time',isset($discount) ? date('Y-m-d',strtotime($discount->end_time)):'')}}">
	                                        <span class="form-error">{{$errors->first('end_time')}}</span>
	                                    </div>
	                                    <div class="col-sm-3 form-group mb-4">
	                                        <label class="h6 f-12 ">Minimun Amount</label>
	                                        <input type="text" class="form-control" name="min_amount" value="{{old('min_amount',isset($discount) ? $discount->min_amount:'')}}">
	                                        <span class="form-error">{{$errors->first('min_amount')}}</span>
	                                    </div>
	                                    <div class="col-sm-3 form-group mb-4">
	                                        <label class="h6 f-12 ">Maximun Usage</label>
	                                        <input type="text" class="form-control" name="max_usage" value="{{old('max_usage',isset($discount) ? $discount->max_usage:'')}}">
	                                        <span class="form-error">{{$errors->first('max_usage')}}</span>
	                                    </div>
                                    </div>
                                    <div class="row">
			                            <div class="col-sm-3 form-group mb-4">
	                                        <label class="h6 f-12 ">Value</label>
	                                        <input type="text" class="form-control" name="value" value="{{old('value',isset($discount) ? $discount->value:'')}}">
	                                        <span class="form-error">{{$errors->first('value')}}</span>
	                                    </div>
	                                    <div class="col-sm-3 form-group mb-4">
	                                        <label class="h6 f-12">Value Type</label>
	                                        <select class="form-control" name="value_type" > 
	                                            <option value="amount"  @if(old('value_type',isset($discount) ? $discount->value_type:'')=='amount') selected @endif>Amount
	                                            </option>
	                                            <option value="percentage" @if(old('value_type',isset($discount) ? $discount->value_type:'')=='percentage') selected @endif>Percentage
	                                            </option>
	                                        </select>
	                                        <span class="form-error">{{$errors->first('value_type')}}</span>
	                                    </div>
                                        <div class="col-sm-3 form-group mb-4">
	                                        <label class="h6 f-12">Discount Type</label>
	                                        <select class="form-control" name="discount_type" > 
	                                            <option value="coupon"  @if(old('discount_type',isset($discount) ? $discount->discount_type:'')=='coupon') selected @endif>Coupon
	                                            </option>
	                                            <option value="shipped" @if(old('discount_type',isset($discount) ? $discount->discount_type:'')=='shipped') selected @endif>Shipping
	                                            </option>
	                                        </select>
	                                        <span class="form-error">{{$errors->first('discount_type')}}</span>
	                                    </div>

                                    </div>


                                   
                                    <div class="custom-control custom-switch custom-control-inline">
	                                      <input type="checkbox" class="custom-control-input input-success" name="status" id="customswitchclr3"  @if(old('status',isset($discount) ? $discount->status:0) == 1) checked @endif>
	                                      <label class="custom-control-label" for="customswitchclr3">
	                                      Status
	                                      </label>
                                    </div> 
                                        
                                   <button class="btn btn-primary btn-block mt-3"> @if(isset($discount)) Update Discount Coupon @else Add Discount Coupon @endif</button>
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