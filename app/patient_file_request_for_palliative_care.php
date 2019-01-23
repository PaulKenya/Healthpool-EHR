<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_request_for_palliative_care extends Model
{
    protected $fillable=['date','name_of_patient','unit_no','dob','age','gender','date1','referred_from','bed_no','previous_treatment','current_medication','reason_for_referral','urgent','referred_by1','designation1','signature1','administration_patient_informations_id','institution_id','user_id'];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
