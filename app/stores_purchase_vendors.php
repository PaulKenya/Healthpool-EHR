<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stores_purchase_vendors extends Model
{
    public $fillable = [
        'id',
        'type',
        'name',
        'company',
        'job_position',
        'title',
        'street',
        'city',
        'state',
        'zip',
        'country',
        'tin',
        'tags',
        'phone',
        'mobile',
        'website',
        'title',
        'language',
        'is_a_customer',
        'is_a_vendor',
        'salesperson',
        'internal_reference',
        'customer_payment_terms',
        'vendor_payment_terms',
        'fiscal_position',
    ];
}
