<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publichealth_moh702 extends Model
{
    protected $fillable =['province','district','constituency','facility_name','agency','month','year','bcg_under_1','bcg_over_1','dpt_hep_b_hb_1_under_1','dpt_hep_b_hb_1_over_1','dpt_hep_b_hb_2_under_1','dpt_hep_b_hb_2_over_1','dpt_hep_b_hb_3_under_1','dpt_hep_b_hb_3_over_1','opv_birth_under_1','opv_birth_over_1','opv_1_under_1','opv_1_over_1','opv_2_under_1','opv_2_over_1','opv_3_under_1','opv_3_over_1','measles_under_1','measles_over_1','yellow_fever_under_1','yellow_fever_over_1','fic_under_1','fic_over_1','vitamin_a_6_to_12_months','vitamin_a_above_1_year','vitamin_a_lactating_mothers','bcg_a','bcg_b','bcg_c','bcg_d','bcg_e','bcg_f','bcg_g','bcg_h','opv_a','opv_b','opv_c','opv_d','opv_e','opv_f','opv_g','opv_h','measles_a','measles_b','measles_c','measles_d','measles_e','measles_f','measles_g','measles_h','dpt_hlb_hepb_a','dpt_hlb_hepb_b','dpt_hlb_hepb_c','dpt_hlb_hepb_d','dpt_hlb_hepb_e','dpt_hlb_hepb_f','dpt_hlb_hepb_g','dpt_hlb_hepb_h','tt_a','tt_b','tt_c','tt_d','tt_e','tt_f','tt_g','tt_h','vitamin_a_100000_a','vitamin_a_100000_b','vitamin_a_100000_c','vitamin_a_100000_d','vitamin_a_100000_e','vitamin_a_100000_f','vitamin_a_100000_g','vitamin_a_100000_h','vitamin_a_200000_a','vitamin_a_200000_b','vitamin_a_200000_c','vitamin_a_200000_d','vitamin_a_200000_e','vitamin_a_200000_f','vitamin_a_200000_g','vitamin_a_200000_h','form_submit_date','form_submitted_by','form_submit_designation','signature','received_by','received_designation','received_signature','received_date'
    ];
}
