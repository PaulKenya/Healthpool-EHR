<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_ecgform extends Model
{

    protected $fillable = ['bio_date', 'bio_ward', 'bio_bed_number', 'bio_place_of_birth', 'bio_telephone_number', 'bio_address', 'bio_bed_nationality', 'bio_bed_date', 'bio_bed_time', 'unit_number', 'ward_clinic', 'previous_ecg', 'report_to_be_sent_to', 'medication', 'diuretics', 'provisional_diagnosis', 'date', 'signed', 'printed','administration_patient_informations_id', 'institution_id', 'user_id'];

    public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }

}
