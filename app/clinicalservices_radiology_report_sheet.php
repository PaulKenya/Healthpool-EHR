<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_radiology_report_sheet extends Model
{
    protected $fillable=[
'bio_date','bio_ward'
,'bio_bed_number'
,'d_o_b'
,'wd_clinic_pvt'
,'pt_tel_no'
,'appointment_date'
,'time'
,'portable'
,'xray_no'
,'int_no'
,'charges'
,'invoice_number'
,'receipt_cs_no'
,'nhif_no'
,'brief_clinical_summary'
,'date_of_lmp'
,'tick'
,'specification'
,'doctors_name'
,'signature'
,'date_a'
,'radiographer_name'
,'signature_a'
,'date_b'
,'administration_patient_informations_id', 'institution_id', 'user_id'];

    public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }

}
