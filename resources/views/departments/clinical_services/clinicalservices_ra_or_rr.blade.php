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
                    <a href="{{ route('patient_file_home') }}" class="btn waves-effect waves-light btn-primary">Receiving Area</a>
                    <a href="{{ route('patient_file_home') }}" class="btn waves-effect waves-light btn-primary">Operating Room</a>
                    <a href="{{ route('patient_file_home') }}" class="btn waves-effect waves-light btn-primary">Recovery Room</a>
                </div>
            </div>
        </div>
    </div>
@endsection