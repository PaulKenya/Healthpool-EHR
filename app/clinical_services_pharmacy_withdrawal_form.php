<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinical_services_pharmacy_withdrawal_form extends Model
{
    protected $fillable=[
'doa',
'dod',
'unit_no',
'date_a',
'description',
'total_returned',
'unit_price',
'total_cost',
'ward_withdrawal',
'sign',
'name_a',
'designation',
'sign_a',
'department',
'name_b',
'sign_b','administration_patient_informations_id', 'institution_id', 'user_id'
    ];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

}
