<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class previous_pregnancy extends Model
{
    protected $fillable= ['pregnancyorder','year','placeofdelivery','maturity','durationoflabour','typeofdelivery','weight','sex','outcome','perpetium','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
