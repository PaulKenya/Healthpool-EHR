<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class childhealthcard5 extends Model
{
    protected $fillable= ['date','clinicalnotes','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
