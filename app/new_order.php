<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class new_order extends Model
{
    protected $fillable =[
        "order_date","cust_name","name","total","quantity","price","sub_total","gst","discount","net_total","paid","due","payment_type",'administration_patient_informations_id', 'institution_id', 'user_id'
    ];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
