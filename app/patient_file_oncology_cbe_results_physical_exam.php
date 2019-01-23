<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_oncology_cbe_results_physical_exam extends Model
{
    protected $fillable=['none_1','none_2','none_3','none_4','none_5','none_6','fine_1','fine_2','fine_3','fine_4','fine_5','fine_6','dense','dense_1','dense_2','dense_3','dense_4','dense_5','skin_edema','skin_1','skin_2','skin_3','skin_4','skin_5','nipple_charge','nipple_charge_1','nipple_charge_2','nipple_charge_3','nipple_charge_4','nipple_charge_5','tenderness','tenderness_1','tenderness_2','tenderness_3','tenderness_4','tenderness_5','discharge','discharge_1','discharge_2','discharge_3','discharge_4','discharge_5','mass','mass_1','mass_2','mass_3','mass_4','mass_5','None','yes','no','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
