@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Preoperative Checklist Record</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Preoperative Checklist Record</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Print</th>
                                <th>PATIENT_NAME</th>
                                <th>IP_NO</th>
                                <th>AGE</th>
                                <th>SEX</th>
                                <th>WARD</th>
                                <th>BED</th>
                                <th>WIGS</th>
                                <th>JEWELLERY</th>
                                <th>PREPARATION</th>
                                <th>URINALYSIS</th>
                                <th>SUGAR</th>
                                <th>ALBUMIN</th>
                                <th>BLADDER_CHECK_AND_URINARY_CATHETER</th>
                                <th>GASthIC_TUBE</th>
                                <th>X_RAYS</th>
                                <th>CONSENT_GIVEN</th>
                                <th>PCV</th>
                                <th>TEMPERATURE</th>
                                <th>HYDRATION_NORMAL</th>
                                <th>CHEST_NORMAL</th>
                                <th>PULSE_MIN</th>
                                <th>RMP_COMPLETED</th>
                                <th>IPF_OPERATION</th>
                                <th>BLOOD_AVAILABLE</th>
                                <th>HB</th>
                                <th>ELECthOLYTE_NORMAL</th>
                                <th>BP_SYSTOLIC</th>
                                <th>PULSE</th>
                                <th>DENTURES</th>
                                <th>HAS_CONSENT_BEEN_GIVEN</th>
                                <th>PREMEDICATION_GIVEN</th>
                                <th>WARD_NURSE_SIGNATURE</th>
                                <th>WARD_NURSE_SIGN_DATE</th>
                                <th>WARD_NURSE_SIGN_TIME</th>
                                <th>WARD_DOCTOR_SIGNATURE</th>
                                <th>DOCTOR_SIGNATURE_DATE</th>
                                <th>DOCTOR_SIGNATURE_TIME</th>
                                <th>PATIENT_SEEN_BY_ANAESTHETIST</th>
                                <th>ANAESTHETIST_SIGNATURE</th>
                                <th>ANAESTHETIST_SIGN_DATE</th>
                                <th>ANAESTHETIST_SIGN_TIME</th>
                                <th>SIGNATURE_OF_ANAESTHETIST</th>
                                <th>SIGN_DATE</th>
                                <th>SIGN_TIME</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($preoperative_checklist))
                                @php
                                    $i=0
                                @endphp
                                @foreach($preoperative_checklist as $preoperative_checklist_result)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">Print Record</button>
                                        </td>
                                        <td>{{$preoperative_checklist_result->patient_name}}</td>
                                        <td>{{$preoperative_checklist_result->ip_no}}</td>
                                        <td>{{$preoperative_checklist_result->age}}</td>
                                        <td>{{$preoperative_checklist_result->sex}}</td>
                                        <td>{{$preoperative_checklist_result->ward}}</td>
                                        <td>{{$preoperative_checklist_result->bed}}</td>
                                        <td>{{$preoperative_checklist_result->wigs}}</td>
                                        <td>{{$preoperative_checklist_result->jewellery}}</td>
                                        <td>{{$preoperative_checklist_result->preparation}}</td>
                                        <td>{{$preoperative_checklist_result->urinalysis}}</td>
                                        <td>{{$preoperative_checklist_result->sugar}}</td>
                                        <td>{{$preoperative_checklist_result->albumin}}</td>
                                        <td>{{$preoperative_checklist_result->bladder_check_and_urinary_catheter}}</td>
                                        <td>{{$preoperative_checklist_result->gastric_tube}}</td>
                                        <td>{{$preoperative_checklist_result->x_rays}}</td>
                                        <td>{{$preoperative_checklist_result->consent_given}}</td>
                                        <td>{{$preoperative_checklist_result->pcv}}</td>
                                        <td>{{$preoperative_checklist_result->temperature}}</td>
                                        <td>{{$preoperative_checklist_result->hydration_normal}}</td>
                                        <td>{{$preoperative_checklist_result->chest_normal}}</td>
                                        <td>{{$preoperative_checklist_result->pulse_min}}</td>
                                        <td>{{$preoperative_checklist_result->rmp_completed}}</td>
                                        <td>{{$preoperative_checklist_result->ipf_operation}}</td>
                                        <td>{{$preoperative_checklist_result->blood_available}}</td>
                                        <td>{{$preoperative_checklist_result->hb}}</td>
                                        <td>{{$preoperative_checklist_result->electrolyte_normal}}</td>
                                        <td>{{$preoperative_checklist_result->bp_systolic}}</td>
                                        <td>{{$preoperative_checklist_result->pulse}}</td>
                                        <td>{{$preoperative_checklist_result->dentures}}</td>
                                        <td>{{$preoperative_checklist_result->has_consent_been_given}}</td>
                                        <td>{{$preoperative_checklist_result->premedication_given}}</td>
                                        <td>{{$preoperative_checklist_result->ward_nurse_signature}}</td>
                                        <td>{{$preoperative_checklist_result->ward_nurse_sign_date}}</td>
                                        <td>{{$preoperative_checklist_result->ward_nurse_sign_time}}</td>
                                        <td>{{$preoperative_checklist_result->ward_doctor_signature}}</td>
                                        <td>{{$preoperative_checklist_result->doctor_signature_date}}</td>
                                        <td>{{$preoperative_checklist_result->doctor_signature_time}}</td>
                                        <td>{{$preoperative_checklist_result->patient_seen_by_anaesthetist}}</td>
                                        <td>{{$preoperative_checklist_result->anaesthetist_signature}}</td>
                                        <td>{{$preoperative_checklist_result->anaesthetist_sign_date}}</td>
                                        <td>{{$preoperative_checklist_result->anaesthetist_sign_time}}</td>
                                        <td>{{$preoperative_checklist_result->signature_of_anaesthetist}}</td>
                                        <td>{{$preoperative_checklist_result->sign_date}}</td>
                                        <td>{{$preoperative_checklist_result->sign_time}}</td>
                                        <!-- Triage Modal -->
                                        <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Preoperative Checklist</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="printableArea{{$i}}">
                                                            <h2>PATIENT RECORD</h2>
                                                            <p><b>Patient Name : </b> {{$patient->name}}</p>
                                                            <p><b>IP_NO : </b>{{$preoperative_checklist_result->ip_no}}</p>
                                                            <p><b>Age : </b>{{$preoperative_checklist_result->age}}</p>
                                                            <p><b>Sex : </b>{{$preoperative_checklist_result->sex}}</p>
                                                            <p><b>Ward : </b>{{$preoperative_checklist_result->ward}}</p>
                                                            <p><b>Bed : </b>{{$preoperative_checklist_result->bed}}</p>
                                                            <p><b>Wigs : </b>{{$preoperative_checklist_result->wigs}}</p>
                                                            <p><b>Jewellery : </b>{{$preoperative_checklist_result->jewellery}}</p>
                                                            <p><b>Preparation : </b>{{$preoperative_checklist_result->preparation}}</p>
                                                            <p><b>Urinalysis : </b>{{$preoperative_checklist_result->urinalysis}}</p>
                                                            <p><b>Sugar : </b>{{$preoperative_checklist_result->sugar}}</p>
                                                            <p><b>Albumin : </b>{{$preoperative_checklist_result->albumin}}</p>
                                                            <p><b>Bladder check and urinary catheter : </b>{{$preoperative_checklist_result->bladder_check_and_urinary_catheter}}</p>
                                                            <p><b>Gastric tube : </b>{{$preoperative_checklist_result->gastric_tube}}</p>
                                                            <p><b>X rays : </b>{{$preoperative_checklist_result->x_rays}}</p>
                                                            <p><b>Consent Given : </b>{{$preoperative_checklist_result->consent_given}}</p>
                                                            <p><b>PCV : </b>{{$preoperative_checklist_result->pcv}}</p>
                                                            <p><b>Temperature : </b>{{$preoperative_checklist_result->temperature}}</p>
                                                            <p><b>Hydration normal : </b>{{$preoperative_checklist_result->hydration_normal}}</p>
                                                            <p><b>Chest normal : </b>{{$preoperative_checklist_result->chest_normal}}</p>
                                                            <p><b>Pulse min : </b>{{$preoperative_checklist_result->pulse_min}}</p>
                                                            <p><b>RMP completed : </b>{{$preoperative_checklist_result->rmp_completed}}</p>
                                                            <p><b>IPF operation : </b>{{$preoperative_checklist_result->ipf_operation}}</p>
                                                            <p><b>Blood available : </b>{{$preoperative_checklist_result->blood_available}}</p>
                                                            <p><b>HB : </b>{{$preoperative_checklist_result->hb}}</p>
                                                            <p><b>Electrolyte Normal : </b>{{$preoperative_checklist_result->electrolyte_normal}}</p>
                                                            <p><b>BP systolic : </b>{{$preoperative_checklist_result->bp_systolic}}</p>
                                                            <p><b>Pulse : </b>{{$preoperative_checklist_result->pulse}}</p>
                                                            <p><b>Dentures : </b>{{$preoperative_checklist_result->dentures}}</p>
                                                            <p><b>Has consent been given? : </b>{{$preoperative_checklist_result->has_consent_been_given}}</p>
                                                            <p><b>Premedication Given : </b>{{$preoperative_checklist_result->premedication_given}}</p>
                                                            <p><b>Ward nurse signature : </b>{{$preoperative_checklist_result->ward_nurse_signature}}</p>
                                                            <p><b>Ward nurse sign date : </b>{{$preoperative_checklist_result->ward_nurse_sign_date}}</p>
                                                            <p><b>Ward nurse sign time : </b>{{$preoperative_checklist_result->ward_nurse_sign_time}}</p>
                                                            <p><b>Ward doctor signature : </b>{{$preoperative_checklist_result->ward_doctor_signature}}</p>
                                                            <p><b>Doctor signature date : </b>{{$preoperative_checklist_result->doctor_signature_date}}</p>
                                                            <p><b>Doctor signature time : </b>{{$preoperative_checklist_result->doctor_signature_time}}</p>
                                                            <p><b>Patient seen by anaesthetist : </b>{{$preoperative_checklist_result->patient_seen_by_anaesthetist}}</p>
                                                            <p><b>Anaesthetist signature : </b>{{$preoperative_checklist_result->anaesthetist_signature}}</p>
                                                            <p><b>Anaesthetist sign date : </b>{{$preoperative_checklist_result->anaesthetist_sign_date}}</p>
                                                            <p><b>Anaesthetist sign time : </b>{{$preoperative_checklist_result->anaesthetist_sign_time}}</p>
                                                            <p><b>Signature of anaesthetist : </b>{{$preoperative_checklist_result->signature_of_anaesthetist}}</p>
                                                            <p><b>Sign date : </b>{{$preoperative_checklist_result->sign_date}}</p>
                                                            <p><b>Sign time : </b>{{$preoperative_checklist_result->sign_time}}</p>
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
                                <h4 class="modal-title">Add Preoperative Checklist Record</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">

                                        <div class="container-fluid">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <h3 >PREOPERATIVE CHECKLIST</h3>
                                                </div>
                                                <form method="post" action="{{ route('preoperative_checklist_post',['patient_id'=>$patient_id])}}" enctype="multipart/form-data">
                                                    {!! csrf_field() !!}
                                                    <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                    <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                    <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="form-group row">
                                                                <label  class="col-sm-2 col-form-label">Patient's Name</label>
                                                                <div class="col-sm-10">
                                                                    <input name="patient_name" type="text" class="form-control"  placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group row">
                                                                <label  class="col-sm-2 col-form-label">IP NO</label>
                                                                <div class="col-sm-10">
                                                                    <input name="ip_no" type="text" class="form-control"  placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-md-3">
                                                            <div class="form-group row">
                                                                <label  class="col-sm-2 col-form-label">Age</label>
                                                                <div class="col-sm-10">
                                                                    <input name="age" type="number" class="form-control"  placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="sex">Sex</label>
                                                            <select class="form-control" name="sex" id="sex">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group row">
                                                                <label  class="col-sm-2 col-form-label">Ward</label>
                                                                <div class="col-sm-10">
                                                                    <input name="ward" type="text" class="form-control"  placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">

                                                            <div class="form-group row">
                                                                <label  class="col-sm-2 col-form-label">Bed</label>
                                                                <div class="col-sm-10">
                                                                    <input name="bed" type="text" class="form-control"  placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">Ward Check(Nurse's)</th>
                                                                <th scope="col">Ward Check (Doctor's)</th>
                                                                <th scope="col">Theatre check(Anaestheric's)</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td scope="row">
                                                                    <div class="form-check">
                                                                        <label class="form-check-label" >
                                                                            A) Gowns and socks
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input name="wigs" class="form-check-input" type="checkbox" value="wigs" >
                                                                        <label class="form-check-label" >
                                                                            Wigs
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input name="jewellery" class="form-check-input" type="checkbox" value="jewellery" >
                                                                        <label class="form-check-label" >
                                                                            Jewelery etc
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input name="dentures" class="form-check-input" type="checkbox" value="dentures" >
                                                                        <label class="form-check-label" >
                                                                            Dentures
                                                                        </label>
                                                                    </div><div class="form-check">
                                                                        <input name="preparation" class="form-check-input" type="checkbox" value="preparation" >
                                                                        <label class="form-check-label" >
                                                                            Preparation
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label" >
                                                                            A) L.V Drips
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input name="urinalysis" class="form-check-input" type="checkbox" value="urinalysis" >
                                                                        <label class="form-check-label" >
                                                                            Urinalysis
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input name="sugar" class="form-check-input" type="checkbox" value="sugar" >
                                                                        <label class="form-check-label" >
                                                                            Sugar
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input name="albumin" class="form-check-input" type="checkbox" value="albumin" >
                                                                        <label class="form-check-label" >
                                                                            Albumin
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input name="bladder_check_and_urinary_catheter" class="form-check-input" type="checkbox" value="bladder_check_and_urinary_catheter" >
                                                                        <label class="form-check-label" >
                                                                            Bladder check and urinary catheter
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input name="gastric_tube" class="form-check-input" type="checkbox" value="gastric_tube" >
                                                                        <label class="form-check-label" >
                                                                            gastric tube
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class="col-sm-4 col-form-label">Xrays</label>
                                                                        <div class="col-sm-8">
                                                                            <input name="x_rays" type="text"   class="form-control"  value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class="col-sm-4 col-form-label">Blood available</label>
                                                                        <div class="col-sm-8">
                                                                            <input name="blood_available" type="text"   class="form-control"  value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class="col-sm-4 col-form-label">Consent Has been given?</label>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="consent_given" class="form-check-input" type="radio"  value="yes">
                                                                            <label class="form-check-label" >Yes</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="consent_given" class="form-check-input" type="radio"  value="no">
                                                                            <label class="form-check-label" >No</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">

                                                                        <div class="form-group row">
                                                                            <label  class="col-sm-4 col-form-label">Premedication Given?</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="premedication_given" class="form-check-input" type="radio"  value="yes">
                                                                            <label class="form-check-label" >Yes</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="premedication_given" class="form-check-input" type="radio"  value="no">
                                                                            <label class="form-check-label" >No</label>
                                                                        </div>
                                                                    </div>
                                                                </td>



                                                                <td>
                                                                    <div class="form-group row">
                                                                        <label  class=" col-form-label">Hydration normal?</label>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="hydration_normal" class="form-check-input" type="radio"  value="yes">
                                                                            <label class="form-check-label" >Yes</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="hydration_normal" class="form-check-input" type="radio"  value="no">
                                                                            <label class="form-check-label" >No</label>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label  class="col-sm-4 col-form-label">HB (Gm%)</label>
                                                                            <div class="col-sm-8">
                                                                                <input name="hb" type="text"   class="form-control"  value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label  class="col-sm-4 col-form-label">PCV (%)</label>
                                                                            <div class="col-sm-8">
                                                                                <input name="pcv" type="text" class="form-control"  value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label  class="col-form-label">Eletrolyte normal?</label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="form-check form-check-inline">
                                                                                <input name="electrolyte_normal" class="form-check-input" type="radio"  value="yes">
                                                                                <label class="form-check-label" >Yes</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input name="electrolyte_normal" class="form-check-input" type="radio"  value="no">
                                                                                <label class="form-check-label" >No</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label  class="col-sm-4 col-form-label">Temp (°C)</label>
                                                                            <div class="col-sm-8">
                                                                                <input name="temperature" type=" text"   class="form-control"  value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label  class=" col-form-label">Hydration normal?</label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="form-check form-check-inline">
                                                                                <input name="hydration_normal" class="form-check-input" type="radio"  value="yes">
                                                                                <label class="form-check-label" >Yes</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input name="hydration_normal" class="form-check-input" type="radio"  value="no">
                                                                                <label class="form-check-label" >No</label>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label  class="col-sm-4 col-form-label">Chest Normal?</label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="form-check form-check-inline">
                                                                                    <input name="chest_normal" class="form-check-input" type="radio" value="yes">
                                                                                    <label class="form-check-label" >Yes</label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input name="chest_normal" class="form-check-input" type="radio" value="no">
                                                                                    <label class="form-check-label" >No</label>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label  class="col-sm-4 col-form-label">BP Systolic (mmHg)</label>
                                                                                    <div class="col-sm-8">
                                                                                        <input name="bp_systolic" type=" text"   class="form-control"  value="yes">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label  class="col-sm-4 col-form-label">Pulse /Min</label>
                                                                                    <div class="col-sm-8">
                                                                                        <input name="pulse_min" type=" text"   class="form-control"  value="no">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label  class=" col-form-label">Relevant Medical Preoperation Completed??</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <input name="rmp_completed" class="form-check-input" type="radio" value="yes">
                                                                                        <label class="form-check-label" >Yes</label>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <input name="rmp_completed" class="form-check-input" type="radio" value="no">
                                                                                        <label class="form-check-label" >No</label>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label  class="col-form-label"><b>Is patient fit for operation?</b></label>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="form-check form-check-inline">
                                                                                            <input name="ipf_operation" class="form-check-input" type="radio"  value="yes">
                                                                                            <label class="form-check-label" >Yes</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <input name="ipf_operation" class="form-check-input" type="radio"  value="no">
                                                                                        <label class="form-check-label" >No</label>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label  class="col-sm-4 col-form-label">Blood Available (Units)</label>
                                                                                        <div class="col-sm-8">
                                                                                            <input name="blood_available" type="text"   class="form-control"  value="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label  class=" col-form-label"><b>Has consent been given?</b></label>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="form-check form-check-inline">
                                                                                            <input name="consent_given" class="form-check-input" type="radio" value="yes">
                                                                                            <label class="form-check-label" >Yes</label>
                                                                                        </div>
                                                                                        <div class="form-check form-check-inline">
                                                                                            <input name="consent_given" class="form-check-input" type="radio" value="no">
                                                                                            <label class="form-check-label" >No</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group row">
                                                                        <label  class="col-sm-4 col-form-label">Hb(%)</label>
                                                                        <div class="col-sm-8">
                                                                            <input name="hb" type="text" class="form-control"  >
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class="col-sm-4 col-form-label">PCV (%)</label>
                                                                        <div class="col-sm-8">
                                                                            <input name="pcv" type="text" class="form-control"  >
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class=" col-form-label"><b>Electrolyte Normal?</b></label>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="electrolyte_normal" class="form-check-input" type="radio" value="yes">
                                                                            <label class="form-check-label" >Yes</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="electrolyte_normal" class="form-check-input" type="radio" value="no">
                                                                            <label class="form-check-label" >No</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class="col-sm-4 col-form-label">Temp (°C)</label>
                                                                        <div class="col-sm-8">
                                                                            <input name="temperature" type="number" class="form-control"  >
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <br>
                                                                    <div class="form-group row">
                                                                        <label  class=" col-form-label">Urinalysis:</label>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class=" col-form-label">Sugar </label>
                                                                        <div class="col-sm-8">
                                                                            <input name="sugar" type="number" class="form-control"  >
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class=" col-form-label">Blood Pressure:</label>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class="col-sm-4 col-form-label">BP Systolic (mmHG)</label>
                                                                        <div class="col-sm-8">
                                                                            <input name="bp_systolic" type="text" class="form-control"  >
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class="col-sm-4 col-form-label">Diastolic (mmHG)</label>
                                                                        <div class="col-sm-8">
                                                                            <input name="bp_diastolic" type="text" class="form-control"  >
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class="col-sm-4 col-form-label">Pulse (mmHG)</label>
                                                                        <div class="col-sm-8">
                                                                            <input name="pulse" type="text" class="form-control"  >
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class="col-sm-4 col-form-label">Dentures </label>
                                                                        <div class="col-sm-8">
                                                                            <input name="dentures" type="text" class="form-control"  >
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class=" col-form-label"><b> Is patient fit for Operation? </b></label>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="ipf_operation" class="form-check-input" type="radio"  value="yes">
                                                                            <label class="form-check-label" >yes</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="ipf_operation" class="form-check-input" type="radio"  value="no">
                                                                            <label class="form-check-label" >no</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class=" col-form-label">Blood Available?</label>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="blood_available" class="form-check-input" type="radio"  value="yes">
                                                                            <label class="form-check-label" >yes</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="blood_available" class="form-check-input" type="radio"  value="no">
                                                                            <label class="form-check-label" >no</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class=" col-form-label"><b> has consent been given? </b></label> </div>
                                                                    <div class="form-group row">
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="has_consent_been_given" class="form-check-input" type="radio" value="yes">
                                                                            <label class="form-check-label" >yes</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="has_consent_been_given" class="form-check-input" type="radio" value="no">
                                                                            <label class="form-check-label" >no</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  class=" col-form-label">premedication given? </label>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="premedication_given" class="form-check-input" type="radio"  value="yes">
                                                                            <label class="form-check-label" >yes</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input name="premedication_given" class="form-check-input" type="radio"  value="no">
                                                                            <label class="form-check-label" >no</label>
                                                                        </div>
                                                                    </div>



                                                                </td>
                                                            </tr>
                                                            <td>
                                                                <div class="form-group row">
                                                                    <label  class=" col-form-label">Created By: </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label >Ward nurse's signature</label>
                                                                    <input name="ward_nurse_signature" type="text" class="form-control"  placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label >Date</label>
                                                                    <input name="ward_nurse_sign_date" id="myDate" type="date" readonly class="form-control"  placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label >Time</label>
                                                                    <input name="ward_nurse_sign_time" type="time" class="form-control"  placeholder="">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group row ">
                                                                    <label  class=" col-form-label">certified By: </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label >Ward Doctor's signature</label>
                                                                    <input name="ward_doctor_signature" type="text" class="form-control"  placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label >Date</label>
                                                                    <input name="doctor_signature_date" id="myDate1" type="date" readonly class="form-control"  placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label >Time</label>
                                                                    <input name="doctor_signature_time" type="time" class="form-control"  placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label >Patient Seen by Anaesthetist?</label>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="form-check form-check-inline">
                                                                        <input name="patient_seen_by_anaesthetist" class="form-check-input" type="radio"  value="yes">
                                                                        <label class="form-check-label" >yes</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input name="patient_seen_by_anaesthetist" class="form-check-input" type="radio" value="no">
                                                                        <label class="form-check-label" >no</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <label >Certified by:</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label >Anaesthetist's signature</label>
                                                                    <input name="anaesthetist_signature" type="text" class="form-control"  placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label >Date</label>
                                                                    <input name="date" type="anaesthetist_sign_date" id="myDate2" class="form-control" readonly  placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label >Time</label>
                                                                    <input name="time" type="anaesthetist_sign_time" class="form-control"  placeholder="">
                                                                </div>
                                                            </td>

                                                            <tr>
                                                                <td></td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label > Siganture of Anaesthetist</label>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="signature_of_anaesthetist" type="text" class="form-control"  placeholder="">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label >Date</label>
                                                                        <input name="sign_date" id="myDate3" type="date" readonly class="form-control"  placeholder="">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label >Time</label>
                                                                        <input name="sign_time" type="time" class="form-control"  placeholder="">
                                                                    </div>

                                                                </td>
                                                                <td>
                                                                    cerified by
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
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
    </div>
@endsection