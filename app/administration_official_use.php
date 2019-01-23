<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administration_official_use extends Model
{
    protected $fillable= ['admitting_doctor','ward','bed_number','referred_from','diagnosis','charge_sheet','date_of_admission','unit_number','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
