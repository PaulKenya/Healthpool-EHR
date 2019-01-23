<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostic_services_blood_donation_unit extends Model
{
    protected $fillable = ['bio_bed_number','ward','requesting','date','comments','administration_patient_informations_id', 'institution_id', 'user_id']; //

    public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }

}
