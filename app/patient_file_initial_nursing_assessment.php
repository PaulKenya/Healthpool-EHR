<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_initial_nursing_assessment extends Model
{
    protected $fillable=['bio_patient_name','bio_ip_no','bio_date','bio_age','bio_ward','bio_bed_number','bio_sex','pain','pain_b','mood','sent_satisfied','sent_dissatisfied','neutral','very_dissatisfied','very_very_dissatisfied','intervention','present_illness','past_medical_history','family_social_history','information'

        ,'administration_patient_informations_id', 'institution_id', 'user_id'

    ];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }


}
