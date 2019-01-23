<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntensiveCareUnitRespiratorySheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intensive_care_unit_respiratory_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date')->nullable();
            $table->string('dob')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('day_in_unit')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('pulse_time')->nullable();
            $table->string('bp_time')->nullable();
            $table->string('temperature_time')->nullable();
            $table->string('cvp_time')->nullable();
            $table->string('arterial_ph_time')->nullable();
            $table->string('co2_time')->nullable();
            $table->string('po2_time')->nullable();
            $table->string('blood_so2_time')->nullable();
            $table->string('gas_be_time')->nullable();
            $table->string('hco3_time')->nullable();
            $table->string('na_time')->nullable();
            $table->string('k_time')->nullable();
            $table->string('lab_tech_time')->nullable();
            $table->string('doctor_signs_time')->nullable();
            $table->string('respirator_time')->nullable();
            $table->string('pressure_time')->nullable();
            $table->string('rate_set_time')->nullable();
            $table->string('patient_time')->nullable();
            $table->string('mv_or_tv_actual_time')->nullable();
            $table->string('mv_or_tv_set_time')->nullable();
            $table->string('assist_control_time')->nullable();
            $table->string('o2_time')->nullable();
            $table->string('trach_size_time')->nullable();
            $table->string('nebulizer_time')->nullable();
            $table->string('endo_tube_size_time')->nullable();
            $table->string('cutt_deflates_time')->nullable();
            $table->string('five_min_time')->nullable();
            $table->string('physiotherapy_time')->nullable();
            $table->string('suction_time')->nullable();
            $table->string('sign_time')->nullable();
            $table->string('position_of_pt_time')->nullable();
            $table->string('weaning_time')->nullable();
            $table->string('spontaneous_breathing_time')->nullable();
            $table->string('remarks')->nullable();

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
        Schema::dropIfExists('intensive_care_unit_respiratory_sheets');
    }
}
