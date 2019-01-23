<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_ecgrequest extends Model
{
    protected $fillable = [
        'patient_name',
        'unit_number',
        'age',
        'sex',
        'ward_clinic',
        'bed',
        'previous_ecg',
        'report_sent_to',
        'medication',
        'digoxin',
        'relevant_history',
        'date',
        'signed',
        'printed',
        'department',
    ];
}
