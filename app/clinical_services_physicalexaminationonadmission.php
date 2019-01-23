<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinical_services_physicalexaminationonadmission extends Model
{
    protected $fillable=[

        'bio_date',
        'bio_ward',
        'bio_bed_number',
        'condition',
'hygiene',
'nutrition',
'behaviour',
'oedema',
'other',
'abdomen',
'scars',
'tenderness',
'bowelpattern',
'bowelaction',
'laxatives',
'bowelsound',
'othersb',
'Hair',
'Face',
'Eyes',
'Nose',
'Mouth',
'Otherc',
'Mobility',
'Gait',
'Limbs',
'Digits',
'Muscletone',
'Scored',
'Hearingd',
'Speechd',
'Cryd',
'Othersd',
'Bladder',
'Voiding',
'Pain',
'Discharge',
'Otherse',
'pulse',
'bloodpressure',
'apexbeat',
'otherss',
'color',
'rashes',
'scarsb',
'woundsburns',
'bruises',
'temperaturec',
'waterlowscore',
'otherf',
'respirationpattern',
'ratebmin',
'cough',
'woundssputum',
'othersg',
'completion',
'date',
'time',
'designation',
'signature','administration_patient_informations_id', 'institution_id', 'user_id'];//

    public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }

}
