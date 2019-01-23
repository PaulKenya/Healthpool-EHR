<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_maternity_records extends Model
{
    protected $fillable=['name','ip_number','date_of_admission','age','marital_status','residence','education_level','occupation','next_of_kin','telephone_number_of_kin','present_history','pastt_history','menarchy','cycle','duration','flow','fp','anc','tt','hb','vdrl','blood_group','hiv','hiv_status_of_partner','lmp','edd','med','parity','gravida','year','place_of_delivery','type_of_delivery','sex','weight','date','peuperium','year1','place_of_delivery1','type_of_delivery1','sex1','weight1','date1','peuperium1','bp','pulse','rr','temperature','fh_rate'
        ,'administration_patient_informations_id', 'institution_id', 'user_id'
    ];

    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
