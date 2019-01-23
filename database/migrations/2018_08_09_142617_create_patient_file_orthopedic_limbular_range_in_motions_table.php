<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileOrthopedicLimbularRangeInMotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_orthopedic_limbular_range_in_motions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('flexion_a')->nullable();
            $table->string('flexion_b')->nullable();
            $table->string('extension_a')->nullable();
            $table->string('extension_b')->nullable();
            $table->string('flexion_1_a')->nullable();
            $table->string('flexion_1_b')->nullable();
            $table->string('extension_1_a')->nullable();
            $table->string('extension_1_b')->nullable();
            $table->string('right_lateral_a')->nullable();
            $table->string('left_lateral_a')->nullable();
            $table->string('left_lateral_b')->nullable();
            $table->string('right_a')->nullable();
            $table->string('right_b')->nullable();
            $table->string('left_a')->nullable();
            $table->string('left_b')->nullable();
            $table->string('adams_sign_a')->nullable();
            $table->string('adams_sign_b')->nullable();
            $table->string('from_front_a')->nullable();
            $table->string('from_front_b')->nullable();
            $table->string('Dynamometer_grip_1a')->nullable();
            $table->string('Dynamometer_grip_1b')->nullable();
            $table->string('Dynamometer_grip_2a')->nullable();
            $table->string('Dynamometer_grip_2b')->nullable();
            $table->string('Dynamometer_grip_3a')->nullable();
            $table->string('Dynamometer_grip_3b')->nullable();
            $table->string('arms_1l')->nullable();
            $table->string('arms_1r')->nullable();
            $table->string('neck_1l')->nullable();
            $table->string('neck_1r')->nullable();
            $table->string('leg_1l')->nullable();
            $table->string('leg_1r')->nullable();
            $table->string('back_1l')->nullable();
            $table->string('back_1r')->nullable();
            $table->string('hypertensia')->nullable();
            $table->string('paresthia')->nullable();
            $table->string('positional')->nullable();
            $table->string('anesthia')->nullable();
            $table->string('hypesthesia')->nullable();
            $table->string('ROMBERG')->nullable();
            $table->string('finger_to_nose')->nullable();
            $table->string('toe_to_shin')->nullable();
            $table->string('finger_to_finger')->nullable();
            $table->string('kEMPS_r')->nullable();
            $table->string('kEMPS_l')->nullable();
            $table->string('TRENDELENBERG_r')->nullable();
            $table->string('TRENDELENBERG_l')->nullable()->nullable();
            $table->string('LEWINS_test_r')->nullable();
            $table->string('LEWINS_test_l')->nullable();
            $table->string('MINORS_SIGN_r')->nullable();
            $table->string('MINORS_SIGN_l')->nullable();
            $table->string('NORMAL_a')->nullable();
            $table->string('NORMAL_b')->nullable();
            $table->string('IMPAIRED_a')->nullable()->nullable();
            $table->string('IMPAIRED_b')->nullable()->nullable();
            $table->string('PAIN_a')->nullable();
            $table->string('PAIN_b')->nullable();
            $table->string('NEED_ASSISTANCE')->nullable();
            $table->string('WALK_TOE')->nullable();
            $table->string('HEEL_WALK_r')->nullable();
            $table->string('HEEL_WALK_l')->nullable();
            $table->string('TOE_WALK_r')->nullable();
            $table->string('TOE_WALK_l')->nullable();
            $table->string('BABY_WALK')->nullable();
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
        Schema::dropIfExists('patient_file_orthopedic_limbular_range_in_motions');
    }
}
