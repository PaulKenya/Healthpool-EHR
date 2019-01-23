<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pharmacy_purchase_products extends Model
{
    public $fillable = [
        'id',
        'product_name',
        'can_be_sold',
        'can_be_purchased',
        'product_type',
        'sale_price',
        'category',
        'cost',
        'internal_reference',
        'barcode',
        'vendor',
        'minimum_quantity',
        'price',
        'start_date',
        'end_date',
        'routes_buy',
        'routes_make_order',
        'weight',
        'volume',
        'customer_lead_time',
        'responsible',
        'receivables',
        'payables',
        'description_for_customers',
        'description_for_vendors',
        'description_for_delivery_orders',
        'description_for_reception',
        'description_for_internal_transfers',
    ];
}
