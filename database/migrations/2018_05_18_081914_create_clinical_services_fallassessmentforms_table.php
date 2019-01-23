<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalServicesFallassessmentformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_services_fallassessmentforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bio_patient_name');
            $table->string('bio_ip_no');
            $table->date('bio_date')->nullable();
            $table->integer('bio_age')->nullable();
            $table->string('bio_ward');
            $table->string('bio_bed_number');
            $table->string('bio_sex');
            $table->string('risk')->nullable();
            $table->string('drug')->nullable();
            $table->integer('year')->nullable();
            $table->string('medication')->nullable();
            $table->string('status')->nullable();
            $table->string('urgency')->nullable();
            $table->string('present')->nullable();
            $table->string('mobility')->nullable();
            $table->string('condition')->nullable();
            $table->string('points');
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
        Schema::dropIfExists('clinical_services_fallassessmentforms');
    }
}
