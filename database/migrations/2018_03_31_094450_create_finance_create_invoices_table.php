<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceCreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_create_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer');
            $table->string('email');
            $table->integer('address');
            $table->string('payment');
            $table->date('invoicedate');
            $table->date('duedate');
            $table->string('message');
            $table->string('statement');
            $table->string('attachments');
            $table->string('productservice');
            $table->string('description');
            $table->string('quantity');
            $table->string('rate');
            $table->string('amount');
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
        Schema::dropIfExists('finance_create_invoices');
    }
}
