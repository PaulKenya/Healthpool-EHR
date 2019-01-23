@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Nutrition </h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-lg-12 col-lg-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="button-group">
                        <a href="{{ route('adult_feeding') }}" class="btn waves-effect waves-light btn-primary">Adult feeding Chart</a>
                        <a href="{{ route('inpatient_nutrition') }}" class="btn waves-effect waves-light btn-primary">Inpatient Nutrition Care register</a>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
