<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_accident_and_emergency extends Model
{
protected $fillable=[
    'bio_patient_name','bio_place_of_birth','bio_age','bio_sex','bio_telephone_number','bio_address','bio_bed_nationality','bio_bed_date','bio_bed_time','air','cyclist','assault',
    'pedestrian','burns','self_inflicted','other_form_of_accident','name_a','telephone_no','relationship','patient_referred_from','walking','stretcher','wheel_chair','carried',
    'name_a1','force_number','police_station','date_of_accident','time','vehicle_number','driver_name','id_no','dl_no','triage_time','emergency','urgent','semi_urgent','non_urgent',
    'pr','rr','temp','oxygen_sat','lmp','wt','phmx','allergies','medications','valuables','history_and_examination','time_seen','lab_sent'
    ,'administration_patient_informations_id', 'institution_id', 'user_id'
];
//accident_and_emergency

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}