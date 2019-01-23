<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_billing extends Model
{
    protected $fillable = [
        'customer_name',
        'email_address',
        'billing_address',
        'invoice_date',
        'due_date',
        'invoice_message',
    ];
}
