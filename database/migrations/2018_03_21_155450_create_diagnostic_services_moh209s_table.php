<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticServicesMoh209sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_services_moh209s', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->integer('opd_no')->nullable();
            $table->integer('xray_no')->nullable();
            $table->string('full_names')->nullable();
            $table->integer('age_in_years')->nullable();
            $table->string('sex')->nullable();
            $table->string('sub_location')->nullable();
            $table->string('village_estate')->nullable();
            $table->string('address')->nullable();
            $table->string('xray_examination_type')->nullable();
            $table->string('referral')->nullable();
            $table->integer('amount_charged')->nullable();
            $table->string('remarks')->nullable();

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
        Schema::dropIfExists('diagnostic_services_moh209s');
    }
}
