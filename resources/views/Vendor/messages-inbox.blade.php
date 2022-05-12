@extends('layouts.vendor')
@section('styles')
<!-- <link rel="stylesheet" href="croppie.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css"/>

@endsection

@section('content')
<section id="vendor-page">
    <div class="row">
         <div class="col-sm-2">
          <aside>
            <nav>
                <h3>Folders</h3>
                <ul>
                    <li><a href="{{url('seller/messages')}}"><i class="fa fa-inbox"></i> Inbox</a></li>
                    <li><a href="{{url('seller/messages/compose')}}"><i class="fa fa-edit"></i> Compose</a></li>
                    <li><a href="{{url('seller/messages/sent')}}"><i class="fa fa-paper-plane"></i> Sent</a></li>
                    <li><a href="{{url('seller/messages/trash')}}"><i class="fa fa-trash"></i>Trash</a></li>
                </ul>
                
            </nav>
          </aside>
        </div>
        <div class="col-sm-10">

            <article>

                <h1>
                    
                    <span><i class="fa fa-inbox"></i> Messages - Inbox</span></h1>

                @if(session()->has('message'))
                    {!! session('message') !!}
                @endif

                <div class="content-box">
                    <div class="content-box-body"> 
                        
                        @if(count($messages))
                        <table id="usertable" class="table table-center table-strip">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>From</th>
                                    <th>Subject</th>
                                    <th>Recieved at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)

                                <tr @if($message->read_at =='') class="font-weight-bold" @endif>
                                    <td>
                                        @if($message->read_at =='')
                                        <i class="fa fa-envelope font-weight-bold"></i>
                                        @else
                                        <i class="fa fa-envelope-open"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('seller/messages/'.$message->id.'/view')}}">{{$message->sender->fullname}}</a>
                                    </td>
                                    <td><a href="{{ url('seller/messages/'.$message->id.'/view')}}">{{$message->subject}}</a>
                                    </td>
                                    <td><a href="{{ url('seller/messages/'.$message->id.'/view')}}">{{$message->created_at->diffForHumans()}}</a>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ url('seller/messages/'.$message->id.'/deleteInbox')}}" onclick="javascript:return confirm('Do you want to delete the message');" class="btn btn-deafult">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                     </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        @else
                        <p class="empty-message">No messages</p>
                        @endif

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