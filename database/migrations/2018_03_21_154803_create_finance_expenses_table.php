<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->date('payment_date');
            $table->string('description_of_expense');
            $table->string('department');
            $table->integer('unit_cost');
            $table->integer('number_of_units');
            $table->integer('total_cost');
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
        Schema::dropIfExists('finance_expenses');
    }
}
