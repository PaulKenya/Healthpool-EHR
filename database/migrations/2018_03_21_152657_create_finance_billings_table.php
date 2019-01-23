<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_billings', function (Blueprint $table) {
            $table->increments('id');


            $table->string('customer_name');
            $table->string('email_address');
            $table->string('billing_address');
            $table->date('invoice_date');
            $table->date('due_date');
            $table->string('invoice_message');

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
        Schema::dropIfExists('finance_billings');
    }
}
