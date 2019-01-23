<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostic_services_ecg_request_form extends Model
{
    protected $fillable = ['unit_number','ward_clinic','bed_no','previous_ecg','report_to_be_sent_to','medication','digoxin_diuretics_others','relevant_history','date','signed_by','printed','administration_patient_informations_id', 'institution_id', 'user_id']; ////

    public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }
}
