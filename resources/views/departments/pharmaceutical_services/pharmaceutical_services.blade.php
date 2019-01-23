@extends('layouts.master')

@section('content')
<!-- Title & Breadcrumbs-->


<div class="col-md-12">
    <div class="">
        <div class="row page-titles">
            <div class="col-md-12 align-self-center text-center">
                <h4 class="theme-cl">Pharmaceutical Services</h4>
            </div>
        </div>
        <!-- Title & Breadcrumbs-->

        <div class="row">
            <div class="col-lg-12 col-lg-6">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="button-group">
                            <a href="{{ route('pharmacy_pharmacy') }}" class="btn waves-effect waves-light btn-primary">Pharmacy</a>
                            <a href="{{ route('pharmacy_inventory') }}" class="btn waves-effect waves-light btn-primary">Inventory</a>
                            <a href="{{ route('pharmacy_requests') }}" class="btn waves-effect waves-light btn-primary">Requests</a>
                            <a href="{{ route('pharmacy_suppliers') }}" class="btn waves-effect waves-light btn-primary">Suppliers</a>
                            <a href="{{ route('pharmacy_requisitions') }}" class="btn waves-effect waves-light btn-primary">Requisitions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
