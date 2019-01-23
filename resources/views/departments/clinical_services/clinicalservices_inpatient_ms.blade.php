@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Clinical Services - Medical Services</h4>
        </div>
    </div>

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{route('clinicalservices_ms_medical_ward')}}" class="btn waves-effect waves-light btn-primary">Medical Ward</a>
                    <a href="{{ route('clinicalservices_ms_renal_unit') }}" class="btn waves-effect waves-light btn-primary">Renal Unit</a>
                    <a href="{{ route('clinicalservices_ms_oncology_unit') }}" class="btn waves-effect waves-light btn-primary">Oncology Unit</a>
                </div>
            </div>
        </div>
    </div>
@endsection