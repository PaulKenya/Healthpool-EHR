<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pharmacy_purchase_orders_new_products extends Model
{
    protected $fillable= ['VENDOR', 'ORDER_DATE', 'VENDOR_REFERENCE', 'PRODUCT',  'DESCRIPTION', 'SCHEDULED_DATE', 'QUANTITY', 'RECEIVABLE_QUANTITY','BILLABLE_QUANTITY',  'UNIT_PRICE', 'TAXES', 'SUB_TOTAL', 'TERMS_AND_CONDITIONS'];
}
