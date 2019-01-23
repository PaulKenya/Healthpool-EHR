@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Expenses</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('finance_expenses_addsupplier')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Add a supplier</a>
                    <a href="{{route('finance_expenses_addexpense')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Add an expense</a>
                </div>
            </div>
        </div>
    </div>

@endsection