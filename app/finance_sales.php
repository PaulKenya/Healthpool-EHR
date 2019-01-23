<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_sales extends Model
{
    protected $fillable=['date_of_payment','services_offered','amount','id_number'];
}
