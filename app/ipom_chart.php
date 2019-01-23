<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ipom_chart extends Model
{
    protected $fillable =
        [

            'date',
            'dob',
            'ward',
            'bed',
            'sex',
            'time',
            'gcs',
            'bp',
            'hr',
            'rr',
            't',
            'bleeding',
            'feeding',
            'pain',
            'ivfs',
            'medication',
            'administration_patient_informations_id', 'institution_id', 'user_id'
        ];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
