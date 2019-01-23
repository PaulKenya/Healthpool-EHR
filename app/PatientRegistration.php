<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientRegistration extends Model
{
    protected $fillable = [
        'date',
        'mrn_number',
        'ipad_number',
        'sex',
        'full_names',
        'id_number',
        'po_box',
        'postal_code',
        'town',
        'email_address',
        'telephone_home',
        'office',
        'current_residence',
        'sublocation_residence_town',
        'home_district',
        'date_of_birth',
        'religion',
        'nationality',
        'password',
        'nok_full_names',
        'nok_po_box',
        'nok_postal_code',
        'nok_town',
        'nok_email_address',
        'nok_telephone_home',
        'nok_office',
        'nok_current_residence',
        'nok_sublocation_residence_town',
        'nok_id_number',
        'nok_occupation',
        'nok_relationship_patient',
    ];


}
