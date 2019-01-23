<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_add_product_or_service extends Model
{
    protected $fillable = [
        'sku',
        'category',
        'quantity',
        'date',
        'reorder',
        'account',
        'picture',
        'info',
        'price',
        'income',
        'purchase',
        'cost',
        'expense',
        'supplier',
        'name',
        'service_sku',
        'service_category',
        'service_picture',
        'service_product',
        'income_account',
        'sales_price',
        'purchase_service_product',
        'sales_description',
        'expenses_account',
        'purchase_cost',
        'preferred_supplier',
    ]; //
}
