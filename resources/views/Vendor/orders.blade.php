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

                <h1>
                    
                    <span><i class="fa fa-gift"></i> Orders</span></h1>

                @if(session()->has('message'))
                    {!! session('message') !!}
                @endif

               
               @if(isset($orders))
                <table class="table table-center table-strip table-vendors">
                    <thead>
                        <tr>
                            <th>#PO</th>
                            <th>&nbsp;</th>
                            <th>Product</th>
                            <th>Status</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach($orders as $order)
                             @if(isset($order->carts))
                             @foreach($order->carts->items as $item)
                             <tr>
                                <td>{{$item->id}}</td>
                            
                                <td><img src="{!!$item->product_picture != '' ? asset('/images/products/'.$item->product_picture):asset('images/products/dummy-image.jpg')!!}"  style="height:50px;width:auto;" /></td>
                                <td>
                                   {{$item->product_name}}   
                                </td>
                                <td>@if($item->status===1) Pending @elseif($item->status===2) Accepted @elseif($item->status===3) Processing @elseif($item->status===4) Shipped @elseif($item->status===5) Delivered @else Pending @endif</td>
                                <td class="text-center">{{$item->quantity}}</td>
                                <td class="text-right">{{showPrice($item->quantity*$item->price)}}</td>
                               <td class="text-right"> 
                                    <a href="{{seller('orders/'.$item->id)}}" class="btn btn-success btn-sm"><i class="fas fa-cart-arrow-down"></i> Open</a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>   
                 @else
                 <tr><th style="text-align: center;color: red;" colspan="4">!! No Orders Found !!</th></tr>
                 @endif          
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