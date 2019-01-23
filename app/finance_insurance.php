<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_insurance extends Model
{
    protected $fillable=['insurance_provider_name','member_name','insurance_member_id','date_of_birth','blood_group','known_allergies','insurance_valid_from'];
}
