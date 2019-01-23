<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pharmacy_suppliers extends Model
{
    protected $fillable=['vendor_code','vendor_name','category','approval'];
}
