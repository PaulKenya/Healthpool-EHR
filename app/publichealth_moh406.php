<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publichealth_moh406 extends Model
{
    protected $fillable=[
        "date",
        "pnc_no",
        "in_patient_no",
        "full_names",
        "age",
        "level_of_education",
        "sub_location",
        "village",
        "date_of_delivery",
        "state_of_baby",
        "temperature",
        "pulse",
        "bp",
        "palor_and_hb",
        "breast_exam",
        "uterus",
        "pph",
        "cs_site",
        "lochia",
        "episiotomy",
        "hiv_status",
        "diagnosis",
        "mothers",
        "counselled_on_neonatal_care",
        "counselled_on_fp",
        "on_arvs",
        "cotrimazole",
        "screened_for_cancer_of_the_cervix",
        "other_conditions",
        "remarks",
        "total_attendances",
        "total_number_counselled",
        "total_no_arvs",
        "total_hiv_positive",
        "infants",
        "total_mothers",];
}
