<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_add_expense extends Model
{
    protected $fillable = ['account',
        'balance',
        'paymentdate',
        'payment',
        'memo',
        'attachments',
        'product',
        'description',
        'quantity',
        'amount',
        'service',
        'sdescription',
        'squantity',
        'rate',
        'samount']; //
}
