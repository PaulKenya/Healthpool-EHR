@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Child Welfare Clinic</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('cwc_moh_511')}}" class="btn btn-lg btn-primary" style="margin: 5px;">MOH 511 Form</a>
                    <a href="{{route('cwc_moh_511_cwc_register')}}" class="btn btn-lg btn-primary" style="margin: 5px;">MOH 511 Child Welfare Clinic (C.W.C) Register Form</a>
                </div>
            </div>
        </div>
    </div>

@endsection