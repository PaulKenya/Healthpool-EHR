<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class childhealthcard extends Model
{
    protected $fillable= ['health_facility_name','service_delivery_point_no','childs_name','date_of_birth','gestation_age','place_of_birth','home','health_facility','fathers_name','mothers_name','province','district','division','location','estate','po_box','town','telephone','date','description','antigen','batch_no','manufacture_date','expiry_date','manufacturer_name','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
