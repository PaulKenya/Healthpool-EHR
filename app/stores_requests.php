<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stores_requests extends Model
{
    protected $fillable = [
        'item_code',
        'item_name',
        'quantity',
        'expiry_date',
    ];
}
