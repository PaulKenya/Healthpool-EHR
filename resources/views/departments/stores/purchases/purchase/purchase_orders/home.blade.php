@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Purchase Orders</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('stores_po_new_deliveries_and_invoices')}}" class="btn btn-lg btn-primary" style="margin: 5px;">New Deliveries and Invoices</a>
                    <a href="{{route('stores_po_new_products')}}" class="btn btn-lg btn-primary" style="margin: 5px;">New Products</a>
                </div>
            </div>
        </div>
    </div>
@endsection
