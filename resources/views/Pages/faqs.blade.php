@extends('layouts.main')
@section('content')
<div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

        <!-- Start of Breadcrumbs -->
        <div class="breadcrumb-section bgc-offset mb-full">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="{{url('/')}}">Home</a>
                            <span class="breadcrumb-item active">FAQs</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper">
            
            <!-- Start of About US Section -->
            <section class="faqs-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="faqs-intro mb-half">
                                <div class="section-title">
                                    <h2>Welcome To Gifty FAQs!</h2>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div> <!-- end of row -->

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="faqs-area">
                                <div class="faqs-accordion" id="faqs_accordion">
                                    @if(isset($faqs) && count($faqs)>0)
                                    @foreach($faqs as $faq)
                                    <div class="card">
                                        <div class="card-header" id="heading{{$faq->id}}">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">{{$faq->question}}</button>
                                            </h5>
                                        </div>
                                        <div id="collapse{{$faq->id}}" class="collapse" aria-labelledby="heading{{$faq->id}}" data-parent="#faqs_accordion">
                                            <div class="card-body">
                                                <p>{{$faq->answer}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    @endif
                                    
                                </div>
                            </div> <!-- end of faqs-area -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of About US Section -->

            
        </main>
        <!-- End of Main Content Wrapper -->
        @endsection