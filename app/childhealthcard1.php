<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class childhealthcard1 extends Model
{
    protected $fillable= ['date_given9','date_of_next_visit9','date_given10','date_of_next_visit10','present','date_checked','absent','date_redone','date_given','date_of_next_visit','date_given1','date_of_next_visit1','date_given2','date_of_next_visit2','date_given3','date_of_next_visit3','date_given4','date_of_next_visit4','date_given5','date_of_next_visit5','date_given6','date_of_next_visit6','date_given7','date_given8','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
