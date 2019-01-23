<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_xrayrequestform extends Model
{
    protected $fillable=['date','ip_op_number','ref_no','patient','cell','age','weight','sex','clinical_info','lmp','investigation_required','report','referring_doctor',
        'branch','signature','cell2','reported_by','time','administration_patient_informations_id', 'institution_id', 'user_id'];


    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

}
