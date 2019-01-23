<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticServicesBloodDonationUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_services_blood_donation_units', function (Blueprint $table) {
            $table->increments('id');

            $table->string('bio_bed_number')->nullable();
            $table->string('ward')->nullable();
            $table->string('requesting')->nullable();
            $table->string('date')->nullable();
            $table->string('comments')->nullable();

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
        Schema::dropIfExists('diagnostic_services_blood_donation_units');
    }
}
