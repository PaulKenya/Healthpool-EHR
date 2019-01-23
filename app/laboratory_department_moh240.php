<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laboratory_department_moh240 extends Model
{
    protected $fillable=['date','opd_ip_ref_no','lab_no','revisit','village_estate','address','clinical_diagnosis','prior_treatment','type_of_specimen','condition_specimen','investigation_required','date_sample_collected','date_sample_received','clinician_name','date_sample_analyzed','results','date_results_dispatched','amount_charged','comments','name_of_analyzing_officer','signature','administration_patient_informations_id', 'institution_id', 'user_id'];
}
