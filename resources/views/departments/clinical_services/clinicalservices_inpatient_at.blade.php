@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Clinical Services - Anaesthesia Theatre</h4>
        </div>
    </div>

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('clinicalservices_ats_mt') }}" class="btn waves-effect waves-light btn-primary">Maternity Theatre</a>
                    <a href="{{ route('clinicalservices_ats_opthamology') }}" class="btn waves-effect waves-light btn-primary">Opthamology</a>
                    <a href="{{ route('clinicalservices_ats_cardiology') }}" class="btn waves-effect waves-light btn-primary">Cardiology</a>
                    <a href="{{ route('clinicalservices_ats_ent') }}" class="btn waves-effect waves-light btn-primary">ENT (Ear, Nose and Throat)</a>
                    <a href="{{ route('clinicalservices_ats_orthopaedics') }}" class="btn waves-effect waves-light btn-primary">Orthopaedics</a>
                    <a href="{{ route('clinicalservices_ats_general') }}" class="btn waves-effect waves-light btn-primary">General</a>
                </div>
            </div>
        </div>
    </div>
@endsection