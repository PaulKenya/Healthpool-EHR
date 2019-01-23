<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalMoh406sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_moh_406s', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('pnc_no');
            $table->string('inpatient_no');
            $table->string('full_names');
            $table->string('age');
            $table->string('levels_of_education');
            $table->string('sublocation');
            $table->string('village');
            $table->string('date_of_delivery');
            $table->string('place_of_delivery');
            $table->string('state_of_baby');
            $table->string('temparature');
            $table->string('pulse');
            $table->integer('palor');
            $table->integer('breast_exam');
            $table->string('uterus');
            $table->string('pph');
            $table->integer('cs_site');
            $table->string('lochia');
            $table->string('episiotomy');
            $table->string('hiv_status');
            $table->binary('counseled_on_neonatal_care');
            $table->binary('counseled_on_neonatal_fp');
            $table->string('on_arvs');
            $table->string('cotrimoxazole');
            $table->string('screened_for_cancer');
            $table->string('other_condition');
            $table->string('remarks');



            $table->string('total_attendances');
            $table->string('total_number_counseled');
            $table->string('total_hiv_positive');
            $table->string('total_on_arvs_mothers');
            $table->string('total_on_arvs_infants');


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
        Schema::dropIfExists('clinical_moh_406s');
    }
}
