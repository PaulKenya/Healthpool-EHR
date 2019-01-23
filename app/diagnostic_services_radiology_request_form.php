<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostic_services_radiology_request_form extends Model
{
    protected $fillable=['wd_clinic_pvt','pt_tel_no','appointment_date','time','portable','xray_no','int_no','charges','invoice_no','receipt_no','nhif_no','brief_clinical_summary','date_of_lmp','1','1_specification','1_charge','2','2_specification','2_charge','3','3_specification','3_charge','4','4_specification','4_charge','5','5_specification','5_charge','6','6_specification','6_charge','7','7_specification','7_charge','8','8_name','8_specification','8_charge','doctor_name','signature','date','req_doc_tel_no','radiographer_name','signature_radiographer','date_radiographer','administration_patient_informations_id', 'institution_id', 'user_id'];

    public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }

}
