<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinical_btu extends Model
{
    //
    protected $fillable = [
        'patient_name', 'ip_no', 'sex', 'age', 'ward', 'bed', 'reason_for_transfusion', 'consultant_in_charge', 'house_man', 'patients_group', 'hb', 'date_of_previous_transfusion',
        'details_of_any_reaction', 'degree_of_urgency', 'number_of_pints', 'packaged', 'date_time_required', 'name', 'date', 'time', 'time_am_pm', 'signature', 'blood_group', 'rhesus',
        'packed_no', 'group', 'expiry_date', 'compatibility', 'it', 'details_of_transfusion','department','date_received', 'rhesus1',
    ];

}
