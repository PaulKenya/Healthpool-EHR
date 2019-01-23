<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_labrequestform extends Model
{


    protected $fillable=[
        'bio_date',

        'bio_ward',
        'bio_bed_number',

        'date',

        'cell',
        'location',

        'weight',

        'clinicalnotes',
        'refferingdoctor',
        'branch',
        'signature',

        'technologists',
        'time',
        'timeofspecimen',
        'accounts'
        ,'administration_patient_informations_id', 'institution_id', 'user_id'];//

    public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }

}
