<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileOrthopedicPatientStandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_orthopedic_patient_standings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('well_nourished')->nullable();
            $table->string('diabiliated')->nullable();
            $table->string('fair')->nullable();
            $table->string('disfigured')->nullable();
            $table->string('poor')->nullable();
            $table->string('obese')->nullable();
            $table->string('head_tilt_l_n_r')->nullable();
            $table->string('rotation_l_n_r')->nullable();
            $table->string('shoulder_tilt_l_n_r')->nullable();
            $table->string('rotation_l_n_r_1')->nullable();
            $table->string('hip_tilt_l_n_r')->nullable();
            $table->string('rotation_l_n_r_2')->nullable();
            $table->string('biceps_l')->nullable();
            $table->string('biceps_r')->nullable();
            $table->string('triceps_l')->nullable();
            $table->string('triceps_r')->nullable();
            $table->string('radial_l')->nullable();
            $table->string('radial_r')->nullable();
            $table->string('patellar_l')->nullable();
            $table->string('patellar_r')->nullable();
            $table->string('achelles_l')->nullable();
            $table->string('achelles_r')->nullable();
            $table->string('dejerines_dejerines_l')->nullable();
            $table->string('dejerines_dejerines_r')->nullable();
            $table->string('Bechtew_l')->nullable();
            $table->string('Bechtew_r')->nullable();
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
        Schema::dropIfExists('patient_file_orthopedic_patient_standings');
    }
}
