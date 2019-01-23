<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesAdultfeedingchartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_adultfeedingcharts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('op_ip_no');
            $table->string('name');
            $table->string('sex');
            $table->string('diagnostics_nutrition_interpretation');
            $table->string('cho');
            $table->string('fluid');
            $table->string('total_kcals');
            $table->time('time');
            $table->string('feed');
            $table->string('amount');
            $table->string('flow_rate');
            $table->string('comments_recommendations');
            $table->string('nutritionists_name');
            $table->string('sign');
            $table->date('date');
            $table->string('ward');
            $table->string('oncall');
            $table->string('children');
            $table->string('adults');
            $table->string('well_done');
            $table->string('patients_on_ngt');
            $table->string('description_of_item');
            $table->string('no_of_parents');
            $table->string('no_of_patient');
            $table->string('amount_required');
            $table->string('amount_issued');
            $table->string('remarks');
            $table->string('ordered_by');
            $table->string('signature');
            $table->string('patient_name');
            $table->date('doa');
            $table->date('dod');
            $table->string('bed');
            $table->string('ip/no');
            $table->string('age');
            $table->string('principle_diagnosis');
            $table->string('height');
            $table->string('weight');
            $table->string('bmi');
            $table->string('muac');
            $table->string('z_score');
            $table->string('others');
            $table->string('medication');
            $table->string('procedure');
            $table->string('prescribed_diet');
            $table->string('1patient');
            $table->string('etiology');
            $table->string('2patient');
            $table->string('sign_symptoms');
            $table->string('nutrition_prescription');
            $table->string('prot');
            $table->string('chos');
            $table->string('fat');
            $table->string('kcal');
            $table->string('others2');
            $table->string('route_of_admission');
            $table->string('other_interventions');
            $table->string('nutritionists');
            $table->string('sign2');
            $table->string('nutrition_officer');
            $table->string('signature2');
            $table->string('departments');

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
        Schema::dropIfExists('clinicalservices_adultfeedingcharts');
    }
}
