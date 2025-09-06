<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bytedash - Admin Template</title>

    <!-- favicon -->
    <link rel=icon href="{{asset('web-assets')}}/favicons.png" sizes="16x16" type="icon/png">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('web-assets')}}/assets/css/animate.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('web-assets')}}/assets/css/bootstrap.min.css">
    <!-- All Icon -->
    <link rel="stylesheet" href="{{asset('web-assets')}}/assets/css/icon.css">
    <!-- slick carousel  -->
    <link rel="stylesheet" href="{{asset('web-assets')}}/assets/css/slick.css">
    <!-- Select2 Css -->
    <link rel="stylesheet" href="{{asset('web-assets')}}/assets/css/select2.min.css">
    <!-- Sweet alert Css -->
    <link rel="stylesheet" href="{{asset('web-assets')}}/assets/css/sweetalert.css">
    <!-- Flatpickr Css -->
    <link rel="stylesheet" href="{{asset('web-assets')}}/assets/css/flatpickr.min.css">
    <!-- Fancy box Css -->
    <link rel="stylesheet" href="{{asset('web-assets')}}/assets/css/fancybox.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('web-assets')}}/assets/css/dashboard.css">
    <!-- dark css -->

</head>

<body>
@include('include.left-bar')
@include('include.header')

<!-- preloader area start -->
@yield('loader')
<!-- preloader area end -->

<!-- Dashboard start -->
<div class="body-overlay"></div>
@yield('content')
<!-- Dashboard end -->



<!-- jquery -->
<script src="{{asset('web-assets')}}/assets/js/jquery-3.6.0.min.js"></script>
<!-- jquery Migrate -->
<script src="{{asset('web-assets')}}/assets/js/jquery-migrate.min.js"></script>
<!-- bootstrap -->
<script src="{{asset('web-assets')}}/assets/js/bootstrap.bundle.min.js"></script>
<!-- Slick Slider -->
<script src="{{asset('web-assets')}}/assets/js/slick.js"></script>
<!-- Plugins Js -->
<script src="{{asset('web-assets')}}/assets/js/plugin.js"></script>
<!-- Fancy box Js -->
<script src="{{asset('web-assets')}}/assets/js/fancybox.umd.js"></script>
<!-- Map Js -->
<script src="{{asset('web-assets')}}/assets/js/map/raphael.min.js"></script>
<script src="{{asset('web-assets')}}/assets/js/map/jquery.mapael.js"></script>
<script src="{{asset('web-assets')}}/assets/js/map/world_countries.js"></script>

<!-- main js -->
<script src="{{asset('web-assets')}}/assets/js/main.js"></script>


@yield('script')

</body>

</html>

