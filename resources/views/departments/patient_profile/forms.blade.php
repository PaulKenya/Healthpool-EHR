@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->

    <div class="col-m-3 offset-md-2">
        <H3 class="mt-20 ">
            forms
        </H3>
    </div>


    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="d-flex flex-row mt-2">
                    <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
                        <li class="nav-item">
                            <a href="#allergyform" class="nav-link active" data-toggle="tab" role="tab" aria-controls="allergyform">allergy form</a>
                        </li>

                        <li class="nav-item">
                            <a href="#radiologyreportsheet" class="nav-link " data-toggle="tab" role="tab" aria-controls="radiologyreportsheet">radiology report sheet</a>
                        </li>
                        <li class="nav-item">
                            <a href="#labreportsheet" class="nav-link " data-toggle="tab" role="tab" aria-controls="labreportsheet">lab report sheet</a>
                        </li>
                        <li class="nav-item">
                            <a href="#prescription" class="nav-link " data-toggle="tab" role="tab" aria-controls="prescription">prescription form</a>
                        </li>
                        <li class="nav-item">
                            <a href="#casesummary" class="nav-link " data-toggle="tab" role="tab" aria-controls="audiogram">case summary</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active " id="allergyform" role="tabpanel">
                            @include('departments/patient_profile/allergy_form')
                        </div>

                        <div class="tab-pane fade" id="radiologyreportsheet" role="tabpanel"><div class="row ">
                                <div class="col-md-12 align-self-center text-center">
                                    <h4 class="">File is not Available now</h4>
                                </div>
                            </div>
                            @include('departments/patient_profile/radiology_report_sheet')
                        </div>
                        <div class="tab-pane fade" id="labreportsheet" role="tabpanel">
                            @include('departments/patient_profile/laboratory_report_sheet')
                        </div>
                        <div class="tab-pane fade" id="prescription" role="tabpanel">
                            @include('departments/patient_profile/prescription')
                        </div>
                        <div class="tab-pane fade" id="casesummary" role="tabpanel">
                            @include('departments/patient_profile/case_summary')
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>










@endsection

