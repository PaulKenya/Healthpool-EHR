<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventory_stockoperations extends Model
{
    protected $fillable=['partner','scheduled_date','source_document','product','initial_demand','reserved','done','shipping_policy','operation_type','priority'];
}
