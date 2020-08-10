
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{url("")}}/template-admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{url("")}}/template-admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{url("")}}/template-admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{url("")}}/template-admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url("")}}/template-admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url("")}}/template-admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{url("")}}/template-admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{url("")}}/template-admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{url("")}}/template-admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{url("")}}/template-admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{url("")}}/template-admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{url("")}}/template-admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url("")}}/template-admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="{{url("")}}/template-admin/#">
                            <img src="{{url("")}}/template-admin/images/icon/logo.png" alt="CoolAdmin">
                        </a>
                    </div>
                    <div class="login-form">
                        @if(Session::has('msg'))
                            <div class="alert alert-danger">{!! Session::get('msg') !!}</div>
                        @endif
                        <form method="post" action="{{route("auth_check")}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                                <label class="pull-right">
{{--                                                                        <a href="{{url("")}}/template-admin/#">Forgotten Password?</a>--}}
                                </label>

                            </div>
                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                            <a href="{{url("")}}" class="btn btn-info"><span class="fa fa-home"></span> Beranda</a>
                            <div class="register-link m-t-15 text-center">
                                <h4>LOGIN ADMIN WISATA</h4>
                                {{--                                <p>Don't have account ? <a href="{{url("")}}/template-admin/#"> Sign Up Here</a></p>--}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Jquery JS-->
<script src="{{url("")}}/template-admin/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="{{url("")}}/template-admin/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="{{url("")}}/template-admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="{{url("")}}/template-admin/vendor/slick/slick.min.js">
</script>
<script src="{{url("")}}/template-admin/vendor/wow/wow.min.js"></script>
<script src="{{url("")}}/template-admin/vendor/animsition/animsition.min.js"></script>
<script src="{{url("")}}/template-admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="{{url("")}}/template-admin/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="{{url("")}}/template-admin/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="{{url("")}}/template-admin/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{url("")}}/template-admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{url("")}}/template-admin/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="{{url("")}}/template-admin/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="{{url("")}}/template-admin/js/main.js"></script>

</body>

</html>
<!-- end document-->