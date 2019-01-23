<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesEcgrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_ecgrequests', function (Blueprint $table) {
            $table->increments('id');

            $table->string('patient_name');
            $table->string('unit_number');
            $table->string('age');
            $table->string('sex');
            $table->string('ward_clinic');
            $table->string('bed');
            $table->string('previous_ecg');
            $table->string('report_sent_to');
            $table->string('medication');
            $table->string('digoxin');
            $table->string('relevant_history');
            $table->date('date');
            $table->string('signed');
            $table->string('printed');
            $table->string('department');

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
        Schema::dropIfExists('clinicalservices_ecgrequests');
    }
}
