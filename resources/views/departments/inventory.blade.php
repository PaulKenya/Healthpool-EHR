@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Inventory</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('inventoryadjustments')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Inventory Adjustments</a>
                    <a href="{{route('reorderingrules')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Re-ordering Rules</a>
                    <a href="{{route('scraporders')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Scrap Orders</a>
                    <a href="{{route('stockoperations')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Stock Operations</a>
                </div>
            </div>
        </div>
    </div>
@endsection
