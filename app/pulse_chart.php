<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pulse_chart extends Model
{
    protected $fillable =[
        "pulse",'administration_patient_informations_id', 'institution_id', 'user_id'
    ];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
