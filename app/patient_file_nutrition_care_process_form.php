<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_nutrition_care_process_form extends Model
{
    protected $fillable=['doa','dod','ward','bed','principle_diagnosis','height','weight','bmi','muac','z_score','others','physical_exam','medications','procedures','prescribed_diet','problem1','etiology','problem2','etiology1','signs_symptoms','nutrition_prescription','prescribed_diet1','prot','chos','fat','kcals','others1','route_of_administration','other_interventions','nutritionist','sign','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
