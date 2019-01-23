<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiabeticChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diabetic_charts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_of_recording')->nullable();
            $table->time('time_of_recording')->nullable();
            $table->string('sugar_testing')->nullable();
            $table->string('has_acetone')->nullable();
            $table->string('insulin_dose')->nullable();
            $table->string('oral_drug_dose')->nullable();
            $table->string('blood_sugar_dose')->nullable();
            $table->string('weight_dose')->nullable();
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
        Schema::dropIfExists('diabetic_charts');
    }
}
