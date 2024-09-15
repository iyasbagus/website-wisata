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

  @include('layouts.footer')

     <div class="content-body p-5">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Element</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Wisata</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tampil</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tampil Data Wisata</h4>
                            </div>
                            <div class="card">
                                 </div>
                            <div class="card-body">
                                 <form action="{{route('wisata.store')}}" method="POST">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Wisata</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tema_event" value="{{$wisata->nama_wisata}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kategori</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="kategori" value="{{$wisata->kategori->kategori}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Lokasi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama_lokasi" value="{{$wisata->lokasi->nama_lokasi}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="deskripsi" value="{{$wisata->deskripsi}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <a href="{{url('wisata')}}"class="btn btn-primary">Back</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>

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