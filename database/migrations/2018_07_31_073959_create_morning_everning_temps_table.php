<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMorningEverningTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('morning_everning_temps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('temp')->nullable();
            //add to migrations
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
        Schema::dropIfExists('morning_everning_temps');
    }
}
