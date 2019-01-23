<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pharmacy_inventory_scraporders extends Model
{
    protected $fillable=['product','quantity','source_document','expected_date'];
}
