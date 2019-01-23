@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Clinical Services - Paediatric Services</h4>
        </div>
    </div>

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('clinicalservices_ps_pw') }}" class="btn waves-effect waves-light btn-primary">Paediatric Ward</a>
                    <a href="{{ route('clinicalservices_ps_nbu') }}" class="btn waves-effect waves-light btn-primary">New Born Unit (NBU)</a>
                    <a href="{{ route('clinicalservices_ps_nicu') }}" class="btn waves-effect waves-light btn-primary">Neonatal Intensive Care Unit (NICU)</a>
                </div>
            </div>
        </div>
    </div>
@endsection