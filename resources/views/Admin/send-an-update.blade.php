@extends('layouts.layout')
@section('top-scripts')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
@endsection
@section('styles')
<!-- <link rel="stylesheet" href="croppie.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
<link rel="stylesheet" href="{{asset('assets/admin/css/plugins/select2.min.css')}}">
<style>
    .form-control1 {
    display: block;
    width: 25%;
    height: calc(1.5em + 1.064rem + 2px);
    padding: 0.532rem 0.854rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #171F46;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #D7DFE9;
    border-radius: 4px;
    -webkit-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
</style>
@endsection
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content container">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix border-bottom mb-3">
                        <div class="float-left"><h1 class="d-inline-block font-weight-normal text-body mb-3">Send An Update</h1></div><div class="float-right"><h6><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>View List</a></h6></div>
                        <!--<div class="float-right"><a href="{{url('admin/grower-news')}}"><i class="fa fa-backward"></i>&nbsp; Back</a></div>-->
                    </div>
                    <div class="table-responsive">
                        @if(session()->has('success'))
                            <div class="alert alert-info">{{ session()->get('success') }}</div>
                        @endif
                        @if(session()->has('error'))
                            <div class="alert alert-danger">{{ session()->get('error') }}</div>
                        @endif
                        @if(session()->has('addresses'))
                        <div class="alert alert-danger">
                           
                            {{ session()->get('addresses') }}<br><br>
                        </div>
                        @endif
                       
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>@foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group {{ $errors->has('recipients') ? ' has-error' : '' }}" >
                                    <label>Receipients</label> <span style="color:red">*</span><br>
                                   
                                    <input type="checkbox"> Specific Email Address<br>
                                    <input type="checkbox"> Active Vendors<br>
                                    <input type="checkbox"> Inactive Vendors<br>
                                    <input type="checkbox"> Subscribers<br>
                                   
                                </div>
                                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}" @if(!old('email')) style="display:none" @endif id="toemail">
                                    <label>Reciepient Email  <span>  [Separate email ids with comma,At a time Only 50 emails are allowed]  </span> <span style="color:red">*</span></label>
                                    <textarea class="form-control" name="email" ></textarea>
                                </div>
                                <div class="form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                                    <label>Subject <span> [Maximum 150 characters Allowed]</span>  <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" name="subject" maxlength="150" autofocus>
                                    <!--<textarea name="subject" maxlength="150" class="form-control">{{old('subject')}}</textarea>-->
                                </div>
                                <div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
                                    <label>Body</label> <span style="color:red">*</span>
                                    <textarea  name="body" id="body" class="form-control" rows="10"></textarea>
                                    <script> CKEDITOR.replace( 'body' ); </script>
                                </div>
                                <div class="form-group" >
                                    <label>Date</label>  <span style="color:red">*</span>
                                    <input type="date" name="date" class="form-control1" value="{{old('date')?old('date'):date('Y-m-d')}}" >
                                </div>
                                <div class="form-group {{ $errors->has('time') ? ' has-error' : '' }}">
                                    <label>Time</label>  <span style="color:red">*</span>
                                    <input type="time" class="form-control1" name="time" value="{{old('time')?old('time'):date('h:m')}}">
                                </div>
                               
                                <div class="form-group">
                                    <button class="btn btn-primary" type="button">Send </button>
                                </div>
                               
                            </div>
                        </form>
                    </div>
                    <div class="box-footer clearfix">  </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bottom-scripts')
<script src="{{url('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/pcoded.min.js')}}"></script>
<script src="{{url('assets/js/plugins/apexcharts.min.js')}}"></script>
<script src="{{url('assets/js/plugins/moment.min.js')}}"></script>
<script src="{{url('assets/js/plugins/daterangepicker.js')}}"></script>
<!-- <script>

    $(document).ready(function() {
   $('#specific').on('change', function() {
       var s=$('#specific').is(":checked");
      if (s==true) {
       $('#email').val('');
       
       $('#toemail').css("display", "block");
      }
      else {
         
       $('#toemail').css("display", "none");

    </script> -->
  @endsection  
</body>
</html>