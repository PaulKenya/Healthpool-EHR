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
                    <a href="{{ route('wellbabyclinic') }}" class="btn waves-effect waves-light btn-primary">well baby clinic</a>
                    <a href="{{ route('earnosethroat') }}" class="btn waves-effect waves-light btn-primary">ear nose throat</a>
                    <a href="{{ route('meadicaloutpatient') }}" class="btn waves-effect waves-light btn-primary">meadical outpatient</a>
                    <a href="{{ route('gynecology') }}" class="btn waves-effect waves-light btn-primary">gynecology</a>
                    <a href="{{ route('pediatricoutpatient') }}" class="btn waves-effect waves-light btn-primary">pediatric outpatient</a>
                    <a href="{{ route('surgicaloutpatient') }}" class="btn waves-effect waves-light btn-primary">surgical outpatient</a>
                    <a href="{{ route('opthalmicclinic') }}" class="btn waves-effect waves-light btn-primary">opthalmic clinic</a>
                    <a href="{{ route('tbclinic') }}" class="btn waves-effect waves-light btn-primary">tb clinic</a>

                </div>
            </div>
        </div>
@endsection