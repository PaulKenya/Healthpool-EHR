@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">NURSING CARE INTERVENTION CHECKLIST</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>NURSING CARE INTERVENTION CHECKLIST</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>Print</th>
                                <th>Bath Day?</th>
                                <th>Bath Night?</th>
                                <th>Oral Care Day?</th>
                                <th>Oral Care Night?</th>
                                <th>Pressure Area Care Day?</th>
                                <th>Pressure Area Care Night?</th>
                                <th>Breathing Adequately Day?</th>
                                <th>Breathing Adequately Night?</th>
                                <th>Monitor Saturation Day?</th>
                                <th>Monitor Saturation Night?</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($nursingforms_results))
                                @php
                                    $i=0
                                @endphp
                                @foreach($nursingforms_results as $nursingforms_result)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">Print Record</button>
                                        </td>
                                        <td>{{$nursingforms_result->bath_day}}</td>
                                        <td>{{$nursingforms_result->bath_night}}</td>
                                        <td>{{$nursingforms_result->oral_care_day}}</td>
                                        <td>{{$nursingforms_result->oral_care_night}}</td>
                                        <td>{{$nursingforms_result->pressure_area_care_day}}</td>
                                        <td>{{$nursingforms_result->pressure_area_care_night}}</td>
                                        <td>{{$nursingforms_result->breathing_adequately_day}}</td>
                                        <td>{{$nursingforms_result->breathing_adequately_night}}</td>
                                        <td>{{$nursingforms_result->monitor_saturation_day}}</td>
                                        <td>{{$nursingforms_result->monitor_saturation_night}}</td>
                                        <!-- Triage Modal -->
                                        <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Nursing Intervention Checklist</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="printableArea{{$i}}">
                                                            <h2>PATIENT RECORD</h2>
                                                            <p><b>Patient Name : </b> {{$patient->name}}</p>
                                                            <p><b>Bed Bath / Assisted Bath : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->bath_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->bath_night }}</p>
                                                            <p><b>Oral Care : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->oral_care_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->oral_care_night }}</p>
                                                            <p><b>Pressure Area Care : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->pressure_area_care_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->pressure_area_care_night }}</p>
                                                            <p><b>Breathing Adequately : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->breathing_adequately_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->breathing_adequately_night }}</p>
                                                            <p><b>Monitor Saturation : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->monitor_saturation_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->monitor_saturation_night }}</p>
                                                            <p><b>Oxygen Accordingly : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->oxygen_accordingly_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->oxygen_accordingly_night }}</p>
                                                            <p><b>Diet Plan in Place : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->diet_plan_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->diet_plan_night }}</p>
                                                            <p><b>Oral Feeding : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->oral_feedingday }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->oral_feedingnight }}</p>
                                                            <p><b>Nasogastric Tube Feeding : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->nasogastric_tube_feeding_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->nasogastric_tube_feeding_night }}</p>
                                                            <p><b>Parental : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->parental_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->parental_night }}</p>
                                                            <p><b>Passing Urine Adequately : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->passing_urine_adequately_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->passing_urine_adequately_night }}</p>
                                                            <p><b>Opening Bowels Adequately : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->opening_bowels_adequatelyday }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->opening_bowels_adequatelynight }}</p>
                                                            <p><b>Excessive Sweating : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->excessive_sweating_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->excessive_sweating_night }}</p>
                                                            <p><b>Additional Elimination Outlets : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->aeo_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->aeo_night }}</p>
                                                            <p><b>Passive Exercises done by Nurse : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->pen_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->pen_night }}</p>
                                                            <p><b>Physiotherapy Session : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->ps_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->ps_night }}</p>
                                                            <p><b>Mobilised : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->mobilised_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->mobilised_night }}</p>
                                                            <p><b>Nutritional Counselling : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->nutri_counselling_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->nutri_counselling_night }}</p>
                                                            <p><b>General Counsellor Session : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->gen_counselling_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->gen_counselling_night }}</p>

                                                            <p><b>MEDICATIONS</b></p>
                                                            <p><b>6 AM : </b>&nbsp;{{ $nursingforms_result->medications_6_am }}</p>
                                                            <p><b>12 Noon : </b>&nbsp;{{ $nursingforms_result->medications_12_mid }}</p>
                                                            <p><b>2 PM : </b>&nbsp;{{ $nursingforms_result->medications_2_pm }}</p>
                                                            <p><b>6 PM : </b>&nbsp;{{ $nursingforms_result->medications_6_pm }}</p>
                                                            <p><b>10 PM : </b>&nbsp;{{ $nursingforms_result->medications_10_pm }}</p>

                                                            <p><b>VITAL OBSERVATIONS</b></p>
                                                            <p><b>6 AM : </b>&nbsp;{{ $nursingforms_result->vital_observations_6_am }}</p>
                                                            <p><b>12 Noon : </b>&nbsp;{{ $nursingforms_result->vital_observations_10_am }}</p>
                                                            <p><b>2 PM : </b>&nbsp;{{ $nursingforms_result->vital_observations_2_pm }}</p>
                                                            <p><b>6 PM : </b>&nbsp;{{ $nursingforms_result->vital_observations_6_pm }}</p>
                                                            <p><b>10 PM : </b>&nbsp;{{ $nursingforms_result->vital_observations_10_pm }}</p>

                                                            <p><b>Glasglow Coma Scale : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->gcs_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->gcs_night }}</p>

                                                            <p><b>CANNULAR OBSERVATIONS</b></p>
                                                            <p><b>6 AM : </b>&nbsp;{{ $nursingforms_result->cannular_observations_6_am }}</p>
                                                            <p><b>10 AM : </b>&nbsp;{{ $nursingforms_result->cannular_observations_10_am }}</p>
                                                            <p><b>2 PM : </b>&nbsp;{{ $nursingforms_result->cannular_observations_2_pm }}</p>
                                                            <p><b>6 PM : </b>&nbsp;{{ $nursingforms_result->cannular_observations_6_pm }}</p>
                                                            <p><b>10 PM : </b>&nbsp;{{ $nursingforms_result->cannular_observations_10_pm }}</p>

                                                            <p><b>Health Education Session : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->hes_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->hes_night }}</p>
                                                            <p><b>Doctors Instruction Notes Checked : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->din_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->din_night }}</p>

                                                            <p><b>SAFETY MEASURES</b></p>
                                                            <p><b>Clean Dry Floors : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->cdf_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->cdf_night }}</p>
                                                            <p><b>Mosquito Net Available : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->mna_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->mna_night }}</p>
                                                            <p><b>Bedside Attendant : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->ba_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->ba_night }}</p>
                                                            <p><b>Bed rails as necessary : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->bran_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->bran_night }}</p>
                                                            <p><b>Sanitizer in cubicle : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->sic_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->sic_night }}</p>
                                                            <p><b>Infection Control Measures in place : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->icm_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->icm_night }}</p>
                                                            <p><b>Investigation, Reports followed up : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->irfu_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->irfu_night }}</p>
                                                            <p><b>Next of Kin updated on care of patient : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->nok_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->nok_night }}</p>
                                                            <p><b>Adequate rest : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->ar_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->ar_night }}</p>
                                                            <p><b>All procedures and material charged : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->apmc_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->apmc_night }}</p>
                                                            <p><b>Nurse initials : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->ni_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->ni_night }}</p>
                                                            <p><b>Checked by HOD : </b>&nbsp;<b>Day ? </b>&nbsp;{{ $nursingforms_result->check_hod_day }}&nbsp;<b>Night ? </b>&nbsp;{{ $nursingforms_result->check_hod_night }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <input type="button" class="btn btn-success" onclick="printDiv('printableArea{{$i}}')" value="print" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more Items</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!— Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add  Information</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="{{route('nursing_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                {{--<div class="">--}}
                                                    {{--<div class="offset-md-6">--}}
                                                        {{--<div class="row">--}}
                                                            {{--<div class="col-md-3">--}}
                                                                {{--<p>PATIENTS NAME:</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-9">--}}
                                                                {{--<input type=" text" name="bio_patient_name" class="form-control" placeholder="click to enter patients name"></td>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="row">--}}
                                                            {{--<div class="col-md-3">--}}
                                                                {{--<p>IP NUMBER:</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-9">--}}
                                                                {{--<input type=" text" name="bio_ip_no" class="form-control" placeholder="click to enter IP number"></td>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="row">--}}
                                                            {{--<div class="col-md-3">--}}
                                                                {{--<p>DATE:</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-9">--}}
                                                                {{--<input type="date" name="bio_date" class="form-control" placeholder="click to enter date">--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="row">--}}
                                                            {{--<div class="col-md-3">--}}
                                                                {{--<p>AGE:</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-9">--}}
                                                                {{--<input type="number" name="bio_age" class="form-control" placeholder="click to enter age">--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="row">--}}
                                                            {{--<div class="col-md-3">--}}
                                                                {{--<p>WARD:</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-9">--}}
                                                                {{--<input type="text" name="bio_ward" class="form-control" placeholder="click to enter ward number">--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="row">--}}
                                                            {{--<div class="col-md-3">--}}
                                                                {{--<p>BED NUMBER:</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-9">--}}
                                                                {{--<input type="text" name="bio_bed_number" class="form-control" placeholder="click to enter bed number">--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="row">--}}
                                                            {{--<div class="col-md-3">--}}
                                                                {{--<p>SEX:</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-9">--}}
                                                                {{--<select class="form-control" name="bio_sex" id="sex">--}}
                                                                    {{--<option value="male">--Choose sex--</option>--}}
                                                                    {{--<option value="male">Male</option>--}}
                                                                    {{--<option value="female">Female</option>--}}
                                                                {{--</select>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                <div class="col-m-3 offset-md-2">
                                                    <H3 class="mt-20">
                                                        NURSING CARE INTERVENTIONS CHECKLIST
                                                    </H3>
                                                </div>


                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="2">DATE</th>
                                                        <th colspan="2"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>HYGIENE</td>
                                                        <td>DAY</td>
                                                        <td>NIGHT</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Bed Bath/Assisted Bath</td>
                                                        <td><input type="checkbox" value="yes" name="bath_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="bath_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Oral care</td>
                                                        <td><input type="checkbox" value="yes" name="oral_care_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="oral_care_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Pressure Area Care</td>
                                                        <td><input type="checkbox" value="yes" name="pressure_area_care_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="pressure_area_care_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.</td>
                                                        <td>RESPIRATORY CARE</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Breathing Adequatly</td>
                                                        <td><input type="checkbox" value="yes" name="breathing_adequately_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="breathing_adequately_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Monitor Saturation</td>
                                                        <td><input type="checkbox" value="yes" name="monitor_saturation_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="monitor_saturation_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Oxygen Accordingly</td>
                                                        <td><input type="checkbox" value="yes" name="oxygen_accordingly_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="oxygen_accordingly_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.</td>
                                                        <td>NUTRITION</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Diet Plan in Place</td>
                                                        <td><input type="checkbox" value="yes" name="diet_plan_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="diet_plan_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Oral Feeding</td>
                                                        <td><input type="checkbox" value="yes" name="oral_feedingday" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="oral_feedingnight" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Nasogastric tube feeding</td>
                                                        <td><input type="checkbox" value="yes" name="nasogastric_tube_feeding_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="nasogastric_tube_feeding_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Parental</td>
                                                        <td><input type="checkbox" value="yes" name="parental_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="parental_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.</td>
                                                        <td>ELIMINATION</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Passing Urine Adequately</td>
                                                        <td><input type="checkbox" value="yes" name="passing_urine_adequately_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="passing_urine_adequately_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Opening Bowels Adequately</td>
                                                        <td><input type="checkbox" value="yes" name="opening_bowels_adequatelyday" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="opening_bowels_adequatelynight" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Excessive Sweating</td>
                                                        <td><input type="checkbox" value="yes" name="excessive_sweating_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="excessive_sweating_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Additional Elimination Outlets</td>
                                                        <td><input type="checkbox" value="yes" name="aeo_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="aeo_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5.</td>
                                                        <td>MUSCULOR-SKELETAL SYSTEM</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Passive Exercises done by Nurse</td>
                                                        <td><input type="checkbox" value="yes" name="pen_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="pen_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Physiotherapy Session</td>
                                                        <td><input type="checkbox" value="yes" name="ps_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="ps_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Mobilised</td>
                                                        <td><input type="checkbox" value="yes" name="mobilised_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="mobilised_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.</td>
                                                        <td>COUNSELLING</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Nutritional Counselling</td>
                                                        <td><input type="checkbox" value="yes" name="nutri_counselling_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="nutri_counselling_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>General Counsellor Session</td>
                                                        <td><input type="checkbox" value="yes" name="gen_counselling_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="gen_counselling_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.</td>
                                                        <td>MEDICATIONS</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>6.00 am</td>
                                                        <td><input type="checkbox" value="yes" name="medications_6_am" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>12.00 md</td>
                                                        <td><input type="checkbox" value="yes" name="medications_12_mid" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>2.00 pm</td>
                                                        <td><input type="checkbox" value="yes" name="medications_2_pm" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>6.00 pm</td>
                                                        <td><input type="checkbox" value="yes" name="medications_6_pm" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>10.00 pm</td>
                                                        <td><input type="checkbox" value="yes" name="medications_10_pm" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>8.</td>
                                                        <td>VITAL OBSERVATIONS -Done</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>6.00 am</td>
                                                        <td><input type="checkbox" value="yes" name="vital_observations_6_am" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>10.00 am</td>
                                                        <td><input type="checkbox" value="yes" name="vital_observations_10_am" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>2.00 pm</td>
                                                        <td><input type="checkbox" value="yes" name="vital_observations_2_pm" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>6.00 pm</td>
                                                        <td><input type="checkbox" value="yes" name="vital_observations_6_pm" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>10.00 pm</td>
                                                        <td><input type="checkbox" value="yes" name="vital_observations_10_pm" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Glasgow Coma Scale out of 15</td>
                                                        <td><input type="checkbox" value="yes" name="gcs_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="gcs_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>CANNULAR OBSERVATIONS -Cannular</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>6.00 am</td>
                                                        <td><input type="checkbox" value="yes" name="cannular_observations_6_am" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>10.00 am</td>
                                                        <td><input type="checkbox" value="yes" name="cannular_observations_10_am" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>2.00 pm</td>
                                                        <td><input type="checkbox" value="yes" name="cannular_observations_2_pm" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>6.00 pm</td>
                                                        <td><input type="checkbox" value="yes" name="cannular_observations_6_pm" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>10.00 pm</td>
                                                        <td><input type="checkbox" value="yes" name="cannular_observations_10_pm" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>10.</td>
                                                        <td>HEALTH EDUCATION -session</td>
                                                        <td><input type="checkbox" value="yes" name="hes_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="hes_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>11.</td>
                                                        <td>DOCTOR'S Instruction notes checked</td>
                                                        <td><input type="checkbox" value="yes" name="din_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="din_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>12.</td>
                                                        <td>SAFETY MEASURES</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Clean Dry Floors</td>
                                                        <td><input type="checkbox" value="yes" name="cdf_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="cdf_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Mosquito Net Available</td>
                                                        <td><input type="checkbox" value="yes" name="mna_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="mna_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Bedside Attendant</td>
                                                        <td><input type="checkbox" value="yes" name="ba_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="ba_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Bed rails as necessary</td>
                                                        <td><input type="checkbox" value="yes" name="bran_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="bran_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Sanitizer in cubicle</td>
                                                        <td><input type="checkbox" value="yes" name="sic_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="sic_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Infection control measures in place</td>
                                                        <td><input type="checkbox" value="yes" name="icm_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="icm_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>13.</td>
                                                        <td>Investigation, Reports followed up</td>
                                                        <td><input type="checkbox" value="yes" name="irfu_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="irfu_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>14.</td>
                                                        <td>Next of Kin updated on care of the patient</td>
                                                        <td><input type="checkbox" value="yes" name="nok_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="nok_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>15.</td>
                                                        <td>Adequate Rest 2.00-4.00 & 10am-6am</td>
                                                        <td><input type="checkbox" value="yes" name="ar_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="ar_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>All procedures & Material charged</td>
                                                        <td><input type="checkbox" value="yes" name="apmc_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="apmc_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>17.</td>
                                                        <td>Nurse's Initials</td>
                                                        <td><input type="checkbox" value="yes" name="ni_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="ni_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>18.</td>
                                                        <td>Checked by HOD</td>
                                                        <td><input type="checkbox" value="yes" name="check_hod_day" class="form-control" placeholder=""></td>
                                                        <td><input type="checkbox" value="yes" name="check_hod_night" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                            <!--form here--->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
