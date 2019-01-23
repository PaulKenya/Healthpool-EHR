<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_orthopeadic_clinic extends Model
{
    protected $fillable=['compalints','height','weight','temp','pulse_rate','resp_rate','major_hand_r_or_l','blood_pressure_lying','standing','diagnosis','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
