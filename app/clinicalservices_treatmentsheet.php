<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_treatmentsheet extends Model
{
    protected $fillable=["consultant","date","drug","dose","rate","frequency_duration","name_signature","time","dates","drug_takens","doses","rates","frequency_durations","name_signatures","times",'administration_patient_informations_id', 'institution_id', 'user_id'];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
