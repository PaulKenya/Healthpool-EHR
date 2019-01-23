<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_budget extends Model
{
    protected $fillable=['date', 'department', 'allocation_in_kes', 'year']; //
}
