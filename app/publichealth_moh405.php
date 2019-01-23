<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publichealth_moh405 extends Model
{
    protected $fillable=['date','anc_no','re_attendant','no_of_visits','full_names','age','marital_status','sub_location','village','parity','gravidae','lmp_date','edd_date','gestation_age','weight','blood_pressure','hb','rpr','hiv_status','screened_for_tb','received_hiv_results','other_conditions','cotrixamole_given','dose_of_tt_given','given_iron_supplementation','given_folic','given_ipt1','given_ipt2','received_arv_prophylaxis_mother','received_arv_prophylaxis_baby','received_itn','counselled_on','additional_treatment','partners','partners_status','hiv_positive_partners_referred_for_follow_up','remarks'];
}
