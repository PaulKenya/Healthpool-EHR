@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Clinical Services - Maternity Services</h4>
        </div>
    </div>

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('clinicalservices_maternity_lw') }}" class="btn waves-effect waves-light btn-primary">Labor Ward</a>
                    <a href="{{ route('clinicalservices_maternity_gw') }}" class="btn waves-effect waves-light btn-primary">Gynecology Ward</a>
                </div>
            </div>
        </div>
    </div>
@endsection