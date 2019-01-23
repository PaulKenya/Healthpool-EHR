@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h3 class="theme-cl">Surgical </h3>
        </div>
    </div>
    <div class="col-md-8 offset-1">
        {{--<a href="{{ Route('burnsunit')}}" class="btn waves-effect waves-light btn-primary">burnsunit</a>--}}
        <a href="{{ Route('general_surgical')}}" class="btn waves-effect waves-light btn-primary">general surgical</a>
        <a href="{{ Route('anaesthesia_home')}}" class="btn waves-effect waves-light btn-primary">Anaesthesia</a>
        <a href="{{ Route('general_surgery')}}" class="btn waves-effect waves-light btn-primary">general surgery</a>
        {{--<a href="{{ Route('orthopedicservices')}}" class="btn waves-effect waves-light btn-primary">orthopedicservices</a>--}}
        {{--<a href="{{ Route('rehabilitativeservices')}}" class="btn waves-effect waves-light btn-primary">rehabilitativeservices</a>--}}
        <a href="{{ Route('specialized_surgical_services')}}" class="btn waves-effect waves-light btn-primary">specialized surgical services</a>
    </div>






@endsection
