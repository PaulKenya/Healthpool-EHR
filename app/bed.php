<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bed extends Model
{
    protected $fillable=['ward_number','bed_number','discharge','date_admitted','comments','administration_patient_informations_id', 'institution_id', 'user_id'];

    public function ward(){
        return $this->belongsTo(ward::class);
    }
    public function administration_patient_information(){
        return $this->belongsTo(administration_patient_information::class);
    }

}
