@extends('layouts.vendor')
@section('content')
<section id="vendor-page">
    <div class="row">
        <div class="col-sm-3">
          <aside>
            <nav>
                <h3>Folders</h3>
                <ul>
                     <li><a href="{{url('seller/profile')}}"><i class="fa fa-inbox"></i> Edit Profile</a></li>
                    <li><a href="{{url('seller/change-password')}}"><i class="fa fa-edit"></i> Change Password</a></li>
                    <li><a href="{{url('seller/logout')}}"><i class="fa fa-paper-plane"></i> Logout</a></li>
                </ul>  
            </nav>
          </aside>
        </div>
        <div class="col-sm-9">
                <article>
                    <h1><span><i class="fa fa-lock"></i> Change Password</span></h1>
                    <div class="content-box">

                        @if($errors->count())
                            <div class="alert alert-danger alert-dismissable">
                                Sorry some errors in form submission
                            </div> 
                        @endif
                         
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                            {!! session()->get('message') !!}
                            </div>
                        @endif

                        <div class="content-box-body">
                            <form action="" method="post" enctype="multipart/form-data">
                            @csrf     

                                <div class="row">
                            
                                        <input type="hidden" class="form-control" name="user" value="{{auth()->id()}}" >
                                        <div class="col-sm-6 form-group">   
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" >
                                            <span class="form-error">{{$errors->first('password')}}</span>
                                        </div>
                                       <div class="col-sm-6 form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password">
                                            <span class="form-error">{{$errors->first('confirm_password')}}</span>
                                        </div>

                                        <div class="col-sm-12 form-group">

                                            <button class="btn btn-primary" >Save</button>

                                        </div>
                                    
                              
                                </div>
                           </form> 
                       </div>    
                    </div>
                </article>
            </section>
        </div>
    </div><!-- end of row //-->
</section>
@endsection