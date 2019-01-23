<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_add_customer extends Model
{
    protected $fillable = [
        'title',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'company',
        'display_name_as',
        'street',
        'city',
        'state',
        'postal_code',
        'country',
        'notes',
        'email',
        'phone_no',
        'mobile_no',
        'fax',
        'other',
        'website',
        'preferred_payment_method',
        'preferred_delivery_method',
        'opening_balance',
        'date_as_of',
        'account_no',
        'tax_registration_number',
        'attachments',
    ];
}
