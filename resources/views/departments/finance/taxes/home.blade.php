@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Taxes</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('finance_taxes_add')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Add tax</a>
                </div>
            </div>
        </div>
    </div>

@endsection()