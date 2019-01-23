<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileOrthopedicTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_orthopedic_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adisons_l')->nullable();
            $table->string('adisons_r')->nullable();
            $table->string('wrights_l')->nullable();
            $table->string('wrights_r')->nullable();
            $table->string('allens_l')->nullable();
            $table->string('allens_r')->nullable();
            $table->string('bdens_test_l')->nullable();
            $table->string('bdens_test_r')->nullable();
            $table->string('cervical_compressions_l')->nullable();
            $table->string('cervical_compressions_r')->nullable();
            $table->string('jacksons_compressions_l')->nullable();
            $table->string('jacksons_compressions_r')->nullable();
            $table->string('rotation_l_3')->nullable();
            $table->string('rotation_r_3')->nullable();
            $table->string('cervical_decompressions_l')->nullable();
            $table->string('cervical_decompressions_r')->nullable();
            $table->string('George_test_l')->nullable();
            $table->string('George_test_r')->nullable();
            $table->string('arc_of_abduction_l')->nullable();
            $table->string('arc_of_abduction_r')->nullable();
            $table->string('deltoid_extension_l')->nullable();
            $table->string('deltoid_extension_r')->nullable();
            $table->string('wrist_wrist_l')->nullable();
            $table->string('wrist_wrist_r')->nullable();
            $table->string('wrist_flexion_l')->nullable();
            $table->string('wrist_flexion_r')->nullable();
            $table->string('finger_cud_l')->nullable();
            $table->string('finger_cud_r')->nullable();
            $table->string('finger_spread_l')->nullable();
            $table->string('finger_spread_r')->nullable();
            $table->string('cold_hands_l')->nullable();
            $table->string('cold_hands_r')->nullable();
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
        Schema::dropIfExists('patient_file_orthopedic_tests');
    }
}
