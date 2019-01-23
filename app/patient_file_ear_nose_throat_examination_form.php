<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_ear_nose_throat_examination_form extends Model
{
    protected $fillable=['name','grade','ward','date','age','diagnosis','examination_required','symptoms_referrable','nose','sinusesr','sinusesl','pharynx','larynx','ears','ad1','ad2','as1','as2','diagnosis_b','treatment_and_recommendation','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
