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
                    <a href="{{ route('clinicalservices_home') }}" class="btn waves-effect waves-light btn-primary">clinical services home</a>
                    <a href="{{ route('clinical_consultationform') }}" class="btn waves-effect waves-light btn-primary">consultation form</a>
                    <a href="{{ route('clinical_consultationrequestform') }}" class="btn waves-effect waves-light btn-primary">consultation request form</a>
                    <a href="{{ route('clinical_prescriptionform') }}" class="btn waves-effect waves-light btn-primary">prescription form</a>
                    <a href="{{ route('clinical_radiologurequest') }}" class="btn waves-effect waves-light btn-primary">radiology request</a>
                    <a href="{{ route('clinical_radiologyreportsheet') }}" class="btn waves-effect waves-light btn-primary">radiology report sheet</a>
                    <a href="{{ route('clinical_labrequest') }}" class="btn waves-effect waves-light btn-primary">lab request form</a>
                    <a href="{{ route('clinical_labreport') }}" class="btn waves-effect waves-light btn-primary">laboratrory report</a>
                </div>
            </div>
        </div>
@endsection