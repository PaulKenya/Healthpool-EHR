<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_oncology_cbe_results_examination_form extends Model
{
    protected $fillable=['pt_name','new_id','dob','date_of_lact','annual_screening','normal','patient_age_dx','patient_age_dx_1','new_problem','abnormal','mother_age_of_dx_1','mother_age_of_dx','recall','unknown','sister_age_of_dx','n_a','short_term_f_u','mos','daughter_age_of_dx','n_a_1','other','other_1','aunt_age_of_dx','n_a_2','male_realtives_age_of_dx','n_a_3','patient_concerns_1','r_1','l_1','cyclic_1','date_pt_found','last_mammogram','lump','lump1','lump_2','lump_3','lump_4','last_menstral_period','nipple_discharge','discharge_1','discharge_2','discharge_3','discharge_4','byopsy_1','byopsy_2','byopsy_3','nipple_skin_retention','retention_1','retention_2','retention_3','retention_4','diets','swelling','swelling_1','swelling_2','swelling_3','swelling_4','years_1','years_2','years_3','rash','rash_1','rash_2','rash_3','rash_4','last_used','breast_pain','pain_1','pain_2','pain_3','pain_4','augmentation','augmentation_dates','Others_2','Others_3','Others_4','Others_1','Others_5','Others_6','Others_7','Others_8','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
