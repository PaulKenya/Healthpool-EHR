<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_infant_record extends Model
{
    protected $fillable=['mothers_hospital_no','name','fathers_occupation','address','infant_name','age','sex','age1','para','edd','year','outcome','parental_clinic','toxaemia_a_phaem','others','Diabetes','Tb','Renal','Cardiac','others1','ABO','RH','kalin','VDRL','X_Ray','result','duration','second_stage','mode_of_delivery','placenta','wt','condition','membranes_raptured','amniotic_fluid','foul','meconium','analgesia','anasthesia','born_on','at','resuscitation','mucous_extraction','given_duration','incubation_duration','spontaneous_response','drugs_during_resuscitation','birth_weight','birth_length','malformation','blood_group','highest_bilirubin','urine','drugs','bye_drops','vit_k','bcg','perinantal_problems','admitted_to_nursery','time','dismissal_weight','remiscitation','anomalies','apgar_score_at_1_min','five_min'];
}
