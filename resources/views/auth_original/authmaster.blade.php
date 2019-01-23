@include('layouts.header')
<body class="" id="page-top">
    <div class="container-fluid">
        <div class="row">
            <div class="hidden-xs hidden-sm col-lg-6 col-md-6 gredient-bg">
                <div class="clearfix">
                    <div class="logo-title-container text-center">
                        <h3 class="cl-white text-upper">Welcome To Healthpool EHR</h3>
                        {{--<img class="img-responsive" src="assets/dist/img/logo.png" alt="Logo Icon">--}}
                        <div class="copy animated fadeIn">
                            <p class="cl-white">World first & best and most comprehensive<br> EHR System in the world</p>
                        </div>
                    </div> <!-- .logo-title-container -->
                </div>
            </div>
            @yield('content')

        </div>
    </div>
