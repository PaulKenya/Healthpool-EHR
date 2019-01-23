@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->

    <div class="col-m-3 offset-md-2">
        <H3 class="mt-20 ">
            SUMMARY FORMS
        </H3>
    </div>


    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="d-flex flex-row mt-2">
                    <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Out Patient(under 5)</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Out Patient(over 5)</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Laboratory MOH 706</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Environmental Health Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Immunisation Service Uptake Summary</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Integrated Reproductive and Child Health Summary</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Workload Summary</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Community Health Worker Summary</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">In Patient Nutrition Care Register</a>
                        </li>






                    </ul>
                    {{--<div class="tab-content">--}}
                    {{--<div class="tab-pane fade show active " id="bloodpressurechart" role="tabpanel">--}}
                    {{--@include('departments/clinical_services/inpatient/patient_file/blood_pressure_chart')--}}
                    {{--</div>--}}











                </div>
            </div>
        </div>
    </div>
    </div>










@endsection
