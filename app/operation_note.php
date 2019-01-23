<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operation_note extends Model
{
    protected $fillable=['operation_notes','administration_patient_informations_id', 'institution_id', 'user_id'];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

}
