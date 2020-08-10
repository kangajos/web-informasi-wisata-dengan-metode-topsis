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
    <title>WISATA | TOPSIS</title>

    <!-- Fontfaces CSS-->
    <link href="{{url("template-admin")}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{url("template-admin")}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet"
          media="all">
    <link href="{{url("template-admin")}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet"
          media="all">
    <link href="{{url("template-admin")}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet"
          media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url("template-admin")}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url("template-admin")}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{url("template-admin")}}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
          rel="stylesheet" media="all">
    <link href="{{url("template-admin")}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{url("template-admin")}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{url("template-admin")}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{url("template-admin")}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{url("template-admin")}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url("template-admin")}}/css/theme.css" rel="stylesheet" media="all">
    <style>
        th,td{
            font-size: 14px!important;
            font-weight: normal!important;
        }
        th{
            border-bottom: 1px dashed silver !important;
        }
    </style>
</head>

<body class="animsition">
<div class="page-wrapper">
{{--    header --}}
@include('partials.v_header')
@include('partials.v_sidebar')

{{--    content --}}
<!-- PAGE CONTAINER-->
    <div class="page-container">
    @include('partials.v_header_bar')
    <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield("title")</li>
                        </ol>
                    </nav>
                    @if(Session::has('msg'))
                        <div class="alert alert-warning"><span class="badge badge-danger">Warning : </span> {!! Session::get('msg') !!}</div>
                    @endif
                    @yield('content')
                </div>
                @include('partials.v_footer')
            </div>
        </div>
    </div>
{{--    endcontent--}}

<!-- Jquery JS-->
    <script src="{{url("template-admin")}}/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{url("template-admin")}}/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{url("template-admin")}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{url("template-admin")}}/vendor/slick/slick.min.js">
    </script>
    <script src="{{url("template-admin")}}/vendor/wow/wow.min.js"></script>
    <script src="{{url("template-admin")}}/vendor/animsition/animsition.min.js"></script>
    <script src="{{url("template-admin")}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{url("template-admin")}}/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{url("template-admin")}}/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{url("template-admin")}}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{url("template-admin")}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{url("template-admin")}}/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{url("template-admin")}}/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{url("template-admin")}}/js/main.js"></script>

</body>

</html>
<!-- end document-->

