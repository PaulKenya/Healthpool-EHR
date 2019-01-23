<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stores_request_for_quotation_new_deliveries_and_invoices extends Model
{
    public $fillable = [
        'id',
        'vendor',
        'order_date',
        'vendor_reference',
        'scheduled_date',
        'payment_terms',
        'incoterm',
        'fiscal_position',
    ];
}
