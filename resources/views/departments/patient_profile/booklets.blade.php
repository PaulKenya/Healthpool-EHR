@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->

    <div class="col-m-3 offset-md-2">
        <H3 class="mt-20 ">
           booklets
        </H3>
    </div>


    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="d-flex flex-row mt-2">
                    <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">

                        <li class="nav-item">
                            <a href="#registration" class="nav-link " data-toggle="tab" role="tab" aria-controls="registration">registration</a>
                        </li>
                        <li class="nav-item">
                            <a href="registration_data#" class="nav-link " data-toggle="tab" role="tab" aria-controls="registration_data">registration data</a>
                        </li>
                        <li class="nav-item">
                            <a href="#medical_surgical" class="nav-link " data-toggle="tab" role="tab" aria-controls="medical_surgical">medical & surgical history</a>
                        </li>
                        <li class="nav-item">
                            <a href="#previouspregnancy" class="nav-link " data-toggle="tab" role="tab" aria-controls="previouspregnancy">previous pregnancy</a>
                        </li>
                        <li class="nav-item">
                            <a href="#general_information" class="nav-link " data-toggle="tab" role="tab" aria-controls="general_information">general information</a>
                        </li>
                        <li class="nav-item">
                            <a href="#weightchart" class="nav-link " data-toggle="tab" role="tab" aria-controls="weightchart">weight for date chart weight in kg</a>
                        </li>
                        <li class="nav-item">
                            <a href="#presentpregnancy" class="nav-link " data-toggle="tab" role="tab" aria-controls="presentpregnancy">present pregnancy</a>
                        </li>

                        <li class="nav-item">
                            <a href="#weightchart" class="nav-link " data-toggle="tab" role="tab" aria-controls="weightchart">weight for date chart weight in kg</a>

                        <li class="nav-item">
                            <a href="#anc_generalinformation" class="nav-link " data-toggle="tab" role="tab" aria-controls="anc_generalinformation">anc general information</a>
                        </li>

                        <li class="nav-item">
                            <a href="#preventive_services" class="nav-link " data-toggle="tab" role="tab" aria-controls="preventive_services">preventive services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#delivery" class="nav-link " data-toggle="tab" role="tab" aria-controls="delivery">delivery</a>
                        </li>
                        <li class="nav-item">
                            <a href="#postnatal_examination" class="nav-link " data-toggle="tab" role="tab" aria-controls="postnatal_examination">post natal examination</a>
                        </li>
                        <li class="nav-item">
                            <a href="#family_planning" class="nav-link " data-toggle="tab" role="tab" aria-controls="family_planning">family planning</a>
                        </li>
                        <li class="nav-item">
                            <a href="#clinical_notes" class="nav-link " data-toggle="tab" role="tab" aria-controls="clinical_notes">clinical notes</a>
                        </li>
                        <li class="nav-item">
                            <a href="#childhealthcard1" class="nav-link " data-toggle="tab" role="tab" aria-controls="childhealthcard1">child health card</a>
                        </li>
                        <li class="nav-item">
                            <a href="#immunization_card" class="nav-link " data-toggle="tab" role="tab" aria-controls="immunization_card">immunization card</a>
                        </li>
                        <li class="nav-item">
                            <a href="#vit_a" class="nav-link " data-toggle="tab" role="tab" aria-controls="vit_a">vit a capsules for 6 months</a>
                        </li>
                        <li class="nav-item">
                            <a href="#supplemental_vaccines" class="nav-link " data-toggle="tab" role="tab" aria-controls="supplemental_vaccines">supplemental vaccines</a>
                        </li>
                        <li class="nav-item">
                            <a href="#milestones_chart" class="nav-link " data-toggle="tab" role="tab" aria-controls="milestones_chart">developmental milestones chart</a>
                        </li>
                        <li class="nav-item">
                            <a href="#id_children" class="nav-link " data-toggle="tab" role="tab" aria-controls="id_children">identification of exposed children at 6 weeks or soon thereafter</a>
                        </li>
                        <li class="nav-item">
                            <a href="#co_trimoxazole" class="nav-link " data-toggle="tab" role="tab" aria-controls="co_trimoxazole">CO-TRIMOXAZOLE PROPHYLAXIS FOR EXPOSED CHILDREN AT 6 WEEKS OR SOON THEREAFTER</a>
                        </li>
                        <li class="nav-item">
                            <a href="#immunologic" class="nav-link " data-toggle="tab" role="tab" aria-controls="">IMMUNOLOGIC STAGING FOR EXPOSED CHILDREN</a>
                        </li>
                        <li class="nav-item">
                            <a href="#health_worker" class="nav-link " data-toggle="tab" role="tab" aria-controls="health_worker">HEALTH WORKER CONSULTATION</a>
                        </li>

                    </ul>

                    <div class="tab-content">

                        <div class="tab-pane fade show active " id="childhealthcard1" role="tabpanel">
                            @include('departments/patient_profile/childhealthcard1')
                        </div>
                   <div class="tab-pane fade show active " id="previouspregnancy" role="tabpanel">
                            @include('departments/patient_profile/previouspregnancy')
                        </div><div class="tab-pane fade show active " id="presentpregnancy" role="tabpanel">
                            @include('departments/patient_profile/presentpregnancy')
                        </div>
                        <div class="tab-pane fade show active " id="weightchart" role="tabpanel">
                            @include('departments/patient_profile/weightchart')
                        </div>
                        <div class="tab-pane fade show active " id="childmonitoring" role="tabpanel">
                            @include('departments/patient_profile/childmonitoring')
                        </div>
                        <div class="tab-pane fade show active " id="physical" role="tabpanel">
                            @include('departments/patient_profile/physical')
                        </div>
                        <div class="tab-pane fade show active " id="registration" role="tabpanel">
                            @include('departments/patient_profile/registration')
                        </div>
                        <div class="tab-pane fade show active " id="registration_data" role="tabpanel">
                            @include('departments/patient_profile/registration_data')
                        </div>
                        <div class="tab-pane fade show active " id="medical_surgical" role="tabpanel">
                            @include('departments/patient_profile/medical_surgical')
                        </div>
                        <div class="tab-pane fade show active " id="general_information" role="tabpanel">
                            @include('departments/patient_profile/general_information')
                        </div>
                        <div class="tab-pane fade show active " id="anc_generalinformation" role="tabpanel">
                            @include('departments/patient_profile/anc_generalinformation')
                        </div>
                        <div class="tab-pane fade show active " id="preventive_services" role="tabpanel">
                            @include('departments/patient_profile/preventive_services')
                        </div>
                        <div class="tab-pane fade show active " id="delivery" role="tabpanel">
                            @include('departments/patient_profile/delivery')
                        </div>
                        <div class="tab-pane fade show active " id="postnatal_examination" role="tabpanel">
                            @include('departments/patient_profile/postnatal_examination')
                        </div>
                        <div class="tab-pane fade show active " id="family_planning" role="tabpanel">
                            @include('departments/patient_profile/family_planning')
                        </div>
                        <div class="tab-pane fade show active " id="clinical_notes" role="tabpanel">
                            @include('departments/patient_profile/clinical_notes')
                        </div>
                        <div class="tab-pane fade show active " id="immunization_card" role="tabpanel">
                            @include('departments/patient_profile/immunization_card')
                        </div>
                        <div class="tab-pane fade show active " id="vit_a" role="tabpanel">
                            @include('departments/patient_profile/vit_a')
                        </div>
                        <div class="tab-pane fade show active " id="supplemental_vaccines" role="tabpanel">
                            @include('departments/patient_profile/supplemental_vaccines')
                        </div>
                        <div class="tab-pane fade show active " id="milestones_chart" role="tabpanel">
                            @include('departments/patient_profile/milestones_chart')
                        </div><div class="tab-pane fade show active " id="id_children" role="tabpanel">
                            @include('departments/patient_profile/id_children')
                        </div>
                        <div class="tab-pane fade show active " id="co_trimoxazole" role="tabpanel">
                            @include('departments/patient_profile/co_trimoxazole')
                        </div>
                        <div class="tab-pane fade show active " id="immunologic" role="tabpanel">
                            @include('departments/patient_profile/immunologic')
                        </div>
                        <div class="tab-pane fade show active " id="health_worker" role="tabpanel">
                            @include('departments/patient_profile/health_worker')
                        </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>










@endsection

