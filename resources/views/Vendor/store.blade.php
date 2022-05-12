@extends('layouts.vendor')

@section('styles')
<link rel="stylesheet" href="{{asset('assets/admin/css/plugins/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<section id="vendor-page">
    <div class="row">
        <div class="col-sm-3">
          <aside>
            <nav>
                <h3>Folders</h3>
                <ul>
                    <li><a href="{{url('seller/stores')}}"><i class="fa fa-gift"></i> All Stores</a></li>
                <!--     <li><a href="{{url('seller/messages/compose')}}"><i class="fa fa-edit"></i> Compose</a></li> -->
                 
                </ul>
                
            </nav>
          </aside>
        </div>
        <div class="col-sm-9">
                
                <article>
                    <h1>Stores</h1>

                 <!--    @if(count($stores)==0)
                            <a href="{{url('seller/stores/create')}}" class="btn d-block ml-auto  btn-light" role="button"><i class="feather icon-plus mr-2"></i>New Store</a>
                    @endif -->

                    <div class="content-box">

                        @if(session()->has('message'))
                            {!! session('message') !!}
                        @endif

                        @if(count($stores))
                        <table id="usertable" class="table table-center table-strip">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Province</th>
                                  <!--   <th>Status</th> -->
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($stores as $store)
                                <tr>
                                    <td>{{$store->id}}</td>
                                    <td>
                                        <img src="{!!$store->logo != '' ? asset('images/users/'.$store->id.'/'.$store->logo):asset('images/users/dummy-image.jpg')!!}"
                                        style="width:50px;height:50px;" />
                                    </td>
                                    <td>{{$store->name}}</td>
                                    <td>{{$store->email}}</td>
                                    <td>{{$store->address}}</td>
                                    <td>{{$store->province}}</td>
                           
                                    <td>{{$store->created_at->diffForHumans()}}</td>
                                    <td class="storeaction_column"><a href="{{ url('seller/stores/'.$store->id.'/edit')}}"><i class="fa fa-edit"></i></a> <a href="{{ url('seller/stores/'.$store->id.'/delete')}}" onclick="javascript:return confirm('Do you want to delete the stores');"
                                            ><i class="fa fa-trash" aria-hidden="true"></i>
                                    </a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        @else
                        <div class="emptyinbox_full">
                            <p class="empty-message">Your Store is empty!<a href="{{url('seller/stores/create')}}" style="color:red;"> &nbsp;Create the first Store</a></p>
                        </div>
                        @endif

                        

                    </div>
                </article>
            </section>
        </div>
    </div><!-- end of row //-->
</section>

@endsection
@section('bottom-scripts')
<!-- datatable Js -->
<script src="{{asset('assets/admin/js/plugins/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/dataTables.bootstrap4.min.js')}}"></script>

<script>
$(function() {
    $('#usertable').DataTable();
})
</script>
@endsection