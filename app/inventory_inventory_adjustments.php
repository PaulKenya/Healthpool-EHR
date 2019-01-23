<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventory_inventory_adjustments extends Model
{
    protected $fillable=['inventory_reference','inventory_of','inventory_date'];
}
