@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Physiotherapy Form </h4>
        </div>
    </div>



    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">

                    <a href="{{ route('physiotherapy_form')}}" class="btn waves-effect waves-light btn-primary">physiotherapy form</a>
                    <a href="{{ route('continuation_form')}}" class="btn waves-effect waves-light btn-primary">continuation form</a>


                </div>
            </div>
        </div>
    </div>


@endsection
