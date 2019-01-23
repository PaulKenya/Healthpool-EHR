<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventory_reorderingrules extends Model
{
    protected $fillable=['name','product','minimum_quantity','maximum_quantity','quantity_multiple','lead_time'];
}
