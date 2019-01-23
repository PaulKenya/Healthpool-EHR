<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinical_services_allergyform extends Model
{
    protected $fillable=['bio_date','bio_ward','bio_bed_number','admissiondate','penincillin','allergy','hydrocortisone','signature'
        ,'administration_patient_informations_id', 'institution_id', 'user_id'];//

    public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }

}
