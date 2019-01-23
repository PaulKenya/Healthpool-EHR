@extends('layouts.master')

@section('content')
    <div class="page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Clinical Services </h4>
        </div>
    </div>
    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('lab_current_dept') }}" class="btn btn-info">Lab</a>
                    <a href="{{ route('lab_current_dept') }}" class="btn btn-info">Radio</a>
                    <a href="{{ route('lab_current_dept') }}" class="btn btn-info">Pharmacy</a>
                </div>
            </div>
        </div>
    </div>
@endsection