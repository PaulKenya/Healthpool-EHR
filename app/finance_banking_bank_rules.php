<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_banking_bank_rules extends Model
{
    protected $fillable=['rule_name','for','in','bank_texts','contains','transaction_type','payee','category','memo','automatic'];
}
