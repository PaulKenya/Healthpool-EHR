<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weight extends Model
{
    protected $fillable= ['month',
        'weight','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
