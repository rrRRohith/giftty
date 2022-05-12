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
                            <h1 class="d-inline-block font-weight-normal mb-0"> @if(isset($vendor_category)) Edit @else Create New Vendor Category @endif  </h1>
                    </div>
                    <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                            <a href="{{url('admin/vendor-categories')}}" class="btn d-block ml-auto btn-primary" role="button"><i class="feather icon-plus mr-2"></i>Back to Categories</a>
                        <div class="btn-group btn-group-toggle btn-group-link">
                        </div>
                    </div>
                </div>     
                <div class="card">
                    <div class="card-body">

                        <form
                            action="@if(isset($vendor_category)){{admin('vendor-categories/'.$vendor_category->id)}}@else{{admin('vendor-categories')}}@endif"
                            class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">

                            @if(isset($vendor_category)) @method('PUT') @endif

                            {{ csrf_field() }}
                            
                          

                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">Category Name</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{old('name',isset($vendor_category) ? $vendor_category->name:'')}}">
                                <span class="form-error">{{$errors->first('name')}}</span>
                            </div>

                            <div class="form-group mb-4">
                                <label class="h6 f-12">Shipping Policy</label>
                                <textarea rows="8" column="200" class="form-control"
                                    name="shipping_policy">{{old('shipping_policy',isset($vendor_category) ? $vendor_category->shipping_policy:'')}}</textarea>
                                <span class="form-error">{{$errors->first('shipping_policy')}}</span>
                            </div>

                            <div class="form-group mb-4">
                                <label class="h6 f-12">Frequently Asked Questions</label>
                                <div id="faq-items">
                                    @if(isset($vendor_category))

                                        @foreach($vendor_category->faqs as $faq)

                                            <div class="faq-item">
                                                <input type="text" name="faq[]" class="form-control mb-2" placeholder="Question?" value="{{$faq->question}}"/>
                                                <textarea class="form-control" name="faa[]" rows="2" placeholder="Answer!">{{$faq->answer}}</textarea>
                                                <a href="#" data-id="{{$faq->id}}" class="delete-faq-item pull-right-trash"><i class="fa fa-trash"></i></a>
                                            </div>

                                        @endforeach

                                    @else
                                    <div class="faq-item">
                                        <input type="text" name="faq[]"  class="form-control mb-2" placeholder="Question?" />
                                        <textarea class="form-control" name="faa[]" rows="2" placeholder="Answer!"></textarea>
                                        <a href="#" class="delete-faq-item pull-right-trash"><i class="fa fa-trash"></i></a>
                                    </div>
                                    @endif
                                </div>
                                <a href="#" id="add-faq-item"  class="btn btn-sm btn-default">
                                    Add more FAQ
                                </a>
                            </div>

                            <div class="custom-control custom-switch custom-control-inline">
                                <input type="checkbox" class="custom-control-input input-success" name="status"
                                    id="customswitchclr3" @if(old('status',isset($vendor_category) ? $vendor_category->status:0) == 1)
                                checked @endif>
                                <label class="custom-control-label" for="customswitchclr3">
                                    Active
                                </label>
                            </div>

                            <button class="btn btn-primary btn-block mt-3" type="submit"> @if(isset($vendor_category)) Update Vendor Category @else
                                Add  Vendor Category @endif</button>

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
<script src="{{asset('assets/admin/js/plugins/croppie.js')}}"></script>
<script src="croppie.js"></script>
<script src="{% static 'ImageCropper/image-cropper.js' %}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{asset('assets/admin/js/plugins/select2.full.min.js')}}"></script>
<script>
 


 $(document).ready(function(){

    var varianthtml = '<input type="text" name="faq[]" value="" class="form-control mb-2" placeholder="Question?" /><textarea class="form-control" name="faa[]" rows="2" placeholder="Answer!"></textarea><a href="#" class="delete-faq-item pull-right-trash"><i class="fa fa-trash"></i></a>';

    $("#add-faq-item").click(function(e){
        e.preventDefault();
        $('<div class="faq-item">' + varianthtml + '</div>' ).appendTo("#faq-items")
    });

    $("body").delegate(".delete-faq-item","click",function(e){
        e.preventDefault();
           $(this).parent().remove();
      
        var id = $(this).data("id");
         $.ajax(
        {
            url: "{{url('admin/faq/delete')}}/"+id,
            type: 'GET',
            dataType: "JSON",
          
            success: function ()
            {
                console.log("it Work");
               
            }
        })   
    });
   // $(".delete-faq-item").click(function(){
   //  $(this).remove();
   // });
   

});


</script>

@endsection