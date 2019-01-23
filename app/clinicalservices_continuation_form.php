<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_continuation_form extends Model
{
    protected  $fillable=[
'ward_clinic',
'date_a',
'notes','administration_patient_informations_id', 'institution_id', 'user_id'

    ];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
