@extends('layouts.vendor')
@section('styles')
<style>
    
    #billing-address {
        border: 1px sollid #DDD;
        padding: 25px;
    }
    
    
</style>

@endsection

@section('content')
<section id="vendor-page">
    <div class="row">
        
        <div class="col-sm-12">

            <article>

                <h1><span><i class="fa fa-gift"></i> Order Details #{{$item->id}}</span></h1>

                @if(session()->has('message'))
                    {!! session('message') !!}
                @endif
                
                <div class="row">
                    <div class="col-sm-6">
                        <address id="billing-address">
                            <h4>Delivery Address</h4>
                            {{$item->cart->delivery->firstname.' '.$item->cart->delivery->lastname}}<br/>
                            {{$item->cart->delivery->address}} ({{$item->cart->delivery->location_type}})<br/>
                            {{$item->cart->delivery->postalcode}} {{$item->cart->delivery->city}} {{$item->cart->delivery->province}}<br/>
                            
                            Phone: <a href="tel: {{'+1'.$item->cart->delivery->phone}}">{{'+1'.$item->cart->delivery->phone}}</a><br/>
                        </address>
                    </div>
                    <div class="col-sm-6">
                        
                    </div>
                </div>

               
                <table class="table table-center table-strip table-vendors table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>&nbsp;</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                               
                                <td><img src="{{asset('/images/products/'.$item->product_picture)}}"  style="height:200px;width:auto;" /></td>
                                <td>
                                   <h3>{{$item->product_name}}</h3>
                                   <p>SKU: {{$item->product_sku}}</p>
                                   <p>Variant: {{$item->variant_name}}</p>
                                </td>
                                <td class="text-center">{{$item->quantity}}</td>
                                <td class="text-right">{{showPrice($item->quantity*$item->price)}}</td>
                               
                            </tr>
                           
                    </tbody>
                 </table> 
                 
                 <div class="mb-4">
                    <form action="" method="POST">
                        @csrf

                        <select name="status" class="form-control" style="max-width: 200px; display:inline;">
                            <option value="1" @if($item->status === 1) selected="selected" @endif >Pending</option>
                            <option value="2" @if($item->status === 2) selected="selected" @endif>Accepted</option>
                            <option value="3" @if($item->status === 3) selected="selected" @endif>Processing</option>
                            <option value="4" @if($item->status === 4) selected="selected" @endif>Shipped</option>
                            <option value="5" @if($item->status === 5) selected="selected" @endif>Delivered</option>
                        </select>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                 </div>
                    
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