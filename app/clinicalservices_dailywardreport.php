<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_dailywardreport extends Model
{
    protected $fillable=['notifications_of_death','name', 'ward_depts', 'age', 'sex', 'residence', 'ip_op_no', 'date_of_admission', 'time', 'diagnosis', 'address', 'name_&_address_of_hosp_referred_from', 'next_of_kin', 'relationships_designations', 'signature_of_ward_nurse', 'ocn_dcn_cnsignature', 'can_dcn_cnsignature', 'date','departments']; //
}
