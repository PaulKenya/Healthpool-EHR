<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class childhealthcard3 extends Model
{
    protected $fillable= ['social','head','turn','extend','sitting','standing','walking','talking','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}

