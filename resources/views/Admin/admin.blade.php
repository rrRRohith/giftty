<!DOCTYPE html>
<html lang="en">

<head>
    <title>Treva - UIKit</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="admin/images/favicon.png" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="admin/css/style.css">
    <script src="admin/js/vendor-all.min.js"></script>

</head>

<body>
    <div class="auth-wrapper align-items-stretch aut-bg-img aut-bg-img2">
        <div class="flex-grow-1">
            <div class="h-100 d-md-flex align-items-center auth-side-img">
                <div class="col-sm-10 auth-content w-auto">
                </div>
            </div>
            <div class="auth-side-form">
                <div class="auth-content">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <div class="text-center">
                                <img src="" alt="" class="img-fluid mb-5">
                                <h1 class="f-w-400">Hi there, please log in</h1>
                            </div>
                            <form class="my-5">
                                @csrf
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block mb-4">Login</button>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="chklog1">
                                                <label class="custom-control-label" for="chklog1">Remind me</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-cont text-center">
                    <h6 class="mb-0 text-muted">©2001–2019 All Rights Reserved. Treva®</h6>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="{{asset('assets/admin/js/plugins/bootstrap.min.js')}}"></script>
    <scdript src="{{asset('assets/admin/js/pcoded.min.js')}}">
        </script>



</body>

</html>