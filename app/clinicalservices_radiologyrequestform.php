<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_radiologyrequestform extends Model
{
    protected $fillable=['patient_name','hosp_no','DOB','age','gender','wd_clinic_pvt','pt_tel_no','appointment_date','time','portable','xray_no','int_no','charges','invoice_number','receipt_csno','nhif_no','brief_clinical_summary','date_of_lmp','type_of_invenstigation','specifications','type_of_invenstigation1','specifications1','type_of_invenstigation2','specifications2','type_of_invenstigation3','specifications3','type_of_invenstigation4','specifications4','type_of_invenstigation5','specifications5','type_of_invenstigation6','specifications6','type_of_invenstigation7','specifications7','doctors_name','signature','date','tel','radiographers_name','departments'];
}
