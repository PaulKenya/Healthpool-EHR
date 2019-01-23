<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileRequestForPalliativeCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_request_for_palliative_cares', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->string('name_of_patient')->nullable();
            $table->string('unit_no')->nullable();
            $table->string('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->date('date1')->nullable();
            $table->string('referred_from')->nullable();
            $table->string('bed_no')->nullable();
            $table->string('previous_treatment')->nullable();
            $table->string('current_medication')->nullable();
            $table->string('reason_for_referral')->nullable();
            $table->integer('administration_patient_informations_id')->references('id')->on('administration_patient_informations');
            $table->string('institution_id');
            $table->string('user_id');
            $table->string('urgent')->nullable();
            $table->string('referred_by1')->nullable();
            $table->string('designation1')->nullable();
            $table->string('signature1')->nullable();
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
        Schema::dropIfExists('patient_file_request_for_palliative_cares');
    }
}
