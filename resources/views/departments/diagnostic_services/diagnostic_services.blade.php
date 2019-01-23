@extends('layouts.master')

@section('content')
<!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">Diagnostic Services</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->
<div class="row">
    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('laboratory_department') }}" class="btn waves-effect waves-light btn-primary">Laboratory Department</a>
                    <a href="{{ route('radiology_department') }}" class="btn waves-effect waves-light btn-primary">Radiology Department</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
