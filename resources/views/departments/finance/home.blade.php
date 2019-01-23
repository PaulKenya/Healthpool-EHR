@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Finance</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('finance_accounting')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Accounting</a>
                    <a href="{{route('finance_banking')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Banking</a>
                    <a href="{{route('finance_billing')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Billing</a>
                    <a href="{{route('finance_budgets')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Budgets</a>
                    <a href="{{route('finance_employees')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Employees</a>
                    <a href="{{route('finance_expenses')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Expenses</a>
                    <a href="{{route('finance_insurance')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Insurance</a>
                    <a href="{{route('finance_invoice')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Invoice</a>
                    <a href="{{route('finance_sales')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Sales</a>
                    <a href="" class="btn btn-lg btn-primary" style="margin: 5px;">Reports</a>
                    <a href="{{route('finance_taxes')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Taxes</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Profit and Loss</h4>
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
                    <h4 class="mb-0">Expenses</h4>
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
    <div class="row">
    </div>
@endsection
