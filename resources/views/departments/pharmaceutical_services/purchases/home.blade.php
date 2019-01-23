@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Purchases</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('pharmacy_purchases_control')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Control</a>
                    <a href="{{route('pharmacy_purchases_purchase')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Purchase</a>
                    <a href="{{route('pharmacy_purchases_reporting')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Reporting</a>
                </div>
            </div>
        </div>
    </div>
@endsection
