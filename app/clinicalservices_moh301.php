<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_moh301 extends Model
{
    protected $fillable =[
        'date_of_admission','inpatient_no','full_names','age_in_years','sex','sublocation','village_estate','address','hiv','nutrition_education','diagnosis','treatment_prescform','date_of_discharge','outcome','referral','remark','department',
        ];
    }
