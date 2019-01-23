<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostic_laboratory_report_sheet extends Model
{
    protected $fillable =['lab_partner','lab_experiment','state_standard','lab_date','introduction','hypothesis','materials','procedures','data_Recording','analysis','discussion','conclusion','administration_patient_informations_id','institution_id','user_id'];////
}
