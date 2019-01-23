<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_orthopedic_patient_standing extends Model
{
    protected $fillable=['well_nourished','diabiliated','fair','disfigured','poor','obese','head_tilt_l_n_r','rotation_l_n_r','shoulder_tilt_l_n_r','rotation_l_n_r_1','hip_tilt_l_n_r','rotation_l_n_r_2','biceps_l','biceps_r','triceps_l','triceps_r','radial_l','radial_r','patellar_l','patellar_r','achelles_l','achelles_r','dejerines_dejerines_l','dejerines_dejerines_r','Bechtew_l','Bechtew_r','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
