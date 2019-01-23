<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blood_transfusion_observation extends Model
{
    protected $fillable =[
//        'name_of_patient','ip_number','ward','age','sex',
        'diagnosis','whole_blood','prbcs','plt','ffp','blood_unit_donor_number','transfusion_started_by',
        'counter_checked_by','rate_of_transfusion','hours_of_observation','exact_time','bp','temperature','pr','rr','remarks','time_transfusion_ended',
        'amount_of_transfused_blood','general_symptoms','dermatological_symptoms','cardiac_symptoms','renal_symptoms','haemotological_symptoms','other_symptoms',
        'intervention_drugs_given','name_of_nurse_doctor_anaesthetist','signature','date','administration_patient_informations_id', 'institution_id', 'user_id'];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

}
