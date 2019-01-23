<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousPregnanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_pregnancies', function (Blueprint $table) {
            $table->increments('id');
            $table->date('pregnancyorder')->nullable();
            $table->text('year')->nullable();
            $table->text('placeofdelivery')->nullable();
            $table->text('maturity')->nullable();
            $table->text('durationoflabour')->nullable();
            $table->text('typeofdelivery')->nullable();
            $table->text('weight')->nullable();
            $table->text('sex')->nullable();
            $table->text('outcome')->nullable();
            $table->text('perpetium')->nullable();
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
        Schema::dropIfExists('previous_pregnancies');
    }
}
