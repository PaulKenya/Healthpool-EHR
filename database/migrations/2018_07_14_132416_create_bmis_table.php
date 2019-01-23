<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBmisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bmis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('bmi');
            $table->string('comment');
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
        Schema::dropIfExists('bmis');
    }
}
