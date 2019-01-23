<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pharmacy_dispensed_list extends Model
{
    protected $fillable= ['dispense','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
