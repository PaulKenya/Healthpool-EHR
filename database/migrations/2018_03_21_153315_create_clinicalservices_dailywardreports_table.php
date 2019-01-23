<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesDailywardreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_dailywardreports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('notifications_of_death');
            $table->string('name');
            $table->string('ward_depts');
            $table->string('age');
            $table->string('sex');
            $table->string('residence');
            $table->string('ip_op_no');
            $table->date('date_of_admission');
            $table->time('time');
            $table->string('diagnosis');
            $table->string('address');
            $table->string('name_&_address_of_hosp_referred_from');
            $table->string('next_of_kin');
            $table->string('relationships_designations');
            $table->string('signature_of_ward_nurse');
            $table->string('ocn_dcn_cnsignature');
            $table->string('can_dcn_cnsignature');
            $table->date('date');
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
        Schema::dropIfExists('clinicalservices_dailywardreports');
    }
}
