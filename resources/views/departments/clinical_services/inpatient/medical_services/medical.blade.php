@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Medical services </h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="col-md-8 offset-1">
        <a href="{{ route('medical_icu_hdu')}}" class="btn waves-effect waves-light btn-primary">medical icu hdu</a>
        <a href="{{ route('medical_medical_ward')}}" class="btn waves-effect waves-light btn-primary">medical medical ward</a>
    </div>



@endsection
