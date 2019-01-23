<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preoperative_checklist extends Model
{
    protected $fillable=[
        'patient_name',
        'ip_no',
        'age','sex','ward','bed','wigs','jewellery','dentures','preparation','urinalysis','sugar',
        'albumin','bladder_check_and_urinary_catheter','gastric_tube','x_rays','blood_available','consent_given','consent_given',
        'premedication_given','premedication_given','hydration_normal','hydration_normal','hb','pcv','electrolyte_normal','electrolyte_normal',
        'temperature','hydration_normal','chest_normal','bp_systolic','pulse_min','rmp_completed','ipf_operation','blood_available','consent_given',
        'consent_given','hb','pcv','electrolyte_normal','electrolyte_normal','temperature','sugar','bp_systolic','bp_diastolic','pulse','dentures',
        'ipf_operation','ipf_operation','blood_available','has_consent_been_given','has_consent_been_given','premedication_given','premedication_given',
        'ward_nurse_signature','ward_nurse_sign_date','ward_nurse_sign_time','ward_doctor_signature'
        ,'doctor_signature_date', 'doctor_signature_time','patient_seen_by_anaesthetist','anaesthetist_signature','anaesthetist_sign_date','anaesthetist_sign_time','signature_of_anaesthetist'
        ,'sign_date','sign_time','administration_patient_informations_id', 'institution_id', 'user_id'
    ];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

}
