<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_orthopedic_limbular_range_in_motion extends Model
{
    protected $fillable=['flexion_a','flexion_b','extension_a','extension_b','flexion_1_a','flexion_1_b','extension_1_a','extension_1_b','right_lateral_a','left_lateral_a','left_lateral_b','right_a','right_b','left_a','left_b','adams_sign_a','adams_sign_b','from_front_a','from_front_b','Dynamometer_grip_1a','Dynamometer_grip_1b','Dynamometer_grip_2a','Dynamometer_grip_2b','Dynamometer_grip_3a','Dynamometer_grip_3b','arms_1l','arms_1r','neck_1l','neck_1r','leg_1l','leg_1r','back_1l','back_1r','hypertensia','paresthia','positional','anesthia','hypesthesia','ROMBERG','finger_to_nose','toe_to_shin','finger_to_finger','kEMPS_r','kEMPS_l','TRENDELENBERG_r','TRENDELENBERG_l','LEWINS_test_r','LEWINS_test_l','MINORS_SIGN_r','MINORS_SIGN_l','NORMAL_a','NORMAL_b','IMPAIRED_a','IMPAIRED_b','PAIN_a','PAIN_b','NEED_ASSISTANCE','WALK_TOE','HEEL_WALK_r','HEEL_WALK_l','TOE_WALK_r','TOE_WALK_l','BABY_WALK','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
