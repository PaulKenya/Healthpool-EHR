<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileOrthopeadicClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_orthopeadic_clinics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('compalints')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('temp')->nullable();
            $table->string('pulse_rate')->nullable();
            $table->string('resp_rate')->nullable();
            $table->string('major_hand_r_or_l')->nullable();
            $table->string('blood_pressure_lying')->nullable();
            $table->string('standing')->nullable();
            $table->string('diagnosis')->nullable();
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
        Schema::dropIfExists('patient_file_orthopeadic_clinics');
    }
}
