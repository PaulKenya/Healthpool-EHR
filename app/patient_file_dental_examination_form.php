<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_dental_examination_form extends Model
{
    protected $fillable=['name','address','date','estimate','remarks','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
