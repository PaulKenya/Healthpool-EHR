<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_add_tax extends Model
{
    protected $fillable = ['taxname',
        'description',
        'taxagency',
        'sales',
        'rate',
        'account',
        'return',
        'sreturn',
        'purchase',
        'purchaserate',
        'accounts',
        'returns',
        'returnss',
        'period',
        'frequency',
        'business',
        'accountno',
        'balance',
        'agencyperiod',
        'total',
        'date',
        'amount',
        'memo'];//
}
