<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administration_employees extends Model
{
    protected $fillable= ['name','photo','work_address','position','work_location','work_email','manager','work_phone','coach','working_hours','manager2','employee','collaborators','colleagues','periodic_appraisals','nationality','private_address','id_no','pass_no','bank_account_no','gender','d_o_b','visa_no','work_permit_no','visa_expiry_date','related_user','badge_id'];


}
