<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diabetic_charts extends Model
{
    protected $fillable=[
        'date_of_recording','time_of_recording','sugar_testing','has_acetone','insulin_dose','oral_drug_dose','blood_sugar_dose','weight_dose','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
