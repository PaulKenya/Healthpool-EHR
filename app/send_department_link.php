<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class send_department_link extends Model
{
    protected $fillable=['links','departments_id','discharged','seen','administration_patient_informations_id', 'institution_id', 'user_id','price','description','is_paid'];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

    public function department(){
        return $this->belongsTo(department::class);
    }
}
