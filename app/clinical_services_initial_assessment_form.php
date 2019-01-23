<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinical_services_initial_assessment_form extends Model
{
    protected $fillable=[
'bio_patient_name','bio_place_of_birth','bio_age','bio_sex','bio_telephone_number','bio_address','bio_bed_nationality','bio_bed_date','bio_bed_time','general','head_and_ent',
'spine_precautions','gcs_e','gcs_v','gcs_m','gcs_total','gcs_a','gcs_v_two','gcs_p','gcs_u','patient_b','stridor','obstructed','easy','dyspnea','tachypnea','shallow','not_ausculated',
'bilateral','wheezes','diminished','clear','crackles','oxygen_sat_ra','oxygen_admin_per','at','oxygen_sat_b','pulse_b','jvp','precordium','warm','dry','cool','moist_diaphoretic','soft',
'distened','tenderness','present','absent','last_meal','extremety_deformity','moves_all_extremities','digital_pulses_present','part_of_body_in_pain','diagnosis_b','discharge_pescription',
'discharge_instruction','improved','unchanged','return_appointment_date','patient_admitted_to','admission_time','discharge_time','signature_a','doctors_name','administration_patient_informations_id', 'institution_id', 'user_id'
];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }


}
