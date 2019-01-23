<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surgical extends Model
{
    protected $fillable= ['surgicaloperation','bloodtransfusion','familyhistory','twins','tuberculosis','diabetes','hypertension','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
