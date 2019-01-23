<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pharmacy_purchase_orders_new_deliveries_and_invoices extends Model
{
    protected $fillable= ['VENDOR', 'ORDER_DATE', 'VENDOR_REFERENCE', 'PRODUCT',  'SCHEDULED_DATE', 'PAYMENT_TERMS', 'INCOTERMS', 'FISCAL_POSITION'];
}
