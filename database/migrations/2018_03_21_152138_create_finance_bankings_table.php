<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceBankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_bankings', function (Blueprint $table) {
            $table->increments('id');

            $table->date('date');
            $table->string('bank_name');
            $table->integer('cheque_number');
            $table->string('received_from');
            $table->string('paid_for');
            $table->string('received_at');
            $table->string('name_of_client');

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
        Schema::dropIfExists('finance_bankings');
    }
}
