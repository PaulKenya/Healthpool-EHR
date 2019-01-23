<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_add_supplier extends Model
{
    protected $fillable = ['title',
        'firstname',
        'middlename',
        'lastname',
        'suffix',
        'company',
        'display',
        'address',
        'city',
        'state',
        'postalcode',
        'country',
        'email',
        'phoneno',
        'mobileno',
        'fax',
        'other',
        'website',
        'billing',
        'terms',
        'balance',
        'date',
        'accountno',
        'business']; //
}
