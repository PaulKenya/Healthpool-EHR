<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publichealth_moh511 extends Model
{
    protected $fillable = [
        'date','cwc_no','revisit','full_names','age','sex','sub_location','village','address','weight','underweight','danger_signs','net_issued','type_of_follow_up','referral','remarks'
    ];
}
