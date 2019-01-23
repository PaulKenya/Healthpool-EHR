<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publichealth_moh510 extends Model
{

    protected $fillable=["date","serial_number","childs_number","childs_names","sex","date_of_birth","date_first_seen","fathers_full_names","mothers_full_names","location","address","bcg_vaccine","revaccination_date","polio_birth_dose_vaccination","first_polio_vaccine_date","second_polio_vaccine_date","third_polio_vaccine_date","dpt_hepb_hb1_vaccine_date","dpt_hepb_hb2_vaccine_date","dpt_hepb_hb3_vaccine_date","measles_vaccine_date","yellow_fever_vaccine_date","vitamin_a_vaccine_date","fully_immunized_vaccine_date","remarks",'departments'];
}

