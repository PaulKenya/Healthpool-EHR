<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class physical extends Model
{
    protected $fillable= ['general','cvs','respiration','breasts','abdomen','vaginal_examination','discharge_dud','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
