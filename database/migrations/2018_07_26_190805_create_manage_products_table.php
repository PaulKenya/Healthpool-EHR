<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManageProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_products', function (Blueprint $table) {
            $table->increments('id');
            $table->date('added_date')->nullable();
            $table->string('product_name')->nullable();
            $table->string("select_cat")->nullable();
            $table->string("select_brand")->nullable();
            $table->integer("product_price")->nullable();
            $table->integer("product_qty")->nullable();
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
        Schema::dropIfExists('manage_products');
    }
}
