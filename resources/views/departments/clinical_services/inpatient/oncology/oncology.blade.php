@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Oncology </h4>
        </div>
    </div>


    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Oncology </h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">

                    <a href="{{ Route::currentRouteName()}}/oncology_ward" class="btn waves-effect waves-light btn-primary">Oncology ward </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">

                    <a href="{{ Route::currentRouteName()}}/laboratory" class="btn waves-effect waves-light btn-primary">laboratory </a>
                    <a href="{{ Route::currentRouteName()}}/prescription" class="btn waves-effect waves-light btn-primary">prescription </a>
                    <a href="{{ Route::currentRouteName()}}/xray_request" class="btn waves-effect waves-light btn-primary">xray_request </a>
                </div>
            </div>
        </div>
    </div>






@endsection
