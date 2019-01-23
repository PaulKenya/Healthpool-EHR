@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Blood transfusion observation chart</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Blood transfusion observation chart</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                {{--<th>name_of_patient</th>--}}
                                {{--<th>ip_number</th>--}}
                                {{--<th>ward</th>--}}
                                {{--<th>age</th>--}}
                                {{--<th>sex</th>--}}
                                <th>Print</th>
                                <th>diagnosis</th>
                                <th>whole_blood</th>
                                <th>prbcs</th>
                                <th>plt</th>
                                <th>ffp</th>
                                <th>blood_unit_donor_number</th>
                                <th>transfusion_started_by</th>
                                <th>counter_checked_by</th>
                                <th>rate_of_transfusion</th>
                                <th>hours_of_observation</th>
                                <th>exact_time</th>
                                <th>bp</th>
                                <th>temperature</th>
                                <th>pr</th>
                                <th>rr</th>
                                <th>remarks</th>
                                <th>time_transfusion_ended</th>
                                <th>amount_of_transfused_blood</th>
                                <th>general_symptoms</th>
                                <th>dermatological_symptoms</th>
                                <th>cardiac_symptoms</th>
                                <th>renal_symptoms</th>
                                <th>haemotological_symptoms</th>
                                <th>other_symptoms</th>
                                <th>intervention_drugs_given</th>
                                <th>name_of_nurse_doctor_anaesthetist</th>
                                <th>signature</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($blood_transfusion_results))

                                @php
                                    $i=0
                                @endphp

                                @foreach($blood_transfusion_results as $blood_transfusion_result)

                                    @php
                                        $i++;
                                    @endphp

                                    <tr>
                                        {{--<td>{{$blood_transfusion_result->name_of_patient}}</td>--}}
                                        {{--<td>{{$blood_transfusion_result->ip_number}}</td>--}}
                                        {{--<td>{{$blood_transfusion_result->ward}}</td>--}}
                                        {{--<td>{{$blood_transfusion_result->age}}</td>--}}
                                        {{--<td>{{$blood_transfusion_result->sex}}</td>--}}
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">Print Record</button>
                                        </td>
                                        <td>{{$blood_transfusion_result->diagnosis}}</td>
                                        <td>{{$blood_transfusion_result->whole_blood}}</td>
                                        <td>{{$blood_transfusion_result->prbcs}}</td>
                                        <td>{{$blood_transfusion_result->plt}}</td>
                                        <td>{{$blood_transfusion_result->ffp}}</td>
                                        <td>{{$blood_transfusion_result->blood_unit_donor_number}}</td>
                                        <td>{{$blood_transfusion_result->transfusion_started_by}}</td>
                                        <td>{{$blood_transfusion_result->counter_checked_by}}</td>
                                        <td>{{$blood_transfusion_result->rate_of_transfusion}}</td>
                                        <td>{{$blood_transfusion_result->hours_of_observation}}</td>
                                        <td>{{$blood_transfusion_result->exact_time}}</td>
                                        <td>{{$blood_transfusion_result->bp}}</td>
                                        <td>{{$blood_transfusion_result->temperature}}</td>
                                        <td>{{$blood_transfusion_result->pr}}</td>
                                        <td>{{$blood_transfusion_result->rr}}</td>
                                        <td>{{$blood_transfusion_result->remarks}}</td>
                                        <td>{{$blood_transfusion_result->time_transfusion_ended}}</td>
                                        <td>{{$blood_transfusion_result->amount_of_transfused_blood}}</td>
                                        <td>{{$blood_transfusion_result->general_symptoms}}</td>
                                        <td>{{$blood_transfusion_result->dermatological_symptoms}}</td>
                                        <td>{{$blood_transfusion_result->cardiac_symptoms}}</td>
                                        <td>{{$blood_transfusion_result->renal_symptoms}}</td>
                                        <td>{{$blood_transfusion_result->haemotological_symptoms}}</td>
                                        <td>{{$blood_transfusion_result->other_symptoms}}</td>
                                        <td>{{$blood_transfusion_result->intervention_drugs_given}}</td>
                                        <td>{{$blood_transfusion_result->name_of_nurse_doctor_anaesthetist}}</td>
                                        <td>{{$blood_transfusion_result->signature}}</td>

                                        <!-- Triage Modal -->
                                        <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Blood Transfusion Observation</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="printableArea{{$i}}">
                                                            <h2>PATIENT RECORD</h2>
                                                            <p><b>Patient Name : </b> {{$patient->name}}</p>
                                                            <p><b>Diagnosis :</b> {{$blood_transfusion_result->diagnosis}}</p>
                                                            <p><b>Whole Blood :</b> {{$blood_transfusion_result->whole_blood}}</p>
                                                            <p><b>PRBCS :</b> {{$blood_transfusion_result->prbcs}}</p>
                                                            <p><b>PLT :</b> {{$blood_transfusion_result->plt}}</p>
                                                            <p><b>FFP :</b> {{$blood_transfusion_result->ffp}}</p>
                                                            <p><b>Blood Unit Donor Number :</b> {{$blood_transfusion_result->blood_unit_donor_number}}</p>
                                                            <p><b>Transfusion Started By :</b> {{$blood_transfusion_result->transfusion_started_by}}</p>
                                                            <p><b>Counter Checked By :</b> {{$blood_transfusion_result->counter_checked_by}}</p>
                                                            <p><b>Rate of Transfusion :</b> {{$blood_transfusion_result->rate_of_transfusion}}</p>
                                                            <p><b>Hours of Observation :</b> {{$blood_transfusion_result->hours_of_observation}}</p>
                                                            <p><b>Exact Time :</b> {{$blood_transfusion_result->exact_time}}</p>
                                                            <p><b>BP :</b> {{$blood_transfusion_result->bp}}</p>
                                                            <p><b>Temperature :</b> {{$blood_transfusion_result->temperature}}</p>
                                                            <p><b>PR :</b> {{$blood_transfusion_result->pr}}</p>
                                                            <p><b>RR :</b> {{$blood_transfusion_result->rr}}</p>
                                                            <p><b>Remarks :</b> {{$blood_transfusion_result->remarks}}</p>
                                                            <p><b>Time transfusion ended :</b> {{$blood_transfusion_result->time_transfusion_ended}}</p>
                                                            <p><b>Amount of transfused blood :</b> {{$blood_transfusion_result->amount_of_transfused_blood}}</p>
                                                            <p><b>General Symptoms :</b> {{$blood_transfusion_result->general_symptoms}}</p>
                                                            <p><b>Dermatological Symptoms :</b> {{$blood_transfusion_result->dermatological_symptoms}}</p>
                                                            <p><b>Cardiac Symptoms :</b> {{$blood_transfusion_result->cardiac_symptoms}}</p>
                                                            <p><b>Renal Symptoms :</b> {{$blood_transfusion_result->renal_symptoms}}</p>
                                                            <p><b>Haematological Symptoms :</b> {{$blood_transfusion_result->haemotological_symptoms}}</p>
                                                            <p><b>Other Symptoms :</b> {{$blood_transfusion_result->other_symptoms}}</p>
                                                            <p><b>Intervention Drugs Given :</b> {{$blood_transfusion_result->intervention_drugs_given}}</p>
                                                            <p><b>Name of medical officer incharge :</b> {{$blood_transfusion_result->name_of_nurse_doctor_anaesthetist}}</p>
                                                            <p><b>Signature :</b> {{$blood_transfusion_result->signature}}</p>
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

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add record</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">

                                        <div class="container-fluid">
                                            <form action="{{ route('blood_transfusion_observation_form_post',['patient_id'=>$patient_id])}}" enctype="multipart/form-data" method="post">
                                                {!! csrf_field() !!}
                                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                <h4>Blood Transfusion Observation Chart</h4>
                                                {{--<div class="form-row">--}}
                                                    {{--<div class="form-group col">--}}
                                                        {{--<label for="name_of_patient">Name of patient</label>--}}
                                                        {{--<input type="text" name="name_of_patient" id="name_of_patient" class="form-control" placeholder="" >--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group col">--}}
                                                        {{--<label for="ip_number">IP/NO</label>--}}
                                                        {{--<input type="number" name="ip_number" id="ip_number" class="form-control" placeholder="" >--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group col">--}}
                                                        {{--<label for="ward">Ward</label>--}}
                                                        {{--<input type="number" name="ward" id="ward" class="form-control" placeholder="" >--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-row">--}}
                                                    {{--<div class="form-group col">--}}
                                                        {{--<label for="age">Age</label>--}}
                                                        {{--<input type="number" name="age" id="age" class="form-control" placeholder="" >--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group col">--}}
                                                        {{--<label for="sex">sex</label>--}}
                                                        {{--<select class="form-control" name="sex" id="sex">--}}
                                                            {{--<option value="male">Male</option>--}}
                                                            {{--<option value="female">Female</option>--}}
                                                        {{--</select>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="diagnosis">Diagnosis</label>
                                                        <textarea class="form-control" name="diagnosis" id="diagnosis" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label>Type of blood component transfused: </label>
                                                    </div>
                                                    <div class="form-check col">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" name="whole_blood" id="whole_blood" value="whole_blood" >
                                                            Whole blood
                                                        </label>
                                                    </div>
                                                    <div class="form-check col">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" name="prbcs" id="prbcs" value="prbcs" >
                                                            PRBCS
                                                        </label>
                                                    </div>
                                                    <div class="form-check col">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" name="plt" id="plt" value="plt" >
                                                            PLT
                                                        </label>
                                                    </div>
                                                    <div class="form-check col">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" name="ffp" id="ffp" value="ffp" >
                                                            FFP
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="blood_unit_donor_number">Blood Unit Donor No</label>
                                                        <input type="number" name="blood_unit_donor_number" id="blood_unit_donor_number" class="form-control" placeholder="" >
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="transfusion_started_by">Transfusion started by: </label>
                                                        <input type="text" name="transfusion_started_by" id="transfusion_started_by" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="counter_checked_by">Counter checked by: </label>
                                                        <input type="text" name="counter_checked_by" id="counter_checked_by" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="rate_of_transfusion">Rate of transfusion (ml/minute)</label>
                                                        <input type="number" name="rate_of_transfusion" id="rate_of_transfusion" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <h5>OBSERVATIONS</h5>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="hours_of_observation">Hours of observation</label>
                                                        <select class="form-control" name="hours_of_observation" id="hours_of_observation">
                                                            <option value="before_transfusion">Before transfusion</option>
                                                            <option value="0_mins">00 mins</option>
                                                            <option value="15_mins">15 mins</option>
                                                            <option value="45_mins">45 mins</option>
                                                            <option value="1_hr_15_mins">1 hr 15 mins</option>
                                                            <option value="1_hr_45_mins">1 hr 45 mins</option>
                                                            <option value="2_hrs_15_mins">2 hrs 15 mins</option>
                                                            <option value="2_hrs_45_mins">2 hrs 45 mins</option>
                                                            <option value="3_hrs_15_mins">3 hrs 15 mins</option>
                                                            <option value="3_hrs_45_mins">3 hrs 45 mins</option>
                                                            <option value="4_hrs_15_mins">4 hrs 15 mins</option>
                                                            <option value="4_hrs_after_blood_transfusion">4 hrs after blood transfusion</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="exact_time">Exact time</label>
                                                        <input type="time" name="exact_time" id="exact_time" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="bp">BP</label>
                                                        <input type="number" name="bp" id="bp" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="temperature">Temperature</label>
                                                        <input type="number" name="temperature" id="temperature" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="pr">PR</label>
                                                        <input type="number" name="pr" id="pr" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="rr">RR</label>
                                                        <input type="number" name="rr" id="rr" class="form-control" placeholder="" >
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="remarks">Remarks</label>
                                                        <textarea class="form-control" name="remarks" id="remarks" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="time_transfusion_ended">Time transfusion ended</label>
                                                        <input type="time" name="time_transfusion_ended" id="time_transfusion_ended" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="amount_of_transfused_blood">Amount of transfused blood (ml)</label>
                                                        <input type="number" name="amount_of_transfused_blood" id="amount_of_transfused_blood" class="form-control" placeholder="" >
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <h6>SYMPTOMS OR SIGNS OF TRANSFUSION REACTIONS OBSERVED</h6>
                                                    <div class="form-group col-md-12">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="general_symptoms" id="general_symptoms" value="general_symptoms" >
                                                                General: Fever, Chills/Rigors, Flushing/Nausea/Vomiting
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="dermatological_symptoms" id="dermatological_symptoms" value="dermatological_symptoms" >
                                                                Dermatological: Urticarial, Other skin rash
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="cardiac_symptoms" id="cardiac_symptoms" value="cardiac_symptoms" >
                                                                Cardiac/Respiratory: Chest pain, Dyspnea, Hypotension, Tachycardia
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="renal_symptoms" id="renal_symptoms" value="renal_symptoms" >
                                                                Renal: Haemoglobinuria, Oliguria, Anuria
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="haemotological_symptoms" id="haemotological_symptoms" value="haemotological_symptoms" >
                                                                Haemotological: Unexplained bleeding
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="other_symptoms">Others: </label>
                                                        <input type="text" name="other_symptoms" id="other_symptoms" class="form-control" placeholder="" >
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="intervention_drugs_given">Intervention/Drugs given</label>
                                                        <textarea class="form-control" name="intervention_drugs_given" id="intervention_drugs_given" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="name_of_nurse_doctor_anaesthetist">Name of the Nurse/Doctor/Anaesthetist</label>
                                                        <input type="text" name="name_of_nurse_doctor_anaesthetist" id="name_of_nurse_doctor_anaesthetist" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="signature">Signature </label>
                                                        <input type="text" name="signature" id="signature" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="date">Date</label>
                                                        <input type="date" name="date"  id="myDate" class="form-control" placeholder=""  readonly>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
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