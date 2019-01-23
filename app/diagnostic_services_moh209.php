<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostic_services_moh209 extends Model
{
    protected $fillable=['date','opd_no','xray_no','full_names','age_in_years','sex','sub_location','village_estate','address','xray_examination_type','referral','amount_charged','remarks','administration_patient_informations_id', 'institution_id', 'user_id'];

    public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }

}
