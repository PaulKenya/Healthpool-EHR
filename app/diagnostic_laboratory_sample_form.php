<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostic_laboratory_sample_form extends Model
{
    protected $fillable =['date','sample_name','tech_name','sample_availability','administration_patient_informations_id','institution_id','user_id'];////
}
