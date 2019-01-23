<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileInitialNursingAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_initial_nursing_assessments', function (Blueprint $table) {
            $table->increments('id');


            $table->string('bio_ward')->nullable();
            $table->date('bio_date')->nullable();
            $table->integer('bio_bed_number')->nullable();
            $table->string('bio_sex')->nullable();
            $table->string('pain')->nullable();
            $table->string('pain_b')->nullable();
            $table->string('mood')->nullable();

            $table->string('sent_satisfied')->nullable();
            $table->string('sent_dissatisfied')->nullable();
            $table->string('neutral')->nullable();
            $table->string('very_dissatisfied')->nullable();
            $table->string('very_very_dissatisfied')->nullable();
            $table->string('intervention')->nullable();
            $table->string('present_illness')->nullable();
            $table->string('past_medical_history')->nullable();
            $table->string('family_social_history')->nullable();
            $table->string('information')->nullable();


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
        Schema::dropIfExists('patient_file_initial_nursing_assessments');
    }
}
