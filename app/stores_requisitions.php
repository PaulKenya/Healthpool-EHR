<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stores_requisitions extends Model
{
    protected $fillable=['item_code','item_name','quantity','expiry_date'];
}
