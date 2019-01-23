<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinical_services_fallassessmentform extends Model
{
    protected $fillable=['bio_patient_name', 'bio_ip_no', 'bio_date', 'bio_age', 'bio_ward', 'bio_bed_number', 'bio_sex', 'risk', 'drug', 'year', 'medication', 'status',
        'urgency', 'present', 'mobility', 'condition', 'points','administration_patient_informations_id', 'institution_id', 'user_id'
        ];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
