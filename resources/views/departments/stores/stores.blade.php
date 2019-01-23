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
                    <a href="{{route('inventory')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Inventory</a>
                    <a href="{{route('requests')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Requests </a>
                    <a href="{{route('suppliers')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Inventory</a>
                    <a href="{{route('requisitions')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Suppliers</a>

                </div>
            </div>
        </div>
    </div>
@endsection
