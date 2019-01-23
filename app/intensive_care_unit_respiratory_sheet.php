<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class intensive_care_unit_respiratory_sheet extends Model
{
    protected $fillable =[

        'date',
        'dob',
        'age',
        'sex',
        'day_in_unit',
        'diagnosis',
        'pulse_time',
        'bp_time',
        'temperature_time',
        'cvp_time',
        'arterial_ph_time',
        'co2_time',
        'po2_time',
        'blood_so2_time',
        'gas_be_time',
        'hco3_time',
        'na_time',
        'k_time',
        'lab_tech_time',
        'doctor_signs_time',
        'respirator_time',
        'pressure_time',
        'rate_set_time',
        'patient_time',
        'mv_or_tv_actual_time',
        'mv_or_tv_set_time',
        'assist_control_time',
        'o2_time',
        'trach_size_time',
        'nebulizer_time',
        'endo_tube_size_time',
        'cutt_deflates_time',
        'five_min_time',
        'physiotherapy_time',
        'suction_time',
        'sign_time',
        'position_of_pt_time',
        'weaning_time',
        'spontaneous_breathing_time',
        'remarks'
        ,'administration_patient_informations_id', 'institution_id', 'user_id'
    ];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
