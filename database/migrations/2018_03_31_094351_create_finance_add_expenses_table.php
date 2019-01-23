<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceAddExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_add_expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account');
            $table->string('balance');
            $table->date('paymentdate');
            $table->string('payment');
            $table->string('memo');
            $table->string('attachments');
            $table->string('product');
            $table->string('description');
            $table->integer('quantity');
            $table->integer('amount');
            $table->string('service');
            $table->string('sdescription');
            $table->integer('squantity');
            $table->string('rate');
            $table->integer('samount');
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
        Schema::dropIfExists('finance_add_expenses');
    }
}
