<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_morphine extends Model
{
    protected $fillable=['patients_name','ip_number','ward','age','date_morphine','primary_doctor','prescribed_by','form_of_morphine_used','strength_of_formulation',
        'tablet','frequency_of_administration','date','time_given','time_of_extra_doses','given_by','remarks','administration_patient_informations_id', 'institution_id', 'user_id'
    ]; //

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

}
