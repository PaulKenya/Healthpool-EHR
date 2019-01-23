@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Emergency Department </h4>
        </div>
    </div>

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('clinicalservices_home') }}" class="btn waves-effect waves-light btn-primary">clinicalservices home</a>
                    <a href="{{ route('triage') }}" class="btn waves-effect waves-light btn-primary">triage</a>
                    <a href="{{ route('immunization_room') }}" class="btn waves-effect waves-light btn-primary">immunization room</a>
                    <a href="{{ route('injection_room') }}" class="btn waves-effect waves-light btn-primary">injection room</a>
                    <a href="{{ route('minor_theatre') }}" class="btn waves-effect waves-light btn-primary">minor theatre</a>

                </div>
            </div>
        </div>
@endsection