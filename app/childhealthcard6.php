<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class childhealthcard6 extends Model
{
    protected $fillable= ['hospitalname','admissionnumber','dateofadmission','dateofdischarge','dischargediagnosis','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
