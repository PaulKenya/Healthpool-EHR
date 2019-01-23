<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_casedeathsummary extends Model
{
    //
    protected $fillable = [
        'clinic_ward',
        'date_of_admission',
        'date_of_discharge',
        'consultants',
        'diagnosis',
        'complaints',
        'physical_findings',
        'investigations',
        'management',
        'outcome_discharge_instructions',
        'name_of_clinic',
        'firm',
        'day',
        'date',
        'time',
        'doctors_name',
        'sign',
        'department',
        'administration_patient_informations_id',
        'institution_id',
        'user_id',
    ];


    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

}
