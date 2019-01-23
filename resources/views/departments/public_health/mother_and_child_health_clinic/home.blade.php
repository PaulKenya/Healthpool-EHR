@extends('layouts.master')

@section('content')

    <div id="mother_and_child_health_clinic">
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
    <div class="col-md-12 align-self-center">
    <h4 class="theme-cl">Mother and Child Health Clinic</h4>
    </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    <div class="row">
    <div class="col-md-12 col-sm-12">
    <div class="card" >
    <div class="card-block">
    <a href="{{route('anc_home')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Antenatal Clinic</a>
    <a href="{{route('cwc_home')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Child Welfare Clinic</a>
    <a href="{{route('fpc_home')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Family Planning Clinic</a>
    <a href="{{route('ic_home')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Immunization Clinic</a>
    <a href="{{route('pnc_home')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Postnatal Clinic</a>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection