<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalBtusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_btus', function (Blueprint $table) {
            $table->increments('id');

            $table->string('patient_name');
            $table->string('ip_no');
            $table->string('sex');
            $table->integer('age');
            $table->string('ward');
            $table->string('bed');
            $table->string('reason_for_transfusion');
            $table->string('consultant_in_charge');
            $table->string('house_man');
            $table->string('patients_group');
            $table->string('rhesus');
            $table->string('hb');
            $table->date('date_of_previous_transfusion');
            $table->string('details_of_any_reaction');
            $table->string('degree_of_urgency');
            $table->string('number_of_pints');
            $table->binary('packaged');
            $table->dateTime('date_time_required');
            //to be completed by lab
            $table->string('name');
            $table->date('date');
            $table->date('date_received');
            $table->string('time');
            $table->string('time_am_pm');
            $table->string('signature');
            $table->string('blood_group');
            $table->string('rhesus1');
            $table->string('packed_no');
            $table->string('group');
            $table->date('expiry_date');
            $table->string('compatibility');
            $table->date('it');
            $table->string('details_of_transfusion');
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
        Schema::dropIfExists('clinical_btus');
    }
}
