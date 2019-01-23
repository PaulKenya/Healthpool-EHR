<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesLabrequestformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_labrequestforms', function (Blueprint $table) {
            $table->increments('id');

            $table->string('date')->nullable();
            $table->string('bio_date')->nullable();

            $table->string('bio_ward')->nullable();
            $table->string('bio_bed_number')->nullable();


            $table->string('cell')->nullable();
            $table->string('location')->nullable();

            $table->string('weight')->nullable();

            $table->string('clinicalnotes')->nullable();
            $table->string('refferingdoctor')->nullable();
            $table->string('branch')->nullable();
            $table->string('signature')->nullable();

            $table->string('technologists')->nullable();
            $table->string('time')->nullable();
            $table->string('timeofspecimen')->nullable();
            $table->string('accounts')->nullable();

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
        Schema::dropIfExists('clinicalservices_labrequestforms');
    }
}
