@extends('layouts.master')

@section('content')

    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')

    <!-- Title & Breadcrumbs-->
    <div class="page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">ACCIDENT AND EMERGENCY RECORD INITIAL ASSESSMENT FORM</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>ACCIDENT AND EMERGENCY RECORD INITIAL ASSESSMENT FORM</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>

                                <th>Date</th>
                                <th>Time</th>
                                <th>General</th>
                                <th>Head And Ent</th>
                                <th>Spine Precautions</th>
                                <th>GCS E</th>
                                <th>GCS V</th>
                                <th>GCS M</th>
                                <th>GCS TOTAL</th>
                                <th>GCS A</th>
                                <th>GCS V 2</th>
                                <th>GCS P</th>
                                <th>GCS U</th>
                                <th>RESPIRATORY AIRWAY PATIENT</th>
                                <th>RESPIRATORY AIRWAY STRIDOR</th>
                                <th>RESPIRATORY AIRWAY OBSTRUCTED</th>
                                <th>RESPIRATORY AIRWAY EASY</th>
                                <th>RESPIRATORY AIRWAY DYSPNEA</th>
                                <th>RESPIRATORY AIRWAY TACHYPNEA</th>
                                <th>RESPIRATORY AIRWAY SHALLOW</th>
                                <th>BREATH SOUNDS NOT AUSCULATED</th>
                                <th>BREATH SOUNDS BILATERAL</th>
                                <th>BREATH SOUNDS WHEEZES</th>
                                <th>BREATH SOUNDS DIMINISHED</th>
                                <th>BREATH SOUNDS CLEAR</th>
                                <th>BREATH SOUNDS CRACKLES</th>
                                <th>OXYGEN SAT/RA</th>
                                <th>OXYGEN ADMIN PER</th>
                                <th>AT</th>
                                <th>OXYGEN SAT</th>
                                <th>CARDIOVASCULAR PULSE</th>
                                <th>CARDIOVASCULAR JVP</th>
                                <th>CARDIOVASCULAR PRECORDIUM</th>
                                <th>BREATH SOUNDS WARM</th>
                                <th>DRY</th>
                                <th>COOL</th>
                                <th>MOIST</th>
                                <th>ABDOMEN SOFT</th>
                                <th>DISTENDED</th>
                                <th>TENDERNESS</th>
                                <th>BOWEL SOUNDS PRESENT</th>
                                <th>ABSENT</th>
                                <th>LAST MEAL</th>
                                <th>EXTREME DEFORMITY</th>
                                <th>MOVES ALL DEFORMITIES</th>
                                <th>DIGITAL PULSE PRESENT</th>
                                <th>PARTS OF THE BODY IN PAIN</th>
                                <th>DIAGNOSIS</th>
                                <th>DISCHARGE PRESCRIPTION</th>
                                <th>DISCHARGE INSTRUCTIONS</th>
                                <th>IMPROVED</th>
                                <th>UNCHANGED</th>
                                <th>RETURN APPOINTMENT DATE</th>
                                <th>PATIENT ADMITTED TO</th>
                                <th>ADMISSION TIME</th>
                                <th>DISCHARGE TIME</th>
                                <th>SIGNATURE</th>
                                <th>DOCTORS NAME</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($initial_assessment_form_results))
                                @foreach($initial_assessment_form_results as $initial_assessment_form_result)
                                    <tr>

                                        <td>{{ $initial_assessment_form_result->bio_bed_date}}</td>
                                        <td>{{ $initial_assessment_form_result->bio_bed_time}}</td>
                                        <td>{{ $initial_assessment_form_result->general}}</td>
                                        <td>{{ $initial_assessment_form_result->head_and_ent}}</td>
                                        <td>{{ $initial_assessment_form_result->spine_precautions}}</td>
                                        <td>{{ $initial_assessment_form_result->gcs_e}}</td>
                                        <td>{{ $initial_assessment_form_result->gcs_v}}</td>
                                        <td>{{ $initial_assessment_form_result->gcs_m}}</td>
                                        <td>{{ $initial_assessment_form_result->gcs_total}}</td>
                                        <td>{{ $initial_assessment_form_result->gcs_a}}</td>
                                        <td>{{ $initial_assessment_form_result->gcs_v_two}}</td>
                                        <td>{{ $initial_assessment_form_result->gcs_p}}</td>
                                        <td>{{ $initial_assessment_form_result->gcs_u}}</td>
                                        <td>{{ $initial_assessment_form_result->patient_b}}</td>
                                        <td>{{ $initial_assessment_form_result->stridor}}</td>
                                        <td>{{ $initial_assessment_form_result->obstructed}}</td>
                                        <td>{{ $initial_assessment_form_result->easy}}</td>
                                        <td>{{ $initial_assessment_form_result->dyspnea}}</td>
                                        <td>{{ $initial_assessment_form_result->tachypnea}}</td>
                                        <td>{{ $initial_assessment_form_result->shallow}}</td>
                                        <td>{{ $initial_assessment_form_result->not_ausculated}}</td>
                                        <td>{{ $initial_assessment_form_result->bilateral}}</td>
                                        <td>{{ $initial_assessment_form_result->wheezes}}</td>
                                        <td>{{ $initial_assessment_form_result->diminished}}</td>
                                        <td>{{ $initial_assessment_form_result->clear}}</td>
                                        <td>{{ $initial_assessment_form_result->crackles}}</td>
                                        <td>{{ $initial_assessment_form_result->oxygen_sat_ra}}</td>
                                        <td>{{ $initial_assessment_form_result->oxygen_admin_per}}</td>
                                        <td>{{ $initial_assessment_form_result->at}}</td>
                                        <td>{{ $initial_assessment_form_result->oxygen_sat_b}}</td>
                                        <td>{{ $initial_assessment_form_result->pulse_b}}</td>
                                        <td>{{ $initial_assessment_form_result->jvp}}</td>
                                        <td>{{ $initial_assessment_form_result->precordium}}</td>
                                        <td>{{ $initial_assessment_form_result->warm}}</td>
                                        <td>{{ $initial_assessment_form_result->dry}}</td>
                                        <td>{{ $initial_assessment_form_result->cool}}</td>
                                        <td>{{ $initial_assessment_form_result->moist_diaphoretic}}</td>
                                        <td>{{ $initial_assessment_form_result->soft}}</td>
                                        <td>{{ $initial_assessment_form_result->distened}}</td>
                                        <td>{{ $initial_assessment_form_result->tenderness}}</td>
                                        <td>{{ $initial_assessment_form_result->present}}</td>
                                        <td>{{ $initial_assessment_form_result->absent}}</td>
                                        <td>{{ $initial_assessment_form_result->last_meal}}</td>
                                        <td>{{ $initial_assessment_form_result->extremety_deformity}}</td>
                                        <td>{{ $initial_assessment_form_result->moves_all_extremities}}</td>
                                        <td>{{ $initial_assessment_form_result->digital_pulses_present}}</td>
                                        <td>{{ $initial_assessment_form_result->part_of_body_in_pain}}</td>
                                        <td>{{ $initial_assessment_form_result->diagnosis_b}}</td>
                                        <td>{{ $initial_assessment_form_result->discharge_pescription}}</td>
                                        <td>{{ $initial_assessment_form_result->discharge_instruction}}</td>
                                        <td>{{ $initial_assessment_form_result->improved}}</td>
                                        <td>{{ $initial_assessment_form_result->unchanged}}</td>
                                        <td>{{ $initial_assessment_form_result->return_appointment_date}}</td>
                                        <td>{{ $initial_assessment_form_result->patient_admitted_to}}</td>
                                        <td>{{ $initial_assessment_form_result->admission_time}}</td>
                                        <td>{{ $initial_assessment_form_result->discharge_time}}</td>
                                        <td>{{ $initial_assessment_form_result->signature_a}}</td>
                                        <td>{{ $initial_assessment_form_result->doctors_name}}</td>

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
                                <h4 class="modal-title">Add Assessment Information</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container-fluid">
                                            <form action="{{route('initial_assessment_form_post' , ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}

                                                    <div class="tab-content tabs" id="home">
                                                            <div class="col-md-12 align-self-center text-center">
                                                                <H3><u>ACCIDENT AND EMERGENCY RECORD INITIAL ASSESSMENT FORM</u></H3>
                                                            </div>
                                                            <br><br>
                                                            <div class="offset-md-6">

                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p>DATE:</p>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="date"  id="myDate" name="bio_bed_date"  readonly class="form-control" placeholder="click to enter date">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p>TIME:</p>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="time" name="bio_bed_time" class="form-control" placeholder="click to enter time">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row ">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H3><u>INITIAL ASSESSMENT RECORD</u></H3>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">GENERAL:</label>
                                                                    <div class="col-sm-12">
                                                                        <select class="form-control" name="general" id="general">
                                                                            <option value="general">PALLOR</option>
                                                                            <option value="general">JAUNDICE</option>
                                                                            <option value="general">EDEMA</option>
                                                                            <option value="general">ALL</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">HEAD AND ENT:</label>
                                                                    <div class="col-sm-12">
                                                                        <select class="form-control" name="head_and_ent" id="head_and_ent">
                                                                            <option value="head_and_ent">NO ABNORMALITIES NOTED</option>
                                                                            <option value="head_and_ent">EXUDATE</option>
                                                                            <option value="head_and_ent">BLEEDING</option>
                                                                            <option value="head_and_ent">EXUDATE AND BLEEDING</option>
                                                                            <option value="head_and_ent">ALL</option>
                                                                            <option value="head_and_ent">OTHER</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>NEUROLOGICAL:</H4>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                        <input type="checkbox" placeholder="" name="spine_precautions">C-SPINE PRECAUTIONS
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <p>GCS:</p><br><br>
                                                                <div class="col-md-2">
                                                                    <label for="staticEmail" class="col-sm-6 col-form-label">E:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="gcs_e" class="form-control" placeholder="E/4">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-6 col-form-label">V:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="gcs_v" class="form-control" placeholder="V/5">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-6 col-form-label">M:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="gcs_m" class="form-control" placeholder="M/6">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-6 col-form-label">TOTAL:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="gcs_total" class="form-control" placeholder="Total/15">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <p>GCS:</p><br><br>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" placeholder="" name="gcs_a">A
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" placeholder="" name="gcs_v_two">V
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" placeholder="" name="gcs_p">P
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" placeholder="" name="gcs_u">U
                                                                </div>
                                                            </div>
                                                        <br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>RESPIRATORY AIRWAY:</H4>
                                                                </div>
                                                                <div class="col-md-4">
                                                                        <input type="checkbox" placeholder="" name="patient_b">PATIENT
                                                                </div>
                                                                <div class="col-md-4">
                                                                        <input type="checkbox" placeholder="" name="stridor">STRIDOR
                                                                </div>
                                                                <div class="col-md-4">
                                                                        <input type="checkbox" placeholder="" name="obstructed">OBSTRUCTED
                                                                </div>
                                                            </div>
                                                        <br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>RESPIRATIONS:</H4>
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" placeholder="" name="easy">EASY
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" placeholder="" name="dyspnea">DYSPNEA
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" placeholder="" name="tachypnea">TACHYPNEA
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" placeholder="" name="shallow">SHALLOW
                                                                </div>
                                                            </div>
                                                        <br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>BREATH SOUNDS:</H4>
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" placeholder="" name="not_ausculated">NOT AUSCULATED
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" placeholder="" name="bilateral">BILATERAL
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" placeholder="" name="wheezes">WHEEZES
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" placeholder="" name="diminished">DIMINISHED
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" placeholder="" name="clear">CLEAR
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" placeholder="" name="crackles">CRACKLES
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">OXYGEN SAT,R/A:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="oxygen_sat_ra" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">OXYGEN ADMIN PER:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="oxygen_admin_per" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">AT:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="at" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">OXYGEN SAT:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="oxygen_sat_b" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>CARDIOVASCULAR:</H4>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">PULSE:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="pulse_b" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">JVP:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="jvp" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">PRECORDIUM:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="precordium" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>BREATH SOUNDS:</H4>
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" placeholder="" name="warm">WARM
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" placeholder="" name="dry">DRY
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" placeholder="" name="cool">COOL
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" placeholder="" name="moist_diaphoretic">MOIST/DIAPHORETIC
                                                                </div>
                                                            </div>
                                                        <br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>ABDOMEN:</H4>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <input type="checkbox" placeholder="" name="soft">SOFT
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <input type="checkbox" placeholder="" name="distened">DISTENDED
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="col-sm-12">
                                                                        <input type="checkbox" placeholder="" name="tenderness">TENDERNESS
                                                                        <input type="text" name="tenderness" class="form-control" placeholder="comment on tenderness">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>BOWEL SOUNDS:</H4>
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" placeholder="" name="present">PRESENT
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" placeholder="" name="absent">ABSENT
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="col-sm-12">
                                                                        LAST MEAL
                                                                        <input type="text" name="last_meal" class="form-control" placeholder="comment on last meal">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>MUSCULOSKELETAL:</H4>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">EXTREMETY DEFORMITY:</label>
                                                                    <div class="col-sm-8">
                                                                        <label class="radio-inline"><input type="radio" value="Yes" name="extremety_deformity">YES</label>
                                                                        <label class="radio-inline"><input type="radio" value="No" name="extremety_deformity">NO</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">MOVES ALL EXTREMITIES:</label>
                                                                    <div class="col-sm-8">
                                                                        <label class="radio-inline"><input type="radio" value="Yes" name="moves_all_extremities">YES</label>
                                                                        <label class="radio-inline"><input type="radio" value="No" name="moves_all_extremities">NO</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">DIGITAL PULSES PRESENT:</label>
                                                                    <div class="col-sm-8">
                                                                        <label class="radio-inline"><input type="radio" value="Yes" name="digital_pulses_present">YES</label>
                                                                        <label class="radio-inline"><input type="radio" value="No" name="digital_pulses_present">NO</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="staticEmail" class="col-sm-10 col-form-label">DESCRIBE THE PART OF THE BODY IN PAIN:</label>
                                                                    <div class="col-sm-12">
                                                                        <textarea input-type="text" name="part_of_body_in_pain" class="form-control" placeholder=""></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="staticEmail" class="col-sm-10 col-form-label">DIAGNOSIS:</label>
                                                                    <div class="col-sm-12">
                                                                        <textarea input-type="text" name="diagnosis_b" class="form-control" placeholder=""></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="staticEmail" class="col-sm-10 col-form-label">DISCHARGE PRESCRIPTIONS:</label>
                                                                    <div class="col-sm-12">
                                                                        <textarea input-type="text" name="discharge_pescription" class="form-control" placeholder=""></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="staticEmail" class="col-sm-10 col-form-label">DISCHARGE INSTRUCTIONS:</label>
                                                                    <div class="col-sm-12">
                                                                        <textarea input-type="text" name="discharge_instruction" class="form-control" placeholder=""></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>CONDITION AT DISCHARGE:</H4>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <input type="checkbox" placeholder="" name="improved">IMPROVED
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <input type="checkbox" placeholder="" name="unchanged">UNCHANGED
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="staticEmail" class="col-sm-10 col-form-label">RETURN APPOINTMENT DATE:</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="date" name="return_appointment_date" class="form-control" placeholder="">
                                                                    </div>
                                                                    <p>NB:THE PATIENT IS REQUIRED TO RETURN IMMEADIATELY IF SYMPTOMS GET WORSE.</p>
                                                                </div>
                                                            </div>
                                                            <div class="offset-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p>PATIENT ADMITTED TO:</p>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="patient_admitted_to" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p>ADMISSION TIME:</p>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="time" name="admission_time" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p>DISCHARGE TIME:</p>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="time" name="discharge_time" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p>SIGNATURE:</p>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="signature_a" class="form-control" placeholder="" value="{{ Auth::user()->id_number }}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p>DOCTOR'S NAME:</p>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="doctors_name" class="form-control" placeholder="" value="{{ Auth::user()->name }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
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