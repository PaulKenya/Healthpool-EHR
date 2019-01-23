<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceAddProductOrServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_add_product_or_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku');
            $table->string('category');
            $table->string('quantity');
            $table->date('date');
            $table->string('reorder');
            $table->string('account');
            $table->string('picture');
            $table->string('info');
            $table->integer('price');
            $table->integer('income');
            $table->string('purchase');
            $table->integer('cost');
            $table->string('expense');
            $table->string('supplier');
            $table->string('name');
            $table->string('service_sku');
            $table->string('service_category');
            $table->string('service_picture');
            $table->string('service_product');
            $table->string('income_account');
            $table->integer('sales_price');
            $table->string('purchase_service_product');
            $table->string('sales_description');
            $table->string('expenses_account');
            $table->integer('purchase_cost');
            $table->string('preferred_supplier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finance_add_product_or_services');
    }
}
