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
                    <a href="{{ route('doctors_administration_registration') }}" class="btn waves-effect waves-light btn-primary">registration</a>
                    <a href="{{ route('doctors_administration_scheduling') }}" class="btn waves-effect waves-light btn-primary">scheduling</a>
                    <a href="{{ route('doctors_administration_appointments') }}" class="btn waves-effect waves-light btn-primary">appointments</a>
                    <a href="{{ route('doctors_administration_attendance') }}" class="btn waves-effect waves-light btn-primary">attendances</a>
                    <a href="{{ route('doctors_administration_alerts') }}" class="btn waves-effect waves-light btn-primary">alerts</a>
                    <a href="{{ route('doctors_administration_reminders') }}" class="btn waves-effect waves-light btn-primary">reminders</a>
                </div>
            </div>
        </div>
@endsection