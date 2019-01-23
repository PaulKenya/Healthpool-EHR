<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesTreatmentsheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_treatmentsheets', function (Blueprint $table) {
            $table->increments('id');

            $table->string('consultant')->nullable();

            $table->date('date')->nullable();
            $table->string('drug')->nullable();
            $table->string('dose')->nullable();
            $table->string('rate')->nullable();
            $table->string('frequency_duration')->nullable();
            $table->string('name_signature')->nullable();
            $table->string('time')->nullable();

            $table->date('dates')->nullable();
            $table->string('drug_takens')->nullable();
            $table->string('doses')->nullable();
            $table->string('rates')->nullable();
            $table->string('frequency_durations')->nullable();
            $table->string('name_signatures')->nullable();

            $table->string('times')->nullable();
            //add to migrations
            $table->integer('administration_patient_informations_id')->references('id')->on('administration_patient_informations');
            $table->string('institution_id');
            $table->string('user_id');
            //the above three

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
        Schema::dropIfExists('clinicalservices_treatmentsheets');
    }
}
