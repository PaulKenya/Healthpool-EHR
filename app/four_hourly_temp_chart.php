<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class four_hourly_temp_chart extends Model
{
    protected $fillable=['date_of_admission','date_of_disease','temp','pulse','resp','bowels','urine','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}

