@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Clinical Services -outpatient </h4>
        </div>
    </div>

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('clinicalservices_home') }}" class="btn waves-effect waves-light btn-primary">clinicalservices home</a>
                    <a href="{{ route('clinicalservices_outpatient_doctorsoffice') }}" class="btn waves-effect waves-light btn-primary">Doctors office</a>
                    <a href="{{ route('clinicalservices_outpatient_emergencydpt') }}" class="btn waves-effect waves-light btn-primary">Emergency department</a>
                    <a href="{{ route('clinicalservices_outpatient_orthoepedicdpt') }}" class="btn waves-effect waves-light btn-primary">orthoepedic department</a>
                    <a href="{{ route('clinicalservices_outpatient_nutritiondpt') }}" class="btn waves-effect waves-light btn-primary">Nutrition depatment</a>
                    <a href="{{ route('clinicalservices_outpatient_occupationaldpt') }}" class="btn waves-effect waves-light btn-primary">Occupational therapy department</a>
                    <a href="{{ route('clinicalservices_outpatient_physiotherapy') }}" class="btn waves-effect waves-light btn-primary">Physiotherapy</a>
                    <a href="{{ route('clinicalservices_outpatient_dental') }}" class="btn waves-effect waves-light btn-primary">Dental service</a>
                    <a href="{{ route('clinicalservices_outpatient_outpatientclinic') }}" class="btn waves-effect waves-light btn-primary">Orthoepedic clinic</a>
                </div>
            </div>
        </div>
    </div>
@endsection