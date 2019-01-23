<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stores_control_incoming_products extends Model
{
    protected $fillable =["source_location", "products", "destination_location", "initial_demand", "source_document", "procurement_group","purchase_order_line"];
}
