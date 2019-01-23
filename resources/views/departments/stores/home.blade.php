@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Stores</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('stores_purchases')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Purchases</a>
                    <a href="{{route('stores_inventory')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Inventory</a>
                    <a href="{{route('orders')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Orders</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Stores Summary</h4>
                </div>
                <div class="card-body">
                    <h3 class="mb-0">Kshs 1,311,000</h3>
                    <h6>NET INCOME FOR MARCH</h6>
                    <canvas id="bar-chart-horizontal-profit-and-loss" width="800" height="450"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Stores Expenses</h4>
                </div>
                <div class="card-body">
                    <canvas id="bar-chart" width="800" height="450"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Income</h4>
                </div>
                <div class="card-body">
                    <canvas id="bar-chart-horizontal-income" width="800" height="450"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Sales</h4>
                </div>
                <div class="card-body">
                    <canvas id="pie-chart" width="800" height="450"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
