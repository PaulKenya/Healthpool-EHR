<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_blood_donation_requestform extends Model
{
    protected $fillable=['ward','requesting', 'date', 'comments','administration_patient_informations_id', 'institution_id', 'user_id'];

    public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }

}
