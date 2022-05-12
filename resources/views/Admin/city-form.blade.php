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
                            <h1 class="d-inline-block font-weight-normal mb-0">  @if(isset($city)) Edit @else Create New City @endif </h1>
                        </div>
                        <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                            <a href="{{url('admin/cities')}}" class="btn d-block ml-auto btn-primary" role="button"><i class="feather icon-plus mr-2"></i>Back to Cities</a>
                            <div class="btn-group btn-group-toggle btn-group-link">
                            </div>
                        </div>
                </div> 


                <div class="card">
                    <div class="card-body">

                       

                        <form action="@if(isset($city)){{admin('cities/'.$city->id)}}@else{{admin('cities')}}@endif"
                            class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">

                            @if(isset($city)) @method('PUT') @endif

                            {{ csrf_field() }}

                            <div class="form-group mb-4">
                                <label class="h6 f-12">City Name</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{old('name',isset($city) ? $city->name:'')}}" autocomplete="off">
                                <span class="form-error">{{$errors->first('name')}}</span>
                            </div>

                            <div class="form-group mb-4">
                                <label class="h6 f-12">Province</label>
                                <select class="form-control" name="province">
                                    <option value=""> -- Select Province --</option>
                                    @foreach($provinces as $province)
                                    <option value="{{$province->short_code}}"
                                        <?php echo old('province',isset($city) ? $city->province:'') == $province->short_code  ? 'selected="selected"':''; ?>>
                                        {!!$province->name!!}
                                    </option>
                                    @endforeach
                                </select>
                                <span class="form-error">{{$errors->first('province')}}</span>
                            </div>


                            <div class="form-group mb-4">
                                <label class="h6 f-12">Latitude</label>
                                <input type="text" class="form-control" name="latitude"
                                    value="{{old('latitude',isset($city) ? $city->latitude:'')}}" autocomplete="off">
                                <span class="form-error">{{$errors->first('latitude')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12">Longitude</label>
                                <input type="text" class="form-control" name="longitude"
                                    value="{{old('longitude',isset($city) ? $city->longitude:'')}}" autocomplete="off">
                                <span class="form-error">{{$errors->first('longitude')}}</span>
                            </div>

                            <div class="custom-control custom-switch custom-control-inline">
                                <input type="checkbox" class="custom-control-input input-success" name="status"
                                    id="customswitchclr3" @if(old('status',isset($city) ? $city->status:0) == 1) checked
                                @endif>
                                <label class="custom-control-label" for="customswitchclr3">
                                    Active
                                </label>
                            </div>

                            <button class="btn btn-primary btn-block mt-3"> @if(isset($city)) Update City @else Add City
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



@endsection
<!-- [ Main Content ] end -->

@section('bottom-scripts')
<script src="{{asset('admin/js/plugins/croppie.js')}}"></script>
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