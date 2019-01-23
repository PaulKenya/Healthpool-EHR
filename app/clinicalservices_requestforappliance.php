<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_requestforappliance extends Model
{
    protected $fillable=['date','name_of_patient', 'unit_no', 'DOB', 'age', 'gender', 'referred_from', 'bed_no', 'previous_treatment', 'current_medication',
        'reasons_for_referral', 'urgency', 'name', 'designation', 'signature', 'department',];
}
