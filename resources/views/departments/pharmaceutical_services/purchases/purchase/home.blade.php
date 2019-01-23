@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Purchase</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('pharmacy_purchases_purchase_orders')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Purchase Orders</a>
                    <a href="{{route('pharmacy_request_for_quotation')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Request for Quotation</a>
                    <a href="{{route('pharmacy_purchase_products')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Products</a>
                    <a href="{{route('pharmacy_purchase_vendors')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Vendors</a>
                </div>
            </div>
        </div>
    </div>
@endsection
