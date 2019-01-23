<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pharmacy_control_vendor_bills extends Model
{
    protected $fillable=['bill','vendor','bill_date','vendor_reference','due_date','all_purchase_orders','product','description','quantity','unit_price','taxes','amount','responsible','fiscal_position'];
}
