@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Outpatient Clinics </h4>
        </div>
    </div>

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">

                    <a href="{{ route('well_baby')}}" class="btn waves-effect waves-light btn-primary">Well Baby Clinic</a>
                    <a href="{{ route('ent_clinic')}}" class="btn waves-effect waves-light btn-primary">ent clinic</a>
                    <a href="{{ route('mopc_clinic')}}" class="btn waves-effect waves-light btn-primary">mopc clinic</a>
                    <a href="{{ route('gynecology')}}" class="btn waves-effect waves-light btn-primary">Gynecology </a>
                    <a href="{{ route('popc_clinic')}}" class="btn waves-effect waves-light btn-primary">popc clinic</a>
                    <a href="{{ route('sopc_surgical_clinic')}}" class="btn waves-effect waves-light btn-primary">sopc surgical clinic</a>
                    <a href="{{ route('eye_ophthalmology_clinic')}}" class="btn waves-effect waves-light btn-primary">eye ophthalmology clinic</a>
                    <a href="{{ route('tb')}}" class="btn waves-effect waves-light btn-primary">TB</a>

                    <a href="{{ route('emergency_home')}}" class="btn waves-effect waves-light btn-primary">Emergency</a>
                   {{-- //nutrition department left out here--}}
                    <a href="{{ route('orthopedic_clinic')}}" class="btn waves-effect waves-light btn-primary">orthopedic clinic</a>
                    <a href="{{ route('physiotherapy_clinic')}}" class="btn waves-effect waves-light btn-primary">physiotherapy clinic</a>
                    <a href="{{ route('doctors_office_home')}}" class="btn waves-effect waves-light btn-primary"> Doctor's Office</a>



                    {{--<a href="{{ route('cardiology_clinic')}}" class="btn waves-effect waves-light btn-primary">cardiology clinic</a>
                    <a href="{{ route('dental_clinic')}}" class="btn waves-effect waves-light btn-primary">dental clinic</a>
                    <a href="{{ route('obs_gyne_clinic')}}" class="btn waves-effect waves-light btn-primary">obs gyne clinic</a>--}}

                </div>
            </div>
        </div>
    </div>



@endsection
