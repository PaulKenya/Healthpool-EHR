<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class icu_observation_chart extends Model
{
    protected $fillable =[
        'name_of_patient',
        'ip_number',
        'date',
        'dob',
        'sex',
        'day_in_unit',
        'diagnosis',
        'treatment',
        'time'
        ,'administration_patient_informations_id', 'institution_id', 'user_id'
    ];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
