<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class childhealthcard2 extends Model
{
    protected $fillable= ['check6','date6','check12','date12','check18','date18','check24','date24','check30','date30','check36','date36','check42','date42','check48','date48','check54','date54','check60','date60','vaccine','date_given','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
