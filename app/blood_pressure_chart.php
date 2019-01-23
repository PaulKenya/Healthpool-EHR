<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blood_pressure_chart extends Model
{
    protected $fillable= ['month',
        'systole', 'diastole','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
