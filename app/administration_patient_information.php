<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administration_patient_information extends Model
{
    protected $fillable =['name','title','sex','married','company','district','location','birth_date','phone_number','current_department','sub_location','division','village','id_passport_no','next_of_kin_name','next_of_kin_relationship','phone_no','religion','occupation','discharged'];

    public function clinicalservices_patient_property(){
        return $this->hasMany(clinicalservices_patient_property::class, 'administration_patient_informations_id');
    }
    public function clinicalservices_nursing(){
        return $this->hasMany(clinicalservices_nursing::class, 'administration_patient_informations_id');
    }
    public function clinicalservices_continuation_form(){
        return $this->hasMany(clinicalservices_continuation_form::class, 'administration_patient_informations_id');
    }
    public function clinicalservices_treatmentsheet(){
        return $this->hasMany(clinicalservices_treatmentsheet::class, 'administration_patient_informations_id');
    }
    public function clinical_services_pharmacy_withdrawal_form(){
        return $this->hasMany(clinical_services_pharmacy_withdrawal_form::class, 'administration_patient_informations_id');
    }
    public function blood_pressure_chart(){
        return $this->hasMany(blood_pressure_chart::class, 'administration_patient_informations_id');
    }
    public function diabetic_charts(){
        return $this->hasMany(diabetic_charts::class, 'administration_patient_informations_id');
    }
    public function four_hourly_temp_chart(){
        return $this->hasMany(four_hourly_temp_chart::class, 'administration_patient_informations_id');
    }

    //LAMECH

    public function clinical_services_allergyforms()
    {
        return $this->hasMany(clinical_services_allergyform::class, 'administration_patient_informations_id');
    }

    public function clinicalservices_radiology_report_sheets()
    {
        return $this->hasMany(clinicalservices_radiology_report_sheet::class, 'administration_patient_informations_id');
    }

    public function clinicalservices_labrequestforms()
    {
        return $this->hasMany(clinicalservices_labrequestform::class, 'administration_patient_informations_id');
    }

    //star
    public function anaesthetic_record(){
        return $this->hasMany(anaesthetic_record::class, 'administration_patient_informations_id');
    }
    public function operation_note(){
        return $this->hasMany(operation_note::class, 'administration_patient_informations_id');
    }
    public function ipom_chart(){
        return $this->hasMany(ipom_chart::class, 'administration_patient_informations_id');
    }
    public function icu_observation_chart(){
        return $this->hasMany(icu_observation_chart::class, 'administration_patient_informations_id');
    }
    public function intensive_care_unit_respiratory_sheet(){
        return $this->hasMany(intensive_care_unit_respiratory_sheet::class, 'administration_patient_informations_id');
    }

//    public function laboratory_report_sheet_patient_file()
//    {
//        return $this->hasMany(laboratory_report_sheet_patient_file::class, 'administration_patient_informations_id');
//    }

    public function clinicalservices_blood_donation_requestforms()
    {
        return $this->hasMany(clinicalservices_blood_donation_requestform::class, 'administration_patient_informations_id');
    }

    public function clinicalservices_eeg_reports()
    {
        return $this->hasMany(clinicalservices_eeg_report::class, 'administration_patient_informations_id');
    }

    public function clinicalservices_ecgforms()
    {
        return $this->hasMany(clinicalservices_ecgform::class, 'administration_patient_informations_id');
    }

    public function clinicalservices_consultationrequestforms()
    {
        return $this->hasMany(clinicalservices_consultationrequestform::class, 'administration_patient_informations_id');
    }

    public function clinical_services_physicalexaminationonadmissions()
    {
        return $this->hasMany(clinical_services_physicalexaminationonadmission::class, 'administration_patient_informations_id');
    }
    public function new_order()
    {
        return $this->hasMany(new_order::class, 'administration_patient_informations_id');
    }
    public function pulse_chart()
    {
        return $this->hasMany(pulse_chart::class, 'administration_patient_informations_id');
    }
    public function morning_everning_temp()
    {
        return $this->hasMany(morning_everning_temp::class, 'administration_patient_informations_id');
    }

    //DIAGNOSTIC SERVICES

    public function diagnostic_services_blood_donation_units()
    {
        return $this->hasMany(diagnostic_services_blood_donation_unit::class, 'administration_patient_informations_id');
    }
    public function diagnostic_services_general_lab_request_forms()
    {
        return $this->hasMany(diagnostic_services_general_lab_request_form::class, 'administration_patient_informations_id');
    }
    public function laboratory_department_moh240s()
    {
        return $this->hasMany(laboratory_department_moh240::class, 'administration_patient_informations_id');
    }
    public function diagnostic_services_ecg_request_forms()
    {
        return $this->hasMany(diagnostic_services_ecg_request_form::class, 'administration_patient_informations_id');
    }
    public function diagnostic_services_moh209s()
    {
        return $this->hasMany(diagnostic_services_moh209::class, 'administration_patient_informations_id');
    }
    public function diagnostic_services_radiology_request_forms()
    {
        return $this->hasMany(diagnostic_services_radiology_request_form::class, 'administration_patient_informations_id');
    }
    public function diagnostic_services_upload_files()
    {
        return $this->hasMany(diagnostic_services_upload_file::class, 'administration_patient_informations_id');
    }




    public function patient_file_diet_sheets(){
        return $this->hasMany(patient_file_diet_sheets::class, 'administration_patient_informations_id');
    }
    public function patient_file_orthopeadic_clinic(){
        return $this->hasMany(patient_file_orthopeadic_clinic::class, 'administration_patient_informations_id');
    }
    public function patient_file_orthopedic_tests(){
        return $this->hasMany(patient_file_orthopedic_tests::class, 'administration_patient_informations_id');
    }
    public function patient_file_orthopedic_patient_standing(){
        return $this->hasMany(patient_file_orthopedic_patient_standing::class, 'administration_patient_informations_id');
    }
    public function patient_file_orthopedic_limbular_range_in_motion(){
        return $this->hasMany(patient_file_orthopedic_limbular_range_in_motion::class, 'administration_patient_informations_id');
    }
    public function patient_file_nutrition_care_process_form(){
        return $this->hasMany(patient_file_nutrition_care_process_form::class, 'administration_patient_informations_id');
    }
    public function patient_file_occupational_therapy_initial_assessment_form(){
        return $this->hasMany(patient_file_occupational_therapy_initial_assessment_form::class, 'administration_patient_informations_id');
    }
    public function patient_file_ear_nose_throat_examination_form(){
        return $this->hasMany(patient_file_ear_nose_throat_examination_form::class, 'administration_patient_informations_id');
    }
    public function patient_file_dental_examination_form(){
        return $this->hasMany(patient_file_dental_examination_form::class, 'administration_patient_informations_id');
    }
    public function patient_file_oncology_cbe_results_case_management_form(){
        return $this->hasMany(patient_file_oncology_cbe_results_case_management_form::class, 'administration_patient_informations_id');
    }
    public function patient_file_oncology_cbe_results_discrete_mass(){
        return $this->hasMany(patient_file_oncology_cbe_results_discrete_mass::class, 'administration_patient_informations_id');
    }
    public function patient_file_oncology_cbe_results_examination_form(){
        return $this->hasMany(patient_file_oncology_cbe_results_examination_form::class, 'administration_patient_informations_id');
    }
    public function patient_file_oncology_cbe_results_overall_summary(){
        return $this->hasMany(patient_file_oncology_cbe_results_overall_summary::class, 'administration_patient_informations_id');
    }
    public function patient_file_oncology_cbe_results_physical_exam()
    {
        return $this->hasMany(patient_file_oncology_cbe_results_physical_exam::class, 'administration_patient_informations_id');
    }

    //sams work
    public function clinicalservices_casedeathsummary()
    {
        return $this->hasMany(clinicalservices_casedeathsummary::class, 'administration_patient_informations_id');
    }
    public function clinical_services_initial_assessment_form()
    {
        return $this->hasMany(clinical_services_initial_assessment_form::class, 'administration_patient_informations_id');
    }

    public function patient_file_accident_and_emergency()
    {
        return $this->hasMany(patient_file_accident_and_emergency::class, 'administration_patient_informations_id');
    }

    public function patient_file_maternity_records()
    {
        return $this->hasMany(patient_file_maternity_records::class, 'administration_patient_informations_id');
    }


    public function patient_file_initial_nursing_assessment()
    {
        return $this->hasMany(patient_file_initial_nursing_assessment::class, 'administration_patient_informations_id');
    }


    public function clinicalservices_prescriptionform()
    {
        return $this->hasMany(clinicalservices_prescriptionform::class, 'administration_patient_informations_id');
    }


    public function clinicalservices_xrayrequestform()
    {
        return $this->hasMany(clinicalservices_xrayrequestform::class, 'administration_patient_informations_id');
    }

    //C.M.M
    public function fluid_in_out_chart()
    {
        return $this->hasMany(fluid_in_out_chart::class,'administration_patient_informations_id');
    }

    public function blood_transfusion_observation_form()
    {
        return $this->hasMany(blood_transfusion_observation::class,'administration_patient_informations_id');
    }
    public function morphine()
    {
        return $this->hasMany(clinicalservices_morphine::class,'administration_patient_informations_id');
    }

    public function fall_assessment_form()
    {
        return $this->hasMany(clinical_services_fallassessmentform::class,'administration_patient_informations_id');
    }

    public function nursing_care_form()
    {
        return $this->hasMany(clinicalservices_nursingcareform::class,'administration_patient_informations_id');
    }

    public function nursing()
    {
        return $this->hasMany(clinicalservices_nursing::class,'administration_patient_informations_id');
    }

    public function consent_form()
    {
        return $this->hasMany(consent_form::class,'administration_patient_informations_id');
    }

    public function preoperative_checklist()
    {
        return $this->hasMany(preoperative_checklist::class,'administration_patient_informations_id');
    }

    public function pressure_score_card()
    {
        return $this->hasMany(clinicalservices_presuresorescorecard::class,'administration_patient_informations_id');
    }

    public function patient_assessments()
    {
        return $this->hasMany(patient_assesment::class,'administration_patient_informations_id');
    }
    public function childhealthcard()
    {
        return $this->hasMany(childhealthcard::class,'administration_patient_informations_id');
    }
    public function childhealthcard1()
    {
        return $this->hasMany(childhealthcard1::class,'administration_patient_informations_id');
    }
    public function childhealthcard2()
    {
        return $this->hasMany(childhealthcard2::class,'administration_patient_informations_id');
    }
    public function childhealthcard3()
    {
        return $this->hasMany(childhealthcard3::class,'administration_patient_informations_id');
    }
    public function childhealthcard4()
    {
        return $this->hasMany(childhealthcard4::class,'administration_patient_informations_id');
    }
    public function childhealthcard5()
    {
        return $this->hasMany(childhealthcard5::class,'administration_patient_informations_id');
    }
    public function childhealthcard6()
    {
        return $this->hasMany(childhealthcard6::class,'administration_patient_informations_id');
    }
    public function childmonitoring()
    {
        return $this->hasMany(childmonitoring::class,'administration_patient_informations_id');
    }
    public function childtemperature()
    {
        return $this->hasMany(childtemperature::class,'administration_patient_informations_id');
    }
    public function createchild()
    {
        return $this->hasMany(createchild::class,'administration_patient_informations_id');
    }
    public function maternal()
    {
        return $this->hasMany(maternal::class,'administration_patient_informations_id');
    }
    public function mothersbloodpressure()
    {
        return $this->hasMany(mothersbloodpressure::class,'administration_patient_informations_id');
    }
    public function motherstemperature()
    {
        return $this->hasMany(motherstemperature::class,'administration_patient_informations_id');
    }

    public function mothersweight()
    {
        return $this->hasMany(mothersweight::class,'administration_patient_informations_id');
    }
    public function physical()
    {
        return $this->hasMany(physical::class,'administration_patient_informations_id');
    }
    public function previous_pregnancy()
    {
        return $this->hasMany(previous_pregnancy::class,'administration_patient_informations_id');
    }
    public function surgical()
    {
        return $this->hasMany(surgical::class,'administration_patient_informations_id');
    }
    public function weight()
    {
        return $this->hasMany(weight::class,'administration_patient_informations_id');
    }
    public function patient_file_request_for_palliative_care()
    {
        return $this->hasMany(patient_file_request_for_palliative_care::class,'administration_patient_informations_id');
    }

    public function physiotherapy_form()
{
    return $this->hasMany(clinicalservices_physiotherapy_form::class,'administration_patient_informations_id');
}

    public function send_department_link()
    {
        return $this->hasMany(clinicalservices_physiotherapy_form::class,'administration_patient_informations_id');
    }

    public function triage(){
        return $this->hasMany(triage::class, 'administration_patient_informations_id');
    }
    public function pharmacy_billed_list(){
        return $this->hasMany(triage::class, 'administration_patient_informations_id');
    }
    public function pharmacy_dispensed_list(){
        return $this->hasMany(triage::class, 'administration_patient_informations_id');
    }
    public function pharmacy_paid_list(){
        return $this->hasMany(triage::class, 'administration_patient_informations_id');
    }

    //LAB ROLES

    //laboratory report sheet
    public function laboratory_report_sheet()
    {
        return $this->hasMany(diagnostic_laboratory_report_sheet::class,'administration_patient_informations_id');
    }

    //laboratory sample form
    public function laboratory_sample_form()
    {
        return $this->hasMany(diagnostic_laboratory_sample_form::class,'administration_patient_informations_id');
    }

    public function administration_billing()
    {
        return $this->hasMany(diagnostic_laboratory_sample_form::class,'administration_patient_informations_id');
    }
    public function administration_official_use()
    {
        return $this->hasMany(diagnostic_laboratory_sample_form::class,'administration_patient_informations_id');
    }

}
