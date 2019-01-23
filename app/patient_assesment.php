<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_assesment extends Model
{
    protected $fillable =[
        'bed_room_no',
        'time_of_ward_arrival',
        'date_of_admission',
        'admission_diagnosis',
        'confirmed_diagnosis',
        'reg_no',
        'ward',
        'surname',
        'other_names',
        'address',
        'date_of_birth',
        'sex',
        'doctors_name',
        'marital_status',
        'nationality',
        'religion',
        'language_spoken',
        'occupation',
        'residence',
        'patient_special_request',
        'ht',
        'wt',
        'bmi',
        'lmp',
        'blood_group',
        'preferred_accomodation',
        'next_of_kin',
        'name',
        'mobile_number',
        'address',
        'relationship',
        'residence',
        'admission_form',
        'ward_orientation_routine_gowns',
        'id_band_given',
        'admission_book_entry',
        'urinalysis_results',
        'patient_relatives_informed_of_visiting_hours',
        'doctor_informed',
        'nurse_care_plan',
        'medication_commenced',
        'valuable_forms_filled',
        'allergy_form_filled',
        'kitchen_informed',
        'client_feedback_form',
        'patient_admitted_by',
        'signature',
        'received_by',
        'signature','administration_patient_informations_id', 'institution_id', 'user_id'
    ];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

}
