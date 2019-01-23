<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesMorphinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_morphines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patients_name');
            $table->string('ip_number');
            $table->string('ward');
            $table->string('age');
            $table->date('date_morphine');
            $table->string('primary_doctor');
            $table->string('prescribed_by');
            $table->string('form_of_morphine_used');
            $table->string('strength_of_formulation');
            $table->string('tablet');
            $table->string('frequency_of_administration');
            $table->date('date');
//            $table->time('time');
            $table->time('time_given');
            $table->time('time_of_extra_doses');
            $table->string('given_by');
            $table->string('remarks');
//            $table->string('departments');
            //add to migrations
            $table->integer('administration_patient_informations_id')->references('id')->on('administration_patient_informations');
            $table->string('institution_id');
            $table->string('user_id');
            //the above three
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
        Schema::dropIfExists('clinicalservices_morphines');
    }
}
