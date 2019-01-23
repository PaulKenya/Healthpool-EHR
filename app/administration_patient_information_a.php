<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administration_patient_information_a extends Model
{
    protected $fillable=['name','title', 'sex', 'married', 'company', 'district', 'location', 'birth_date', 'age', 'phone_number', 'sub_location', 'division', 'village', 'id_passport_no', 'next_of_kin_name', 'next_of_kin_relationship', 'phone_no', 'religion', 'occupation']; //
}
