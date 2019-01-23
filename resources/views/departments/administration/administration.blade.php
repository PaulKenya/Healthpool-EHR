@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Administration</h4>
        </div>
    </div>

    <div class=" align-self-center text-center">
        <a href="{{route('patient_information')}}" class="btn btn-lg btn-primary" style="margin: 5px;">PATIENT FLOW</a>
    </div>
@endsection