<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fluid_in_out_chart extends Model
{
    protected $fillable = [
        "date",
        "bed",
        "body_weight",
        "balance_yesterday",
        "time",
        "systole_bp",
        "type_of_fluid",
        "litra_vol",
        "oral",
        "noso_gastric_suction",
        "vomituous",
        "dried_stool_fistula",
        "urine_amount",
        "urine_sp_gr",
        "instruction_for_intravenous_fluid_today",
        "instruction_for_oral_fluids_today",
        "instruction_for_noso_gastric_suction_today",
        "urine",
        "drain_stool_or_fistula",
        "vomitous",
        "naso_gastric_suction",
        "insensible_loss",
        "total_output",
        "intake",
        "intravenous",
        "oral_",
        "total_intake",
        "balance_today",

        'administration_patient_informations_id', 'institution_id', 'user_id'
    ];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}

