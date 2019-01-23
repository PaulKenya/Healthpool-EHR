@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Sales</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('finance_sales_add_customer')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Add customer</a>
                    <a href="{{route('finance_sales_add_product_service')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Add product or service</a>
                    <a href="{{route('finance_sales_invoice')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Create Invoice</a>
                </div>
            </div>
        </div>
    </div>

@endsection()