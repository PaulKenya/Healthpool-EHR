<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpomChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipom_charts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->string('dob')->nullable();
            $table->string('ward')->nullable();
            $table->string('bed')->nullable();
            $table->string('sex')->nullable();
            $table->string('time')->nullable();
            $table->string('gcs')->nullable();
            $table->string('bp')->nullable();
            $table->string('hr')->nullable();
            $table->string('rr')->nullable();
            $table->string('t')->nullable();
            $table->string('bleeding')->nullable();
            $table->string('feeding')->nullable();
            $table->string('pain')->nullable();
            $table->string('ivfs')->nullable();
            $table->string('medication')->nullable();

            $table->integer('administration_patient_informations_id')->references('id')->on('administration_patient_informations');
            $table->string('institution_id');
            $table->string('user_id');

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
        Schema::dropIfExists('ipom_charts');
    }
}
