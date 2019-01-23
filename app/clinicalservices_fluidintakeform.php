<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_fluidintakeform extends Model
{
    protected $fillable=[
        'name',
        'ip_no',
        'age',
        'sex',
        'ward',
        'bed',
        'sex2',
        'date',
        'body_weight',
        'balance_yesterday',
        'time',
        'systole',
        'type_of_fluid',
        'litra',
        'oral',
        'noso_gastric_sunction',
        'vomitous',
        'dried',
        'departments',
        'total_output','total_intake','balance_for_today'
    ];
}
