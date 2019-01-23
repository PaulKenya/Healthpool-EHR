<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_eeg_report extends Model
{
    protected $fillable=['unit_number','ward_clinic','bed','previous_ecg','report_to_be_sent_to','medication','diuretics','provisional_diagnosis','date','signed','printed','administration_patient_informations_id', 'institution_id', 'user_id'];

    public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }

}
