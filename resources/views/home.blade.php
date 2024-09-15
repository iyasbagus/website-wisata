<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('atmin/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('atmin/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('atmin/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{asset('atmin/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('atmin/css/style.css')}}" rel="stylesheet">



</head>

<body>

  @include('layouts.navbar')

  @include('layouts.sidebar')

  @include('layouts.content')

  @include('layouts.footer')

  <!-- Required vendors -->
    <script src="{{asset('atmin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('atmin/js/quixnav-init.js')}}"></script>
    <script src="{{asset('atmin/js/custom.min.js')}}"></script>


    <!-- Vectormap -->
    <script src="{{asset('atmin/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('atmin/vendor/morris/morris.min.js')}}"></script>


    <script src="{{asset('atmin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('atmin/vendor/chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{asset('atmin/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

    <!--  flot-chart js -->
    <script src="{{asset('atmin/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('atmin/vendor/flot/jquery.flot.resize.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('atmin/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <!-- Counter Up -->
    <script src="{{asset('atmin/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('atmin/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('atmin/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>


    <script src="{{asset('atmin/js/dashboard/dashboard-1.js')}}"></script>

</body>

</html>