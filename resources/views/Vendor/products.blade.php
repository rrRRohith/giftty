@extends('layouts.vendor')
@section('styles')
<!-- <link rel="stylesheet" href="croppie.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css"/>

@endsection

@section('content')
<section id="vendor-page">
    <div class="row">
        
        <div class="col-sm-12">

            <article>

                <h1><a href="{{seller('products/create')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> New Product</a> <span><i class="fa fa-gift"></i> Products</span></h1>

                @if(session()->has('message'))
                    {!! session('message') !!}
                @endif



                <div class="content-box">
                    <div class="content-box-header">
                        <h4>{{'Showing all '.count($products).' products'}}</h4>
                    </div>

                    <div class="content-box-body"> 
                        
                        <div class="row">

                            @foreach($products as $product)
                                <div class="col-sm-3 mb-4">
                                    <div class="product-thumbnail">
                                        <a href="{{seller('products/'.$product->id.'/edit')}}">
                                            <figure class="product-image">
                                                <img src="{!!$product->picture != '' ? asset('images/products/'.$product->id.'/'.$product->picture):asset('images/products/dummy-image.jpg')!!}" style="width:245px;height:auto;"/>

                                            </figure>
                                            <div class="product-info">
                                                <small>SKU:{{$product->sku}}</small>
                                                <h3>{{$product->name}}</h3>
                                              <!--   <p>{{truncateSentence($product->description,80).'...'}}</p> -->
                                              @if(isset($product->variants[0]) )
                                              {{showPrice($product->variants[0]->price)}}
                                              @endif
                                            </div>
                                        </a>
                                        <div class="product-action">
                                            <a href="{{seller('products/'.$product->id.'/edit')}}" class="btn"><i class="fa fa-edit"></i>Edit</a>
                                            <a href="{{seller('products/'.$product->id.'/delete')}}"  onclick="javascript:return confirm('Do you want to delete the Product');" class="btn pull-right"><i class="fa fa-trash"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div><!-- Content box //-->
            </article>

        </div>
    </div><!-- end of row //-->


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
</section>

@endsection
<!-- [ Main Content ] end -->

@push('bottom-scripts')


<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>

<script>
    var image_crop = $('#image_demo').croppie({
    viewport: {
        width: 250,
        height: 250,
        type: 'square'
    },
    boundary: {
        width: 350,
        height: 350
    }
});
/// catching up the cover_image change event and binding the image into my croppie. Then show the modal.
$('#logo_pic').on('change', function() {
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
        $("#logo_image").val(response);
    });
    $("#logo_pic").val("");
    $('#uploadimageModal').modal('hide');
});

$(document).ready(function(){
    $('.phone').inputmask('999-999-9999');
    $('.postalcode').inputmask('A9A 9A9');
});


</script>

@endpush