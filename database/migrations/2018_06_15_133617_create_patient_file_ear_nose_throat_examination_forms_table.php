<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileEarNoseThroatExaminationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_ear_nose_throat_examination_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('grade');
            $table->string('ward');
            $table->date('date');
            $table->integer('age');
            $table->string('diagnosis');
            $table->string('examination_required');
            $table->string('symptoms_referrable');
            $table->string('nose');
            $table->string('sinusesr');
            $table->string('sinusesl');
            $table->string('pharynx');
            $table->string('larynx');
            $table->string('ears');
            $table->string('ad1');
            $table->string('ad2');
            $table->string('as1');
            $table->string('as2');
            $table->string('diagnosis_b');
            $table->string('treatment_and_recommendation');
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
        Schema::dropIfExists('patient_file_ear_nose_throat_examination_forms');
    }
}
