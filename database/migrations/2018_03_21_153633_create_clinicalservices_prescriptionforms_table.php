<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesPrescriptionformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_prescriptionforms', function (Blueprint $table) {
            $table->increments('id');


            $table->string('bio_ward')->nullable();
            $table->string('bio_bed_number')->nullable();

            $table->date('date')->nullable();
            $table->date('bio_date')->nullable();


            $table->string('other_names')->nullable();

            $table->string('allergies')->nullable();
            $table->string('weight')->nullable();
            $table->string('report')->nullable();
            $table->string('substitute')->nullable();
            $table->string('dont_substitute')->nullable();
            $table->string('doctors_name')->nullable();
            $table->time('time')->nullable();
            $table->string('signature')->nullable();
            $table->string('branch')->nullable();

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
        Schema::dropIfExists('clinicalservices_prescriptionforms');
    }
}
