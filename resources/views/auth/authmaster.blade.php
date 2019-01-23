<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themezhub.com/demo/live-preview-glovia/glovia/layout-one/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Mar 2018 16:27:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Healthpool EHR</title>

    @include('auth.authheader')
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="hidden-xs hidden-sm col-lg-4 col-md-4 gredient-bg">
                    <div class="clearfix">
                        <div class="logo-title-container text-center">
                            <h3 class="cl-white text-upper">Welcome To Healthpool EHR</h3>
                            <!-- <img class="img-responsive" src="assets/dist/img/logo.png" alt="Logo Icon"> -->
                            <div class="copy animated fadeIn">
                                <p class="cl-white">World first & best and most comprehensive<br> EHR System in the world</p>
                            </div>
                        </div> <!-- .logo-title-container -->
                    </div>
                </div>
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('message') }}
                    </div>
                @endif
                @yield('content')

            </div>
@include('auth.authfooter')
