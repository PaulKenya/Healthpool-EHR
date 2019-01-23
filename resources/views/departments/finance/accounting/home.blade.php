@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Accounting</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('finance_accounting_add')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Add account</a>
                </div>
            </div>
        </div>
    </div>

@endsection()