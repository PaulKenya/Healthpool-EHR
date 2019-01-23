<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_insurances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('insurance_provider_name');
            $table->string('member_name');
            $table->integer('insurance_member_id');
            $table->date('date_of_birth');
            $table->string('blood_group');
            $table->string('known_allergies');
            $table->date('insurance_valid_from');
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
        Schema::dropIfExists('finance_insurances');
    }
}
