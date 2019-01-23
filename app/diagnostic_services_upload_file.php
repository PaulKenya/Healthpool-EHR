<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostic_services_upload_file extends Model
{
    protected $fillable= ['xray_date','x_ray_body_part','name_of_radiologist','radiologist_reg_no','report','xray_file','administration_patient_informations_id', 'institution_id', 'user_id'];

    public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }

}
