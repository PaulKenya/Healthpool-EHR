<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_oncology_cbe_results_discrete_mass extends Model
{
    protected $fillable=['wnl_r','wnl_l','supra_r','supra_l','infra_r','infra_l','enlarged_r','enlarged_l','en_supra_r','en_supra_l','en_infra_r','en_infra_l','fixed_r','fixed_l','mobile_r','mobile_l','cbe_result_date','imaging_referral_date','normal','screening_imaging','importance_of_annual_screen','benign_finding','diagnostic_imaging','referral_follow_up','anormality','ultra_sound_only','breast_self_examination','other','other_1','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
