<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_invoice extends Model
{
    protected $fillable =['payment_date','description_of_expense','department','unit_cost','number_of_units','total_unit'
    ];
}
