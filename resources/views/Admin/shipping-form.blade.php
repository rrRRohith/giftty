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
                                    <h1 class="d-inline-block font-weight-normal mb-0"> @if(isset($shipping)) Edit Shipping details @else Create New Shipping @endif  </h1>
                            </div>
                            <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                                    <a href="{{url('admin/shippings')}}" class="btn d-block ml-auto btn-primary" role="button"><i class="feather icon-plus mr-2"></i>Back to Shippings</a>
                                <div class="btn-group btn-group-toggle btn-group-link">
                                </div>
                            </div>
                        </div> 

                        <div class="card">
                            <div class="card-body">
                                   <form action="@if(isset($shipping)){{admin('shippings/'.$shipping->id)}}@else{{admin('shippings')}}@endif" class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">
                                   @if(isset($shipping)) @method('PUT') @endif
                                   {{ csrf_field() }}
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12 ">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{old('name',isset($shipping) ? $shipping->name:'')}}">
                                        <span class="form-error">{{$errors->first('name')}}</span>
                                    </div>
                                    <div class="form-group mb-4">
                                                  <label class="h6 f-12">Policy </label>
                                                  <select class="form-control" name="shipping_policy_id">
                                                       <option value="">--Select Policy---</option>
                                                       @foreach($policies as $policy)
                                                         <option value="{{$policy->id}}"  <?php echo old('shipping_policy_id',isset($shipping) ? $shipping->shipping_policy_id:'') == $policy->id  ? 'selected="selected"':''; ?>>{!!$policy->title!!}
                                                         </option>
                                                       @endforeach
                                                    </select>
                                                   <span class="form-error">{{$errors->first('shipping_policy_id')}}</span>
                                      </div>
                                      <div class="form-group mb-4">
                                        <label class="h6 f-12 ">Short Description</label>
                                        <input type="text" class="form-control" name="short_description" value="{{old('short_description',isset($shipping) ? $shipping->short_description:'')}}">
                                        <span class="form-error">{{$errors->first('short_description')}}</span>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12">Description</label>
                                        <textarea rows="8" column="200" class="form-control" name="description">{{old('description',isset($shipping) ? $shipping->description:'')}}</textarea>
                                        <span class="form-error">{{$errors->first('description')}}</span>
                                    </div>
                                     <div class="form-group mb-4">
                                        <label class="h6 f-12">Days</label>
                                        <select class="form-control" name="days" style="width:150px;"> 
                                          @for($i=0;$i<=15;$i++)
                                            <option value="{{$i}}" <?php echo old('days',isset($shipping) ? $shipping->days:'') == $i ? 'selected="selected"':''; ?>> {{$i}}
                                            </option>
                                          @endfor
                                        </select>
                                        <span class="form-error">{{$errors->first('days')}}</span>
                                    </div>
                                     <div class="form-group mb-4">
                                        <label class="h6 f-12 ">Cut off</label>
                                        <input type="time" class="form-control" name="cut_off" value="{{old('cut_off',isset($shipping) ? $shipping->cut_off:'')}}">
                                        <span class="form-error">{{$errors->first('cut_off')}}</span>
                                    </div>

                                      <div class="form-group mb-4">
                                        <label class="h6 f-12">Priority</label>
                                        <select class="form-control" name="priority" style="width:150px;"> 
                                          @for($i=1;$i<=100;$i++)
                                            <option value="{{$i}}" <?php echo old('priority',isset($shipping) ? $shipping->priority:'') == $i ? 'selected="selected"':''; ?>> {{$i}}
                                            </option>
                                          @endfor
                                        </select>
                                        <span class="form-error">{{$errors->first('priority')}}</span>
                                    </div>   
                                    <div class="form-group mb-4">
                                        <label class="h6 f-12 ">Charge</label>
                                        <input type="text" class="form-control" name="charge" value="{{old('charge',isset($shipping) ? $shipping->charge:'')}}">
                                        <span class="form-error">{{$errors->first('charge')}}</span>
                                    </div> 
                                    <div class="form-group mb-4">
                                        <div class="custom-control custom-switch custom-control-inline">     
                                          <input type="checkbox" class="custom-control-input input-success" name="delivery_date"   @if(old('delivery_date',isset($shipping) ? $shipping->delivery_date:0) == 1) checked @endif  id="delivery_date">
                                          <label class="custom-control-label" for="delivery_date">Allow Specific Delivery Date? (Customer select date from a calendar)</label>
                                        </div>
                                    </div> 
                                    
                                    <div class="form-group mb-4">
                                       <div class="custom-control custom-switch custom-control-inline">
                                          <input type="checkbox" class="custom-control-input input-success" name="local_delivery" id="local_delivery"  @if(old('status',isset($shipping) ? $shipping->local_delivery:0) == 1) checked @endif>
                                          <label class="custom-control-label" for="local_delivery">
                                           Local Delivery? (Vendor delivery on selected cities)
                                          </label>
                                        </div>    
                                    </div> 
                                    
                                    <div class="form-group mb-4">
                                       <div class="custom-control custom-switch custom-control-inline">
                                          <input type="checkbox" class="custom-control-input input-success" name="status" id="customswitchclr3"  @if(old('status',isset($shipping) ? $shipping->status:0) == 1) checked @endif>
                                          <label class="custom-control-label" for="customswitchclr3">
                                           Active
                                          </label>
                                        </div>    
                                    </div> 
                                    
                                    
                                                
                                   <button class="btn btn-primary btn-block mt-3"> @if(isset($shipping)) Update Shipping @else Add Shipping @endif</button>
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