<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileNutritionCareProcessFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_nutrition_care_process_forms', function (Blueprint $table)
        {
            $table->increments('id');
            $table->date('doa')->nullable();
            $table->date('dod')->nullable();
            $table->string('ward')->nullable();
            $table->string('bed')->nullable();
            $table->string('principle_diagnosis')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('bmi')->nullable();
            $table->integer('muac')->nullable();
            $table->integer('z_score')->nullable();
            $table->string('others')->nullable();
            $table->string('physical_exam')->nullable();
            $table->string('medications')->nullable();
            $table->string('procedures')->nullable();
            $table->string('prescribed_diet')->nullable();
            $table->string('problem1')->nullable();
            $table->string('etiology')->nullable();
            $table->string('problem2')->nullable();
            $table->string('etiology1')->nullable();
            $table->string('signs_symptoms')->nullable();
            $table->string('nutrition_prescription')->nullable();
            $table->string('prescribed_diet1')->nullable();
            $table->integer('prot')->nullable();
            $table->integer('chos')->nullable();
            $table->integer('fat')->nullable();
            $table->integer('kcals')->nullable();
            $table->string('others1')->nullable();
            $table->string('route_of_administration')->nullable();
            $table->string('other_interventions')->nullable();
            $table->string('nutritionist')->nullable();
            $table->string('sign')->nullable();

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
        Schema::dropIfExists('patient_file_nutrition_care_process_forms');
    }
}
