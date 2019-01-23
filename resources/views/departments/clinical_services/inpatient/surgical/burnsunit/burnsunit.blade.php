@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h3 class="theme-cl">Surgical </h3>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h3 class="theme-cl">Burns Unit  </h3>
        </div>
    </div>

    @include('common_files.common_files')


    @include('common_files.general_patient_files')


    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h3 class="theme-cl">Burns Unit </h3>
        </div>
    </div>



@endsection
