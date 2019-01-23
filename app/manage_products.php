<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manage_products extends Model
{
    protected $fillable =[
        'added_date','product_name',"select_cat", "select_brand", "product_price", "product_qty"
    ];
}
