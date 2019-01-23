<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_oncology_cbe_results_case_management_form extends Model
{
    protected $fillable=['referral_for_risk_assessment_counselling','radiology_imaging_workup','cbe_imaging_discondant','surgical_consult','patient_notified_of_mammogram_results','return_for_cbe_in_months','patient_informed_and_referral','return_for_cbe_in_six_months','referral_for_risk_assessment_counselling','return_in_one_year_for_annual_cbe','other','date','diagnosis','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

}
