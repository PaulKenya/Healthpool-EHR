@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Clinical Services -Inpatient </h4>
        </div>
    </div>

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('clinicalservices_home') }}" class="btn waves-effect waves-light btn-primary">clinicalservices home</a>
                    <a href="{{ route('medical_home') }}" class="btn waves-effect waves-light btn-primary">medical</a>
                    <a href="{{ route('nutrition_home') }}" class="btn waves-effect waves-light btn-primary">nutrition</a>
                    <a href="{{ route('ot_home') }}" class="btn waves-effect waves-light btn-primary">ot</a>
                    <a href="{{ route('paediatric_home') }}" class="btn waves-effect waves-light btn-primary">paediatric</a>
                    <a href="{{ route('physiotherapy_home') }}" class="btn waves-effect waves-light btn-primary">physiotherapy</a>
                    <a href="{{ route('surgical_home') }}" class="btn waves-effect waves-light btn-primary">surgical</a>
                </div>
            </div>
        </div>
    </div>
@endsection