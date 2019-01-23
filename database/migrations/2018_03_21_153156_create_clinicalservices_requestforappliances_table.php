<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesRequestforappliancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_requestforappliances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_patient');
            $table->string('unit_no');
            $table->date('date');
            $table->date('DOB');
            $table->string('age');
            $table->string('gender');
            $table->string('referred_from');
            $table->string('bed_no');
            $table->string('previous_no');
            $table->string('current_medication');
            $table->string('reasons_for_referral');
            $table->string('urgency');
            $table->string('name');
            $table->string('designation');
            $table->string('signature');
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
        Schema::dropIfExists('clinicalservices_requestforappliances');
    }
}
