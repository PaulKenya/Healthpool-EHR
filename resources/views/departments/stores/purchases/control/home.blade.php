@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Control</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('stores_control_incoming_products')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Incoming Products</a>
                    <a href="{{route('stores_control_vendor_bills')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Vendor Bills</a>
                </div>
            </div>
        </div>
    </div>
@endsection
