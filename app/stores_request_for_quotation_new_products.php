<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stores_request_for_quotation_new_products extends Model
{
    public $fillable = [
        'id',
        'vendor',
        'order_date',
        'vendor_reference',
        'product',
        'description',
        'scheduled_date',
        'quantity',
        'unit_price',
        'taxes',
        'sub_total',
        'terms_and_conditions',
    ];
}
