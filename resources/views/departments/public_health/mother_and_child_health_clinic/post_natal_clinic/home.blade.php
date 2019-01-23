@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Postnatal Clinic</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('pnc_moh_406_post_natal_register')}}" class="btn btn-lg btn-primary" style="margin: 5px;">MOH 406 Postnatal Register form</a>
                </div>
            </div>
        </div>
    </div>

@endsection