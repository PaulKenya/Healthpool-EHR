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
                    <a href="{{ route('doctorsoffice_administration') }}" class="btn waves-effect waves-light btn-primary">administration</a>
                    <a href="{{ route('doctorsoffice_clinical') }}" class="btn waves-effect waves-light btn-primary">clinical</a>
                    <a href="{{ route('doctorsoffice_billing') }}" class="btn waves-effect waves-light btn-primary">billing</a>
                    <a href="{{ route('doctorsoffice_patientprofile') }}" class="btn waves-effect waves-light btn-primary">patient profile</a>
                    <a href="{{ route('doctorsoffice_report') }}" class="btn waves-effect waves-light btn-primary">report</a>

            </div>
        </div>
    </div>
@endsection