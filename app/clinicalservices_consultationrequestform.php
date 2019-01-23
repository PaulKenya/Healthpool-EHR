<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_consultationrequestform extends Model
{

protected $fillable=['bio_date','bio_ward','bio_bed_number','dr_mr','in_the','full_name_of_patient','referred_from_ward','clinic','unit_no','casualty_no','others','diagnosis','reasons_for_consultations','urgent','signature','name_printed','administration_patient_informations_id', 'institution_id', 'user_id'];

    public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }

}
