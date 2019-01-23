@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_file_bread_crumbs')
    <!-- Title & Breadcrumbs-->
<div class="page-titles">
    <div class="col-md-12 align-self-center">

            {{--@php--}}
               {{--$user_department = \App\department::find($role_id)->department_name;--}}
            {{--@endphp--}}

    </div>
    <div class="page-titles">
    <div class="col-md-12 align-self-center">
        @if(isset($single_patient))
            @foreach($single_patient as $patient_information)
                <h4 class="theme-cl">PATIENT : {{ $patient_information->name }}</h4>
            @endforeach
            @endif

    </div>
</div>
<!-- Title & Breadcrumbs-->
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Single Patient</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>SEX</th>
                            <th>TITLE</th>
                            <th>NAME</th>
                            <th>MARRIED</th>
                            <th>COMPANY</th>
                            <th>DISTRICT</th>
                            <th>LOCATION</th>
                            <th>BIRTH DATE</th>

                            <th>PHONE NUMBER</th>
                            <th>SUB LOCATION</th>
                            <th>DIVISION</th>
                            <th>VILLAGE</th>
                            <th>ID/PASSPORT NO</th>
                            <th>NEXT OF KIN NAME</th>
                            <th>NEXT OF KIN RELATIONSHIP</th>
                            <th>PHONE NO</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($single_patient))
                            @foreach($single_patient as $patient_information)
                                <td>{{ $patient_information->sex }}</td>
                                <td>{{ $patient_information->title}}</td>
                                <td>{{ $patient_information->name}}</td>>
                                <td>{{ $patient_information->married}}</td>
                                <td>{{ $patient_information->company}}</td>
                                <td>{{ $patient_information->district}}</td>
                                <td>{{ $patient_information->location}}</td>
                                <td>{{ $patient_information->birth_date}}</td>

                                <td>{{ $patient_information->phone_number}}</td>
                                <td>{{ $patient_information->sub_location}}</td>
                                <td>{{ $patient_information->division}}</td>
                                <td>{{ $patient_information->village}}</td>
                                <td>{{ $patient_information->id_passport_no}}</td>
                                <td>{{ $patient_information->next_of_kin_name}}</td>
                                <td>{{ $patient_information->next_of_kin_relationship}}</td>
                                <td>{{ $patient_information->phone_no}}</td>

                            @endforeach
                        @endif
                        </tbody>
                    </table>



                    <div class="col-md-4">
                            <button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>
                    </div>
                    </div>
                </div>
            <div class="col-lg-12 col-md-12">
                <div class="card padd-15">

                    @php
                        $role_id=\App\User::find(Auth::user()->id)->roles->id;
                        $role = DB::table('roles')->find($role_id);
                       $links = Illuminate\Support\Facades\DB::table('links')->get();
                       $edit_links = Illuminate\Support\Facades\DB::table('link_roles')->where('role_id',$role->id)->get(['link_id','permissions'])->toArray();

                       $checked_links = [];
                       foreach ($edit_links as $edit_link){
                           $checked_links[$edit_link->link_id] = $edit_link->permissions;
                       }

                    @endphp


                    @if(isset($links))
                        @foreach($links as $link)
                            @if(array_key_exists($link->id,$checked_links)&&str_contains($checked_links[$link->id],'1'))
                                <a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route($link->url,['patient_id'=>$patient_information->id])}}">{{ $link->descriptive_name }}</a>
                            @else
                            @endif

                        @endforeach
                    @endif
                    {{--<div class="panel-group accordion-stylist" id="accordion" role="tablist" aria-multiselectable="true">--}}
                        {{--<div class="panel panel-default" style="display:inline-block">--}}
                            {{--<div class="panel-heading" role="tab" id="headingOne">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapsed">--}}
                                        {{--Patient File 1--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">--}}
                                {{--<div class="panel-body">--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('triage',['patient_id'=>$patient_information->id])}}">Triage</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('diet_sheet',['patient_id'=>$patient_information->id])}}">Diet Sheet</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('nutrition_care_process_form', ['patient_id'=>$patient_id])}}">Nutrition Care Process Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('occupational_therapy_initial_assessment_form', ['patient_id'=>$patient_id])}}">Occupational Therapy Initial Assessment_form</a>--}}

                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('occupational_therapy_initial_assessment_form', ['patient_id'=>$patient_id])}}">Physiotherapy Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('orthopaedic_examination_form',['patient_id'=>$patient_information->id])}}">Orthopaedic Clinic Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('orthopaedic_examination_test',['patient_id'=>$patient_information->id])}}">Orthopaedic Examination Tests</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('orthopaedic_examination_patient_standing',['patient_id'=>$patient_information->id])}}">Orthopaedic Examination Patient Standing</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('orthopaedic_examination_length_of_motion',['patient_id'=>$patient_information->id])}}">Orthopaedic Examination Length of Motion</a>--}}

                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('ear_nose_throat_examination_form',['patient_id'=>$patient_information->id])}}">Ear Nose Throat Examination Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('audiogram')}}">Audiogram</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('dental_examination_form',['patient_id'=>$patient_information->id])}}">Dental Examination Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('opthalmic_general_examination_form')}}">Opthalmic General Examination Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('oncology_cbe_results_examination_form',['patient_id'=>$patient_information->id])}}">Oncology CBE Results Examination Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('oncology_cbe_results_case_management',['patient_id'=>$patient_information->id])}}">Oncology CBE Results Case Management</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('oncology_cbe_results_discrete_mass',['patient_id'=>$patient_information->id])}}">Oncology CBE Results Discrete Mass</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('oncology_cbe_results_overall_summary',['patient_id'=>$patient_information->id])}}">Oncology CBE Results Overall Summary</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('oncology_cbe_results_physical_exam',['patient_id'=>$patient_information->id])}}">Oncology CBE Results Physical Examination</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('radio_therapy_treatment_form')}}">Radio Therapy Treatment Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('case_death',['patient_id'=>$patient_information->id])}}">Case Death</a>--}}

                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('request_for_palliative_care',['patient_id'=>$patient_information->id])}}">Request For Palliative Care</a>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="panel panel-default" style="display:inline-block">--}}
                            {{--<div class="panel-heading" role="tab" id="headingTwo">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
                                        {{--Patient File 2--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">--}}
                                {{--<div class="panel-body">--}}

                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('accident_and_emergency',['patient_id'=>$patient_information->id])}}">Accident And Emergency</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('initial_assessment_form',['patient_id'=>$patient_information->id])}}">Initial Assessment Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('general_outpatient_card',['patient_id'=>$patient_information->id])}}">General Outpatient Card</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('maternity_records',['patient_id'=>$patient_information->id])}}">Maternity Client Consent Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('initial_nursing_assessment_form',['patient_id'=>$patient_information->id])}}">Initial Nursing Assessment Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('prescriptionform',['patient_id'=>$patient_information->id])}}">Prescription Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('xray_request_form',['patient_id'=>$patient_information->id])}}">Xray Request Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('radiology_report_sheet_patient_file',['patient_id'=>$patient_information->id])}}">Radiology Report Sheet Patient File</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('laboratoryrequestform',['patient_id'=>$patient_information->id])}}">Laboratory Request Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('laboratory_report_sheet_patient_file',['patient_id'=>$patient_information->id])}}">Laboratory Report Sheet Patient File</a>--}}



                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('radiology_report_sheet_patient_file',['patient_id'=>$patient_information->id])}}">Radiology Report Sheet Patient File</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('laboratoryrequestform',['patient_id'=>$patient_information->id])}}">Laboratory Request Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('laboratory_report_sheet_patient_file',['patient_id'=>$patient_information->id])}}">Laboratory Report Sheet Patient File</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('blood_donation_request_form',['patient_id'=>$patient_information->id])}}">Blood Donation Request Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('eeg_report',['patient_id'=>$patient_information->id])}}">EEG Report</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('ecg_form',['patient_id'=>$patient_information->id])}}">ECG Form</a>--}}

                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('consultation_request_form',['patient_id'=>$patient_information->id])}}">Consultation Request Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('admission_form')}}">Admission Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('physicalexaminationonadmission',['patient_id'=>$patient_information->id])}}">Physical Examination on Admission</a>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="panel panel-default" style="display:inline-block">--}}
                            {{--<div class="panel-heading" role="tab" id="headingThree">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
                                        {{--Patient File 3--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">--}}
                                {{--<div class="panel-body">--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('allergy_form',['patient_id'=>$patient_information->id])}}">Allergy Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('patient_property_declaration_form',['patient_id'=>$patient_information->id])}}">Patient Property Declaration Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('nursing_notes',['patient_id'=>$patient_information->id])}}">Nursing Notes</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('continuation_form',['patient_id'=>$patient_information->id])}}">Continuation Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('treatment_sheet',['patient_id'=>$patient_information->id])}}">Treatment Sheet</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('pharmacy_withdrawal_form',['patient_id'=>$patient_information->id])}}">Pharmacy Withdrawal Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('morning_and_evening_temp_chart',['patient_id'=>$patient_information->id])}}">Morning And Evening Temp Chart</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('four_hourly_temp_chart',['patient_id'=>$patient_information->id])}}">Four Hourly Temp Chart</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('pulse_chart',['patient_id'=>$patient_information->id])}}">Pulse Chart</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('blood_pressure_chart',['patient_id'=>$patient_information->id])}}">Blood Pressure Chart</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('diabetic_charts',['patient_id'=>$patient_information->id])}}">Diabetic Charts</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('fluid_in_out_chart',['patient_id'=>$patient_information->id])}}">Fluid In Out Chart</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('blood_transfusion_observation_form',['patient_id'=>$patient_information->id])}}">Blood Transfusion Observation Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('morphine',['patient_id'=>$patient_information->id])}}">Morphine Administration Chart</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('fallassessmentform',['patient_id'=>$patient_information->id])}}">Fall Assessment Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('pressure_score_card',['patient_id'=>$patient_information->id])}}">Pressure Score Card</a>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="panel panel-default" style="display:inline-block">--}}
                            {{--<div class="panel-heading" role="tab" id="headingFour">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">--}}
                                        {{--Patient File 4--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">--}}
                                {{--<div class="panel-body">--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('patient_assessment_and_progress_card',['patient_id'=>$patient_information->id])}}">Patient Assessment And Progress Card</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('nursingcareform',['patient_id'=>$patient_information->id])}}">Nursing Care Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('nursing',['patient_id'=>$patient_information->id])}}">Nursing Care Intervention Checklist</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('consent_form',['patient_id'=>$patient_information->id])}}">Consent Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('preoperative_checklist',['patient_id'=>$patient_information->id])}}">Preoperative Checklist</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('anaesthetic_records',['patient_id'=>$patient_information->id])}}">Anaesthetic Records</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('operation_note',['patient_id'=>$patient_information->id])}}">Operation Notes</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('ipom_chart',['patient_id'=>$patient_information->id])}}">Immediate Post Operative Monitoring Chart</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('icu_observation_chart',['patient_id'=>$patient_information->id])}}">Icu Observation Chart</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('intensive_care_unit_respiratory_sheet',['patient_id'=>$patient_information->id])}}">Intensive Care Unit Respiratory Sheet</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('head_injury_and_craniotomy_chart_form')}}">Head Injury And Craniotomy Chart Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('anc_card')}}">Anc Card</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('foetal_kit_chart')}}">Foetal Kit Chart</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('request_for_post_modern_examination')}}">Request For Post Modern Examination</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('partograph_form')}}">Partograph Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('infant_record')}}">Infant Record</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('diet_requisition_sheet')}}">Diet Requisition Sheet</a>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="panel-group accordion-stylist" id="accordion" role="tablist" aria-multiselectable="true">--}}
                        {{--<div class="panel panel-default" style="display:inline-block">--}}
                            {{--<div class="panel-heading" role="tab" id="headingfive">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="true" aria-controls="collapsefive" class="collapsefive">--}}
                                        {{--Diagnostics Services Laboratory Department--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}

                            {{--<div id="collapsefive" class="panel-collapse collapse" role="tabpane5" aria-labelledby="headingfive" style="">--}}
                                {{--<div class="panel-body">--}}

                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('blood_donation_unit',['patient_id'=>$patient_information->id])}}">Blood Donation Unit</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('generallabrequestform',['patient_id'=>$patient_information->id])}}">General Laboratory Request Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('moh240')}}">MOH 240</a>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="panel panel-default" style="display:inline-block">--}}
                            {{--<div class="panel-heading" role="tab" id="headingsix">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">--}}
                                        {{--Diagnostics Services Radiology Department--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapsesix" class="panel-collapse collapse" role="tabpane6" aria-labelledby="headingsix">--}}
                                {{--<div class="panel-body">--}}

                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('ecgrequestform',['patient_id'=>$patient_information->id])}}">ECG Request Form</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('upload_xray_file',['patient_id'=>$patient_information->id])}}">Upload X-ray Files</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('radiologyrequestform',['patient_id'=>$patient_information->id])}}">Radiology Request Form</a>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="panel-group accordion-stylist" id="accordion" role="tablist" aria-multiselectable="true">--}}
                        {{--<div class="panel panel-default" style="display:inline-block">--}}
                            {{--<div class="panel-heading" role="tab" id="headingeight">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeight" aria-expanded="false" aria-controls="collapseseven">--}}
                                        {{--mch--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseeight" class="panel-collapse collapse" role="tabpane7" aria-labelledby="headingseven">--}}
                                {{--<div class="panel-body">--}}

                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('maternal',['patient_id'=>$patient_information->id])}}">MATERNAL PROFILE</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('create_child',['patient_id'=>$patient_information->id])}}">CHILD PROFILE</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('previous',['patient_id'=>$patient_information->id])}}">PREVIOUS PREGNANCY</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('surgical',['patient_id'=>$patient_information->id])}}">SURGICAL/MEDICAL HX</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('physicalexamination',['patient_id'=>$patient_information->id])}}">PHYSICAL EXAMINATION</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('weight',['patient_id'=>$patient_information->id])}}">CHILD WEIGHT CHART</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('childmonitoring',['patient_id'=>$patient_information->id])}}">CHILD HEIGHT CHART</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('childmonitemp',['patient_id'=>$patient_information->id])}}">CHILD TEMP CHART</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('mothersbp',['patient_id'=>$patient_information->id])}}">MOTHERS BLOOD PRESSURE CHARTS</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('motherstemp',['patient_id'=>$patient_information->id])}}">MOTHERS TEMPERATURE</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('mothersweight',['patient_id'=>$patient_information->id])}}">MOTHERS WEIGHT CHART</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('bmi',['patient_id'=>$patient_information->id])}}">BMI</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('childhealthcard',['patient_id'=>$patient_information->id])}}">CHILD HEALTH CARD</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('childhealthcard1',['patient_id'=>$patient_information->id])}}">CHILD IMMUNIZATION CARD</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('childhealthcard2',['patient_id'=>$patient_information->id])}}">VITAMIN A CAPSULES FROM 6 MONTHS</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('childhealthcard3',['patient_id'=>$patient_information->id])}}">DEVELOPMENT MILESTONES</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('childhealthcard4',['patient_id'=>$patient_information->id])}}">IDENTIFICATION OF THE EXPOSED CHILDREN AT 6 WEEKS OR SOON THEREAFTER</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('childhealthcard5',['patient_id'=>$patient_information->id])}}">HEALTH WORKER CONSULTATIONS</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('childhealthcard6',['patient_id'=>$patient_information->id])}}">PMTCT</a>--}}
                                    {{--<a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('mch_booklet',['patient_id'=>$patient_information->id])}}">mch BOOKLET</a>--}}


                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="panel-group accordion-stylist" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default" style="display:inline-block">
                            <div class="panel-heading" role="tab" id="headingseven">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                        Department Checkout
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseseven" class="panel-collapse collapse" role="tabpane7" aria-labelledby="headingseven">
                                <div class="panel-body">

                                    <a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('new_order',['patient_id'=>$patient_information->id])}}">Checkout</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown">
                {{--<button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" aria-expanded="false" aria-haspopup="true" type="button" data-toggle="dropdown">--}}
                {{--View Forms From Patient File--}}
                {{--</button>--}}

            </div>
        </div>

    </div>
</div>
    </div>

@endsection
