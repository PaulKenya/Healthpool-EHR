<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anaesthetic_record extends Model
{
    protected $fillable = [
        'op_ip_number',
        'ward_clinic',
        'date',
        'operation',
        'anaesthetists',
        'surgeons',
        'type_of_premedication',
        'time_given',
        'effect',
        'weight',
        'height',
        'administration_patient_informations_id', 'institution_id', 'user_id'];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
