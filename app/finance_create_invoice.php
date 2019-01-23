<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_create_invoice extends Model
{
    protected $fillable = ['customer',
        'email',
        'address',
        'payment',
        'invoicedate',
        'duedate',
        'message',
        'statement',
        'attachments',
        'productservice',
        'description',
        'quantity',
        'rate',
        'amount'];
}
