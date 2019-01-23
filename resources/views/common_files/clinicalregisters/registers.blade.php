@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->

    <div class="col-m-3 offset-md-2">
        <H3 class="mt-20 ">
            REGISTERS
        </H3>
    </div>


    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="d-flex flex-row mt-2">
                    <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">General Out Patient Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tab" role="tab" aria-controls="">Out Patient Over 5 Years Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tab" role="tab" aria-controls="">Out Patient Under 5 Years Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tab" role="tab" aria-controls="">General Admission/Discharge Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tab" role="tab" aria-controls="">In Patient Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tab" role="tab" aria-controls="">General X-Ray Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tab" role="tab" aria-controls="">General Laboratory Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Laboratory Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tab" role="tab" aria-controls="">Health Facility Early Infant Diagnosis</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tab" role="tab" aria-controls="">Blood Cross Match Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tab" role="tab" aria-controls="">Blood Grouping Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tab" role="tab" aria-controls="">Blood Transfusion Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tab" role="tab" aria-controls="">Health Facility Viral Load Samples & Tracking Log Book </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Laboratory Services Summary</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Gene Expert and AFB Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Stock Register of Opiates</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Drug and Revenue Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Dental Procedures Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Family Planning Services Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">ANC(Ante Natal Care) Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Maternity Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">PNC(Post Natal Care) Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Child Welfare Care Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Immunization Permanent Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Nutrition Daily Ward Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Theatre List</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Death Rgister</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Community Health Worker Service Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Community Health Worker Service Delivery Log Book</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " data-toggle="tab" role="tab" aria-controls="">Daily Bed Return Form</a>
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
