<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class morning_everning_temp extends Model
{
    protected $fillable =[
        "temp",'administration_patient_informations_id', 'institution_id', 'user_id'
    ];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
