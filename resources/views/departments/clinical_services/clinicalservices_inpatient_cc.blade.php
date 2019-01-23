@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Clinical Services - Critical Care</h4>
        </div>
    </div>

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('clinicalservices_ccs_icu')  }}" class="btn waves-effect waves-light btn-primary">High Dependency Unit</a>
                    <a href="{{ route('clinicalservices_ccs_hdu') }}" class="btn waves-effect waves-light btn-primary">Intensive Care Unit</a>
                </div>
            </div>
        </div>
    </div>
@endsection