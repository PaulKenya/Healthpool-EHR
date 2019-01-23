<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_orthopedic_tests extends Model
{
    protected $fillable=['adisons_l','adisons_r','wrights_l','wrights_r','allens_l','allens_r','bdens_test_l','bdens_test_r','cervical_compressions_l','cervical_compressions_r','jacksons_compressions_l','jacksons_compressions_r','rotation_l_3','rotation_r_3','cervical_decompressions_l','cervical_decompressions_r','George_test_l','George_test_r','arc_of_abduction_l','arc_of_abduction_r','deltoid_extension_l','deltoid_extension_r','wrist_wrist_l','wrist_wrist_r','wrist_flexion_l','wrist_flexion_r','finger_cud_l','finger_cud_r','finger_spread_l','finger_spread_r','cold_hands_l','cold_hands_r','administration_patient_informations_id', 'institution_id', 'user_id','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
