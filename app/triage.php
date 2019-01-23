<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class triage extends Model
{

    protected $fillable=[
        'destination',
'via',
'salivation',
'lacrimation',
'urination',
'defecation',
'distress'
,'emesis'
,'auto_injector_1',
'auto_injector_2',
'auto_injector_3',
'auto_injector_4',
'auto_injector_5',
'gross_decon',
'secondary_deacon',
'blunt_trauma',
'burn',
'cspine',
'cardiac',
'crushing',
'fracture',
'laceration',
'penetrating_injury',
'others'
,'time',
'bp',
'pulse',
'respiration',
'drug_solution',
'dose',
        'temperature',
'weight',
'pressure',
'comments',
'status','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
