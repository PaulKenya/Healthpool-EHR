<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_banking extends Model
{
    protected $fillable=['id','date','bank_name','cheque_number','received_from','paid_for','received_at','name_of_client'];
}
