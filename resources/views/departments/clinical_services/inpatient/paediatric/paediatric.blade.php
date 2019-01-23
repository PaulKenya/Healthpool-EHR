@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Paediatric unit </h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">

                    <a href="{{ route('maternity_sheet')}}" class="btn waves-effect waves-light btn-primary">maternity sheet</a>
                    <a href="{{ route('infant_record')}}" class="btn waves-effect waves-light btn-primary">infant record</a>
                    <a href="{{ route('partograph')}}" class="btn waves-effect waves-light btn-primary">partograph</a>
                    <a href="{{ route('foetal_chart')}}" class="btn waves-effect waves-light btn-primary">foetal chart</a>

                </div>
            </div>
        </div>
    </div>


@endsection
