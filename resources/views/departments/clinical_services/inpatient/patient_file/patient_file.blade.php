@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->

    <div class="col-m-3 offset-md-2">
        <H3 class="mt-20 ">
            PATIENT FILE
        </H3>
    </div>

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="">
                <div class="button-group">
                    <a href="{{ route('accident_and_emergency')}}" class="btn waves-effect waves-light btn-primary pf-btn">Accident And Emergency Record</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('initial_assessment_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Initial Assessment Record</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('general_outpatient_card')}}" class="btn waves-effect waves-light btn-primary pf-btn">Casualty/General Outpatient Card</a>
                </div>
            </div>
                <div class="">
                <div class="button-group">
                    <a href="{{ route('maternity_record')}}" class="btn waves-effect waves-light btn-primary pf-btn">Maternity Client Consent Form</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('initial_nursing_assessment_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Initial Nursing Assessment</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('prescriptionform')}}" class="btn waves-effect waves-light btn-primary pf-btn">Prescription Form</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('xray_request_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Radiology/Xray Request Form</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('radiology_report_sheet_patient_file')}}" class="btn waves-effect waves-light btn-primary pf-btn">Radiology Report Sheet</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('laboratoryrequestform')}}" class="btn waves-effect waves-light btn-primary pf-btn">Laboratory Request Form</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('laboratory_report_sheet_patient_file')}}" class="btn waves-effect waves-light btn-primary pf-btn">Laboratory Report Sheet</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('blood_donation_request_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Blood Donation Request Form</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('eeg_report')}}" class="btn waves-effect waves-light btn-primary pf-btn">EEG report</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('ecg_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">ECG Form</a>
                </div>
            </div>
                <div class="">
                <div class="button-group">
                    <a href="{{ route('consultation_request_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">consultation Request Form</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('admission_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Admission Form</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('physicalexaminationonadmission')}}" class="btn waves-effect waves-light btn-primary pf-btn">Physical Examination On Admission</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('allergy_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Allergy Form</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('patient_property_declaration_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Patient's Property Declaration Form</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('nursing_notes')}}" class="btn waves-effect waves-light btn-primary pf-btn">Nursing Notes/Cardex</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('continuation_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Continuation Sheets</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('treatment_sheet')}}" class="btn waves-effect waves-light btn-primary pf-btn">Treatment Sheet</a>
                </div>
            </div>
                <div class="">
                <div class="button-group">
                    <a href="{{ route('pharmacy_withdrawal_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Pharmacy Withdrawal Form</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('morning_and_evening_temp_chart')}}" class="btn waves-effect waves-light btn-primary pf-btn">Morning And Evening Temperature Chart</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('four_hourly_temp_chart')}}" class="btn waves-effect waves-light btn-primary pf-btn">Four Hourly Temp Chart</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('pulse_chart')}}" class="btn waves-effect waves-light btn-primary pf-btn">Pulse Chart</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('blood_pressure_chart')}}" class="btn waves-effect waves-light btn-primary pf-btn">Blood Pressure Chart</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('diabetic_charts')}}" class="btn waves-effect waves-light btn-primary pf-btn">diabetic_charts</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('fluid_in_out_chart')}}" class="btn waves-effect waves-light btn-primary pf-btn">Fluid Intake And Output Charts</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                    <a href="{{ route('blood_transfusion_observation_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Blood Transfusion Observation</a>
                </div>
            </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('morphine')}}" class="btn waves-effect waves-light btn-primary pf-btn">Morphine Administration Chart</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('fallassessmentform')}}" class="btn waves-effect waves-light btn-primary pf-btn">Fall Assessment Form</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('pressure_score_card')}}" class="btn waves-effect waves-light btn-primary pf-btn">Pressure Sore Prevention Form</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('patient_assessment_and_progress_card')}}" class="btn waves-effect waves-light btn-primary pf-btn">Patient Assessment And Progress Card</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('nursingcareform')}}" class="btn waves-effect waves-light btn-primary pf-btn">Nursing Care Plan</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('nursing')}}" class="btn waves-effect waves-light btn-primary pf-btn">Nursing Care Intervention Checklist</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('consent_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Consent Form</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('preoperative_checklist')}}" class="btn waves-effect waves-light btn-primary pf-btn">Pre-operative Checklist</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('anaesthetic_records')}}" class="btn waves-effect waves-light btn-primary pf-btn">Anaesthetic Records</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('operation_notes')}}" class="btn waves-effect waves-light btn-primary pf-btn">Operation Notes</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('ipom_chart')}}" class="btn waves-effect waves-light btn-primary pf-btn">Immediate Post Operative Monitoring Chart</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('icu_observation_chart')}}" class="btn waves-effect waves-light btn-primary pf-btn">ICU Observation Chart</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('intensive_care_unit_respiratory_sheet')}}" class="btn waves-effect waves-light btn-primary pf-btn">Intensive Care Unit Respiratory Sheet</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('head_injury_and_craniotomy_chart_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Head Injury And Craniotomy Chart</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('anc_card')}}" class="btn waves-effect waves-light btn-primary pf-btn">ANC card</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('foetal_kit_chart')}}" class="btn waves-effect waves-light btn-primary pf-btn">Foetal Kit Chart</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('request_for_post_modern_examination')}}" class="btn waves-effect waves-light btn-primary pf-btn">Request For Post Modern Examination</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('partograph_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Partograph</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('infant_record')}}" class="btn waves-effect waves-light btn-primary pf-btn">Infant Record</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('diet_requisition_sheet')}}" class="btn waves-effect waves-light btn-primary pf-btn">Diet Requisition Sheet</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('diet_sheet')}}" class="btn waves-effect waves-light btn-primary pf-btn">Diet Sheets</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('nutrition_care_process_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Nutrition Care Process Form</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('occupational_therapy_initial_assessment_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Occupational Therapy Initial Assessment Form</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('physiotherapy_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Occupational/Physiotherapy Form</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('orthopaedic_examination_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Orthopaedic Examination Form</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('ear_nose_throat_examination_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Ear,Nose,Throat Examination Form</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('audiogram')}}" class="btn waves-effect waves-light btn-primary pf-btn">Audiogram</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('dental_examination_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Dental Examination Form</a>
                    </div>
                </div>
                <div class="">
                    <div class="button-group">
                         <a href="{{ route('opthalmic_general_examination_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Eye/Opthalmic General Examination Form</a>
                    </div>
                </div>
            <div class="">
                <div class="button-group">
                       <a href="{{ route('oncology_cbe_results_examination_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Oncology CBE Results Examination Form</a>
                </div>
            </div>
            <div class="">
                <div class="button-group">
                  <a href="{{ route('radio_therapy_treatment_form')}}" class="btn waves-effect waves-light btn-primary pf-btn">Radio Therapy Treatment Form</a>

                </div>
            </div>
            <div class="">
                <div class="button-group">
                   <a href="{{ route('case_death')}}" class="btn waves-effect waves-light btn-primary pf-btn">Case Summary/Death Summary</a>

                </div>
            </div>
            <div class="">
                <div class="button-group">
                  <a href="{{ route('request_for_palliative_care')}}" class="btn waves-effect waves-light btn-primary pf-btn">Request For Palliative Care</a>
                </div>
            </div>
        </div>
    </div>


    {{--<div class="col-lg-12 col-lg-6">--}}
        {{--<div class="card">--}}
            {{--<div class="card-body text-center">--}}
                {{--<div class="d-flex flex-row mt-2">--}}

                        {{--<li class="nav-item">--}}
                            {{--<a href="#general_outpatient_card" class="nav-link " data-toggle="tab" role="tab" aria-controls="general_outpatient_card">Casualty/General Outpatient Card</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#accident_and_emergency" class="nav-link " data-toggle="tab" role="tab" aria-controls="accident_and_emergency">Accident And Emergency Record Initial Assessment</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#initial_nursing_assessment_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="initial_nursing_assessment_form">Initial Nursing Assessment</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#prescriptionform" class="nav-link " data-toggle="tab" role="tab" aria-controls="prescriptionform">Prescription Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#xray_request_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="xray_request_form">Radiology/Xray Request Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#radiology_report_sheet" class="nav-link " data-toggle="tab" role="tab" aria-controls="radiology_report_sheet">Radiology Report Sheet</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#laboratoryrequestform" class="nav-link " data-toggle="tab" role="tab" aria-controls="laboratoryrequestform">Laboratory Request Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#laboratory_report_sheet" class="nav-link " data-toggle="tab" role="tab" aria-controls="laboratory_report_sheet">Laboratory Report Sheet</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#blood_donation_request_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="blood_donation_request_form">Blood Donation Request Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#eeg_report" class="nav-link " data-toggle="tab" role="tab" aria-controls="eeg_report">EEG report</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#ecg_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="ecg_form">ECG Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#consultation_request_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="consultation_request_form">consultation Request Form</a>--}}
                        {{--</li>--}}

                        {{--<li class="nav-item">--}}
                            {{--<a href="#admission_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="admission_form">Admission Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#physical_examination_on_admission" class="nav-link " data-toggle="tab" role="tab" aria-controls="physical_examination_on_admission">Physical Examination On Admission</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#allergy_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="allergy_form">Allergy Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#patient_property_declaration_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="patient_property_declaration_form">Patient's Property Declaration Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#nursing_notes" class="nav-link " data-toggle="tab" role="tab" aria-controls="nursing_notes">Nursing Notes/Cardex</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#continuation_sheets" class="nav-link " data-toggle="tab" role="tab" aria-controls="continuation_sheets">Continuation Sheets</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#treatment_sheet" class="nav-link " data-toggle="tab" role="tab" aria-controls="treatment_sheet">Treatment Sheet</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#pharmacy_withdrawal_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="pharmacy_withdrawal_form">Pharmacy Withdrawal Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#morning_and_evening_temp_chart" class="nav-link " data-toggle="tab" role="tab" aria-controls="morning_and_evening_temp_chart">Morning And Evening Temperature Chart</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#four_hourly_temp_chart" class="nav-link " data-toggle="tab" role="tab" aria-controls="four_hourly_temp_chart">Four Hourly Temp Chart</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#pulse_chart" class="nav-link " data-toggle="tab" role="tab" aria-controls="pulse_chart">Pulse Chart</a>--}}
                        {{--</li>--}}
                        {{--<li  class="nav-item">--}}
                        {{--<a href="#blood_pressure_chart" class="nav-link" data-toggle="tab" role="tab" aria-controls="blood_pressure_chart">Blood Pressure Chart</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#diabetic_charts" class="nav-link " data-toggle="tab" role="tab" aria-controls="diabetic_charts">Diabetic Charts</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#fluid_intake_output_chart" class="nav-link " data-toggle="tab" role="tab" aria-controls="fluid_intake_output_chart">Fluid Intake And Output Charts</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#blood_transfusion_observation_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="blood_transfusion_observation_form">Blood Transfusion Observation</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#morphine" class="nav-link " data-toggle="tab" role="tab" aria-controls="morphine">Morphine Administration Chart</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#fall_assessment_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="fall_assessment_form">Fall Assessment Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#pressurescoresrecordcard" class="nav-link " data-toggle="tab" role="tab" aria-controls="pressurescoresrecordcard">Pressure Sore Prevention Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#patient_assessment_and_progress_card" class="nav-link " data-toggle="tab" role="tab" aria-controls="patient_assessment_and_progress_card">Patient Assessment And Progress Card</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#nursing_care_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="nursing_care_form">Nursing Care Plan</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#nursingforms" class="nav-link " data-toggle="tab" role="tab" aria-controls="nursingforms">Nursing Care Intervention Checklist</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#consent_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="consent_form">Consent Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#preoperative_checklist" class="nav-link " data-toggle="tab" role="tab" aria-controls="preoperative_checklist">Pre-operative Checklist</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#anaesthetic_records" class="nav-link " data-toggle="tab" role="tab" aria-controls="anaesthetic_records">Anaesthetic Records</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#operation_notes" class="nav-link " data-toggle="tab" role="tab" aria-controls="operation_notes">Operation Notes</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#ipom_chart" class="nav-link " data-toggle="tab" role="tab" aria-controls="ipom_chart">Immediate Post Operative Monitoring Chart </a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#icu_observation_chart" class="nav-link " data-toggle="tab" role="tab" aria-controls="icu_observation_chart">ICU Observation Chart</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#intensive_care_unit_respiratory_sheet" class="nav-link " data-toggle="tab" role="tab" aria-controls="intensive_care_unit_respiratory_sheet">Intensive Care Unit Respiratory Sheet</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#head_injury_and_craniotomy_chart" class="nav-link " data-toggle="tab" role="tab" aria-controls="head_injury_and_craniotomy_chart">Head Injury And Craniotomy Chart</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#anc_card" class="nav-link " data-toggle="tab" role="tab" aria-controls="anc_card">ANC card</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#foetal_kit_chart" class="nav-link " data-toggle="tab" role="tab" aria-controls="foetal_kit_chart">Foetal Kit Chart</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#partograph_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="partograph_form">Partograph</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#infant_record" class="nav-link " data-toggle="tab" role="tab" aria-controls="infant_record">Infant Record</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#diet_requisition_sheet" class="nav-link " data-toggle="tab" role="tab" aria-controls="diet_requisition_sheet">Diet Requisition Sheet</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#diet_sheet" class="nav-link " data-toggle="tab" role="tab" aria-controls="diet_sheet">Diet Sheets</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#nutrition_care_process_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="nutrition_care_process_form">Nutrition Care Process Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#occupational_therapy_initial_assessment_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="occupational_therapy_initial_assessment_form">Occupational Therapy Initial Assessment Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#physiotherapy_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="physiotherapy_form">Occupational/Physiotherapy Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#orthopaedic_examination_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="orthopaedic_examination_form">Orthopaedic Examination Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#ear_nose_throat_examination_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="ear_nose_throat_examination_form">Ear,Nose,Throat Examination Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#audiogram" class="nav-link " data-toggle="tab" role="tab" aria-controls="audiogram">Audiogram</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#dental_examination_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="dental_examination_form">Dental Examination Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#opthalmic_general_examination_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="opthalmic_general_examination_form">Eye/Opthalmic General Examination Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#oncology_cbe_results_examination_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="oncology_cbe_results_examination_form">Oncology CBE Results Examination Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#radio_therapy_treatment_form" class="nav-link " data-toggle="tab" role="tab" aria-controls="radio_therapy_treatment_form">Radio Therapy Treatment Form</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#casedeath" class="nav-link" data-toggle="tab" role="tab" aria-controls="casedeath">Case Summary/Death Summary</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#request_for_palliative_care" class="nav-link " data-toggle="tab" role="tab" aria-controls="request_for_palliative_care">Request For Palliative Care</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#request_for_post_modern_examination" class="nav-link " data-toggle="tab" role="tab" aria-controls="request_for_post_modern_examination">Request For Post Modern Examination)</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    {{--<div class="tab-content">--}}
                        {{--<div class="tab-pane fade  show active" id="central_record_registration_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/central_record_registration_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="general_outpatient_card" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/general_outpatient_card')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="accident_and_emergency" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/accident_and_emergency')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="initial_nursing_assessment_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/initial_nursing_assessment_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="prescriptionform" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/prescriptionform')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="xray_request_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/xray_request_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="radiology_report_sheet" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/radiology_report_sheet')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade" id="laboratoryrequestform" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/laboratoryrequestform')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="laboratory_report_sheet" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/laboratory_report_sheet')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="blood_donation_request_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/blood_donation_request_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="eeg_report" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/eeg_report')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="ecg_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/ecg_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade  show" id="consultation_request_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/consultation_request_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="admission_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/admission_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="physical_examination_on_admission" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/physical_examination_on_admission')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="allergy_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/allergy_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="patient_property_declaration_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/patient_property_declaration_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade" id="nursing_notes" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/nursing_notes')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade" id="continuation_sheets" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/continuation_sheets')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade" id="treatment_sheet" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/treatment_sheet')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="pharmacy_withdrawal_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/pharmacy_withdrawal_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade" id="morning_and_evening_temp_chart" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/morning_and_evening_temp_chart')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade" id="four_hourly_temp_chart" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/four_hourly_temp_chart')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade" id="pulse_chart" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/pulse_chart')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade" id="blood_pressure_chart" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/blood_pressure_chart')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade" id="diabetic_charts" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/diabetic_charts')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="fluid_intake_output_chart" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/fluid_intake_output_chart')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="blood_transfusion_observation_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/blood_transfusion_observation_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="morphine" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/morphine')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="fall_assessment_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/fall_assessment_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="pressurescoresrecordcard" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/pressurescoresrecordcard')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="patient_assessment_and_progress_card" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/patient_assessment_and_progress_card')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="nursing_care_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/nursing_care_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="nursingforms" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/nursingforms')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="consent_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/consent_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="preoperative_checklist" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/preoperative_checklist')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="anaesthetic_records" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/anaesthetic_records')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="operation_notes" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/operation_notes')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="ipom_chart" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/ipom_chart')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="icu_observation_chart" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/icu_observation_chart')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="intensive_care_unit_respiratory_sheet" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/intensive_care_unit_respiratory_sheet')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="head_injury_and_craniotomy_chart" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/head_injury_and_craniotomy_chart')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="anc_card" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/anc_card')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="foetal_kit_chart" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/foetal_kit_chart')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="partograph_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/partograph_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="infant_record" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/infant_record')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="diet_requisition_sheet" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/diet_requisition_sheet')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="diet_sheet" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/diet_sheet')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="nutrition_care_process_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/nutrition_care_process_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="occupational_therapy_initial_assessment_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/occupational_therapy_initial_assessment_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="physiotherapy_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/physiotherapy_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="orthopaedic_examination_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/orthopaedic_examination_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="ear_nose_throat_examination_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/ear_nose_throat_examination_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade" id="audiogram" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/audiogram')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="dental_examination_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/dental_examination_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="opthalmic_general_examination_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/opthalmic_general_examination_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="oncology_cbe_results_examination_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/oncology_cbe_results_examination_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="radio_therapy_treatment_form" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/radio_therapy_treatment_form')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="casedeath" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/case_death_summary')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="request_for_palliative_care" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/request_for_palliative_care')--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade " id="request_for_post_modern_examination" role="tabpanel">--}}
                            {{--@include('departments/clinical_services/inpatient/patient_file/request_for_post_modern_examination')--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}










@endsection
