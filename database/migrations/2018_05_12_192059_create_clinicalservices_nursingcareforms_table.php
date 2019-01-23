<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesNursingcareformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_nursingcareforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bio_patient_name');
            $table->string('bio_ip_no');
            $table->string('bio_date');
            $table->string('bio_age');
            $table->string('bio_ward');
            $table->string('bio_bed_number');
            $table->string('bio_sex');
            $table->string('name');
            $table->string('date');
            $table->string('diagnosis');
            $table->dateTime('time');
            $table->string('assessment');
            $table->string('nursing_diagnosis');
            $table->string('expected_outcome');
            $table->string('implementation');
            $table->string('rationale');
            $table->string('evaluation');
            $table->string('signature');
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
        Schema::dropIfExists('clinicalservices_nursingcareforms');
    }
}
