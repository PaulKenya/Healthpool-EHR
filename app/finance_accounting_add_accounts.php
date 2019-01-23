<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_accounting_add_accounts extends Model
{
    protected $fillable= ['account_type','details_type','name','sub_account','default_tax' ];
}
