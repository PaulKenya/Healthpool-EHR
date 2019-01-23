<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_inpatientnutritioncareregister extends Model
{
    protected $fillable=['county',
        'sub_county',
        'health_facility',
        'unique_reg_number',
        'admission_date',
        'clients_name',
        'physical_address',
        'age',
        'sex',
        'household_food_security',
        'admin_criteria',
        'type_of_admission',
        'serostatus',
        'weight',
        'muac',
        'departments'];//
}
