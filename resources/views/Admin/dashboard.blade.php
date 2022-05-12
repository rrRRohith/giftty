@extends('layouts.layout')
@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content container">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-6">
                <h2 class="font-weight-normal">Hi Ashoka, Welcome back!</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit donec sed odio dui.</p>
                <div id="dashboarddatepicker1" class="form-control d-inline-block w-auto mb-4">
                    <i class="feather icon-calendar"></i>&nbsp;
                    <span></span> <i class="feather icon-chevron-down"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div id="opentask-taskchart1"></div>
                                <h5 class="text-success">10.5%<i class="mr-2 ml-1 feather icon-arrow-up"></i><small class="text-body">Since last week</small></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div id="opentask-taskchart2"></div>
                                <h5 class="text-danger">10.5%<i class="mr-2 ml-1 feather icon-arrow-up"></i><small class="text-body">Since last week</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2 class="font-weight-normal mb-4">Tasks by Team</h2>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div id="taskfull-dashboard-chart1" class="my-2"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-3"><i class="fas fa-circle text-c-blue f-10 m-r-10"></i>Engineering <span class="float-right h6 mb-0 text-body">11</span></p>
                                        <p class="mb-3"><i class="fas fa-circle text-c-green f-10 m-r-10"></i>Creative <span class="float-right h6 mb-0 text-body">7</span></p>
                                        <p class="mb-3"><i class="fas fa-circle text-c-red f-10 m-r-10"></i>Finance <span class="float-right h6 mb-0 text-body">4</span></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-3"><i class="fas fa-circle text-c-yellow f-10 m-r-10"></i>Marketing <span class="float-right h6 mb-0 text-body">6</span></p>
                                        <p class="mb-3"><i class="fas fa-circle text-c-purple f-10 m-r-10"></i>Product design <span class="float-right h6 mb-0 text-body">28</span></p>
                                        <p class="mb-3"><i class="fas fa-circle text-c-red f-10 m-r-10"></i>User research <span class="float-right h6 mb-0 text-body">9</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row align-items-center justify-content-between mb-4">
                            <div class="col-auto">
                                <h2 class="font-weight-normal mb-0">Weekly Variation</h2>
                            </div>
                            <div class="col-6">
                                <div class="row justify-content-end d-none d-sm-flex">
                                    <div class="col-auto">
                                        <span class=""><i class="fas fa-circle text-danger f-10 m-r-5"></i>Overdue</span>
                                    </div>
                                    <div class="col-auto">
                                        <span class=""><i class="fas fa-circle text-warning f-10 m-r-5"></i>Open</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <h6 class="text-body text-uppercase">Creative</h6>
                                <div class="progress my-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"></div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%"></div>
                                </div>
                                <p class="text-success d-inline-block mb-0">1.9%<i class="mr-2 ml-1 feather icon-arrow-up"></i></p>
                                <p class="d-inline-block">Last 7 days</p>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <h6 class="text-body text-uppercase">Engineering</h6>
                                <div class="progress my-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"></div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%"></div>
                                </div>
                                <p class="text-success d-inline-block mb-0">1.9%<i class="mr-2 ml-1 feather icon-arrow-up"></i></p>
                                <p class="d-inline-block">Last 7 days</p>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <h6 class="text-body text-uppercase">Finance</h6>
                                <div class="progress my-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"></div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%"></div>
                                </div>
                                <p class="text-success d-inline-block mb-0">1.9%<i class="mr-2 ml-1 feather icon-arrow-up"></i></p>
                                <p class="d-inline-block">Last 7 days</p>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <h6 class="text-body text-uppercase">Marketing</h6>
                                <div class="progress my-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"></div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%"></div>
                                </div>
                                <p class="text-danger d-inline-block mb-0">9.3%<i class="mr-2 ml-1 feather icon-arrow-down"></i></p>
                                <p class="d-inline-block">Last 7 days</p>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <h6 class="text-body text-uppercase">product design</h6>
                                <div class="progress my-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"></div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%"></div>
                                </div>
                                <p class="text-success d-inline-block mb-0">1.9%<i class="mr-2 ml-1 feather icon-arrow-up"></i></p>
                                <p class="d-inline-block">Last 7 days</p>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <h6 class="text-body text-uppercase">uwer research</h6>
                                <div class="progress my-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"></div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%"></div>
                                </div>
                                <p class="text-danger d-inline-block mb-0">9.3%<i class="mr-2 ml-1 feather icon-arrow-down"></i></p>
                                <p class="d-inline-block">Last 7 days</p>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="text-center">
                            <a href="#!" class="text-body">See all</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center justify-content-between mb-4">
                            <div class="col-auto">
                                <h2 class="font-weight-normal mb-0">Weekly Variation</h2>
                            </div>
                            <div class="col-6">
                                <div class="row justify-content-end d-none d-sm-flex">
                                    <div class="col-auto">
                                        <span class=""><i class="fas fa-circle text-danger f-10 m-r-5"></i>Overdue</span>
                                    </div>
                                    <div class="col-auto">
                                        <span class=""><i class="fas fa-circle text-warning f-10 m-r-5"></i>Open</span>
                                    </div>
                                    <div class="col-auto">
                                        <span class=""><i class="fas fa-circle text-success f-10 m-r-5"></i>Completed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="dashboardtastbar4"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-4 border rounded">
                                    <h1 class="display-4 d-inline-block font-weight-normal">16</h1>
                                    <p class="text-danger d-inline-block mb-0">4.9%<i class="mr-2 ml-1 feather icon-arrow-down"></i></p>
                                    <p class="text-uppercase">Overdue</p>
                                    <div class="rounded bg-light p-3">
                                        <div class="media align-items-center">
                                            <i class="feather icon-alert-circle h2 mb-0"></i>
                                            <div class="media-body ml-3">
                                                Friday was the day with the most overdue tasks
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <div id="dashboardtastbar5"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-4 border rounded">
                                    <h1 class="display-4 d-inline-block font-weight-normal">21</h1>
                                    <p class="text-success d-inline-block mb-0">1.9%<i class="mr-2 ml-1 feather icon-arrow-up"></i></p>
                                    <p class="text-uppercase">Overdue</p>
                                    <div class="rounded bg-light p-3">
                                        <div class="media align-items-center">
                                            <i class="feather icon-alert-circle h2 mb-0"></i>
                                            <div class="media-body ml-3">
                                                Monday was the day with the most tasks open
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <div id="dashboardtastbar6"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-4 border rounded">
                                    <h1 class="display-4 d-inline-block font-weight-normal">16</h1>
                                    <p class="text-success d-inline-block mb-0">1.9%<i class="mr-2 ml-1 feather icon-arrow-up"></i></p>
                                    <p class="text-uppercase">Overdue</p>
                                    <div class="rounded bg-light p-3">
                                        <div class="media align-items-center">
                                            <i class="feather icon-alert-circle h2 mb-0"></i>
                                            <div class="media-body ml-3">
                                                Wednesday was the day with the most tasks completed
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mb-2">
                                <h2 class="font-weight-normal mb-0">Tasks by Project</h2>
                            </div>
                            <div class="col-auto mb-2">
                                <div class="form-group float-right mb-0">
                                    <div id="dashboardtaskreportrange2" class="form-control border-0">
                                        <i class="feather icon-calendar"></i>&nbsp;
                                        <span></span> <i class="feather icon-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless post-table table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>user name</th>
                                        <th>Tasks</th>
                                        <th class="w-25"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <span class="avtar text-purple-2 bg-purple-1 avtar-xs  mr-3">PR</span>
                                                <div class="media-body">
                                                    <h6 class="mb-0 font-weight-normal">Leila Medina</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            32 <span class="text-success"><i class="mr-1 ml-2 feather icon-arrow-up"></i>10</span>
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <span class="avtar text-yellow-2 bg-yellow-1 avtar-xs  mr-3">LO</span>
                                                <div class="media-body">
                                                    <h6 class="mb-0 font-weight-normal">Rose Morgan</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            25 <span class="text-danger"><i class="mr-1 ml-2 feather icon-arrow-down"></i>2</span>
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <span class="avtar text-teal-2 bg-teal-1 avtar-xs  mr-3">HS</span>
                                                <div class="media-body">
                                                    <h6 class="mb-0 font-weight-normal">Carolyn Walker</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            22 <span class="text-danger"><i class="mr-1 ml-2 feather icon-arrow-down"></i>3</span>
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <span class="avtar text-orange-2 bg-orange-1 avtar-xs  mr-3">AS</span>
                                                <div class="media-body">
                                                    <h6 class="mb-0 font-weight-normal">Susie Harvey</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            19 <span class="text-success"><i class="mr-1 ml-2 feather icon-arrow-up"></i>4</span>
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <span class="avtar text-blue-2 bg-blue-1 avtar-xs  mr-3">DV</span>
                                                <div class="media-body">
                                                    <h6 class="mb-0 font-weight-normal">Jonathan Gutierrez</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            14 <span class="text-danger"><i class="mr-1 ml-2 feather icon-arrow-down"></i>7</span>
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <span class="avtar text-red-2 bg-red-1 avtar-xs  mr-3">PA</span>
                                                <div class="media-body">
                                                    <h6 class="mb-0 font-weight-normal">Hannah Walsh</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            8 <span class="text-success"><i class="mr-1 ml-2 feather icon-arrow-up"></i>2</span>
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 55%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="font-weight-normal">Tasks by Project</h3>
                        <div id="taskfull-dashboard-chart2" class="mb-4 mt-5"></div>
                        <div>
                            <p class="mb-3"><i class="fas fa-circle text-c-blue f-10 m-r-10"></i>Incoming requests <span class="float-right h6 mb-0 text-body">11</span></p>
                            <p class="mb-3"><i class="fas fa-circle text-c-green f-10 m-r-10"></i>You have 2 pending requests.. <span class="float-right h6 mb-0 text-body">7</span></p>
                            <p class="mb-3"><i class="fas fa-circle text-c-red f-10 m-r-10"></i>You have 3 pending tasks <span class="float-right h6 mb-0 text-body">4</span></p>
                            <p class="mb-3"><i class="fas fa-circle text-c-yellow f-10 m-r-10"></i>New order received <span class="float-right h6 mb-0 text-body">6</span></p>
                            <p class="mb-3"><i class="fas fa-circle text-c-purple f-10 m-r-10"></i>Incoming requests <span class="float-right h6 mb-0 text-body">28</span></p>
                            <p class="mb-3"><i class="fas fa-circle text-c-red f-10 m-r-10"></i>You have 4 pending tasks <span class="float-right h6 mb-0 text-body">9</span></p>
                        </div>
                    </div>
                </div>
                <h3 class="mb-4">MY Activity</h3>
                <div class="media align-items-center mb-4">
                    <img src="assets/images/user/avatar-2.jpg" alt="images" class="img-fluid avtar avtar-xs">
                    <div class="media-body ml-3 align-self-center">
                        <h6 class="mb-0 d-inline-block">Luke S. </h6>
                        <p class="mb-0 d-inline-block"> 3 min ago</p>
                        <p class="mt-1 mb-0">Created task <span class="text-primary">Nulla vitae elit libero a pharetra.</span></p>
                    </div>
                </div>
                <div class="media align-items-center mb-4">
                    <img src="assets/images/user/avatar-3.jpg" alt="images" class="img-fluid avtar avtar-xs">
                    <div class="media-body ml-3 align-self-center">
                        <h6 class="mb-0 d-inline-block">Luke S. </h6>
                        <p class="mb-0 d-inline-block"> 5 min ago</p>
                        <p class="mt-1 mb-0">Completed task <span class="text-primary">Cantapibus dolor at ace</span></p>
                    </div>
                </div>
                <div class="media align-items-center mb-4">
                    <img src="assets/images/user/avatar-1.jpg" alt="images" class="img-fluid avtar avtar-xs">
                    <div class="media-body ml-3 align-self-center">
                        <h6 class="mb-0 d-inline-block">Luke S. </h6>
                        <p class="mb-0 d-inline-block"> 6 min ago</p>
                        <p class="mt-1 mb-0">Invite <span class="text-primary">Ashoka T.</span> to <span class="text-primary">Revamp Design System</span></p>
                    </div>
                </div>
                <div class="media align-items-center mb-4">
                    <img src="assets/images/user/avatar-2.jpg" alt="images" class="img-fluid avtar avtar-xs">
                    <div class="media-body ml-3 align-self-center">
                        <h6 class="mb-0 d-inline-block">Luke S. </h6>
                        <p class="mb-0 d-inline-block"> 8 min ago</p>
                        <p class="mt-1 mb-0">Created task <span class="text-primary">Nulla vitae elit libero a pharetra.</span></p>
                    </div>
                </div>
                <div class="media align-items-center mb-4">
                    <img src="assets/images/user/avatar-3.jpg" alt="images" class="img-fluid avtar avtar-xs">
                    <div class="media-body ml-3 align-self-center">
                        <h6 class="mb-0 d-inline-block">Luke S. </h6>
                        <p class="mb-0 d-inline-block"> 10 min ago</p>
                        <p class="mt-1 mb-0">Completed task <span class="text-primary">Cantapibus dolor at ace</span></p>
                    </div>
                </div>
                <div class="media align-items-center mb-4">
                    <img src="assets/images/user/avatar-1.jpg" alt="images" class="img-fluid avtar avtar-xs">
                    <div class="media-body ml-3 align-self-center">
                        <h6 class="mb-0 d-inline-block">Luke S. </h6>
                        <p class="mb-0 d-inline-block"> 12 min ago</p>
                        <p class="mt-1 mb-0">Invite <span class="text-primary">Ashoka T.</span> to <span class="text-primary">Revamp Design System</span></p>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <a href="#!" class="text-body">See all</a>
                </div>
            </div>
        </div>


@endsection