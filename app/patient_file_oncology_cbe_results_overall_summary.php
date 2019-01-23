<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_oncology_cbe_results_overall_summary extends Model
{
    protected $fillable=['name','date','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

}
