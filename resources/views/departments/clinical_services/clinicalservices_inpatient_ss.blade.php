@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Clinical Services - Surgical Services</h4>
        </div>
    </div>

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('clinicalservices_ss_sw') }}" class="btn waves-effect waves-light btn-primary">Surgical Ward</a>
                    <a href="{{ route('clinicalservices_ss_bu') }}" class="btn waves-effect waves-light btn-primary">Burns Unit</a>
                    <a href="{{ route('clinicalservices_ss_ou') }}" class="btn waves-effect waves-light btn-primary">Orthopaedic Unit</a>
                </div>
            </div>
        </div>
    </div>
@endsection