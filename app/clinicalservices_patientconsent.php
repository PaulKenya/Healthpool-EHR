<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_patientconsent extends Model
{
    protected $fillable=[
        'surname',
        'hospital_no',
        'other_names',
        'date_of_birth',
        'age',
        'sex',
        'ward_clinic_dept',
        'name_of_surgeon',
        'name_of_anaesthetics',
        'next_of_kin',
        'relationship',
        'type_of_operation',
        'doctor_explanation',
        'nature_of_operation',
        'consent_of_operation',
        'consent_to_administration',
        'consent_to_disposal',
        'exeptions_to_operations',
        'assurance',
        'surgeon_assistant',
        'photographs_taken',
        'primary_care',
        'consent_admin',
        'law_protection',
        'ceo',
        'patient_signature',
        'sugnature_nextofkin_parent',
        'surgeon__medicalpractitioners_signatures',
        'anaethesists_signature',
        'practitioners_name',
        'signature',
        'departments',
        'administration_patient_informations_id', 'institution_id', 'user_id'
    ];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

}
