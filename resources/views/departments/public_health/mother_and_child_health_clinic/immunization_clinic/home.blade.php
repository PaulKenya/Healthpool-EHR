@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Immunization Clinic</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('ic_cold_chain_monitoring')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Cold Chain Monitoring</a>
                    <a href="{{route('ic_immunization_register')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Immunization Register</a>
                </div>
            </div>
        </div>
    </div>

@endsection