<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maternal extends Model
{
    protected $fillable= ['name_of_institution',
'name_of_client',
'date_of_birth',
'gravida',
'parity',
'height',
'lmp',
'edd',
'marital_status',
'education',
'address',
'telephone',
'occupation',
'next_of_kin',
'next_of_kin_address','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

    public function mother()
    {
        return $this->hasMany('App\createchild');
    }
}
