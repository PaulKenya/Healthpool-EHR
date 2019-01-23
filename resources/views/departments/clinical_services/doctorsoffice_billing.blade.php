@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Doctors office </h4>
        </div>
    </div>

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('clinicalservices_home') }}" class="btn waves-effect waves-light btn-primary">clinicalservices home</a>
                    <a href="{{ route('doctorsoffice_billling') }}" class="btn waves-effect waves-light btn-primary">billing</a>
                    <a href="{{ route('doctorsoffice_invoicing') }}" class="btn waves-effect waves-light btn-primary">invoicing</a>

                </div>
            </div>
        </div>
@endsection