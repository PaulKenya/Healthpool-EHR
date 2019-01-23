<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consent_form extends Model
{
    protected $fillable = [
        "name_of_surgeon",
        "name_of_anaesthetist",
        "next_of_kin",
        "relationship",
        "type_of_operation",
        "doctor_explanation",
        "pcf_1",
        "pcf_2",
        "pcf_3",
        "pcf_4",
        "pcf_5",
        "pcf_6" ,
        "pcf_7" ,
        "pcf_8" ,
        "pcf_9" ,
        "pcf_10" ,
        "law_protection" ,
        "patient_signature",
        "patient_date",
        "nok_signature",
        "nok_name",
        "nok_date",
        "smp_signature",
        "smp_name",
        "smp_date",
        "a_signature",
        "a_name",
        "a_date",
        "practitioners_name",
        "samp_signature",
        'administration_patient_informations_id', 'institution_id', 'user_id'];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
