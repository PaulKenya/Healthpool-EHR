<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalMoh301sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_moh_301s', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_of_admission');
            $table->string('inpatient_no');
            $table->string('full_names');
            $table->integer('age');
            $table->string('sex');
            $table->string('sublocation');
            $table->string('village');
            $table->string('address');
            $table->binary('hiv_tested');
            $table->string('hiv_status');
            $table->string('nutrition');
            $table->string('diagnosis');
            $table->string('prescription_number');
            $table->date('date_of_discharge');
            $table->string('outcome');
            $table->string('referral');
            $table->string('remarks');
            $table->string('department');
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
        Schema::dropIfExists('clinical_moh_301s');
    }
}
