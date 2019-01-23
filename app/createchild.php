<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class createchild extends Model
{
    protected $fillable= ['child_name','date_of_birth','mothers_name','parity','weight','status','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
    public function child()
    {
        return $this->belongsTo('App\maternal');
    }
}
