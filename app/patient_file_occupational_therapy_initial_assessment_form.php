<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_occupational_therapy_initial_assessment_form extends Model
{
    protected $fillable=['date_referred','date_of_asessment','occupational','diagnosis','ot_no','adressed_by','referred_by','signature','main_complaint','personal_history','history','relevant','occupational_entail','activities','typical_day','leisure_time','priorities_in_life','impairement_prevent','communicational_skills','planning','memory','organization','organization','problem_solving','sensory_processing','physical_ability','clients_posture','clients_mobility','co_ordination','clients_muscle','adls','barriers','assistive_devices','social_support','eating_skills','dressing_skils','hygiene_skills','domestic_living','comm_skills','other','fine_motor','handwriting','gross_motor','socializing_skills','pre_vocational','others','play_leisure','no_clear','intevention','needforot','need_extensive','referral','ot_issues','intervention_plan','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
