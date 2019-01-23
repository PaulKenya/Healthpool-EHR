<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beds', function (Blueprint $table) {
            $table->increments('id');
                $table->string('administration_patient_informations_id')->references('id')->on('administration_patient_informations');
            $table->integer('ward_number')->references('ward_number')->on('wards');
                $table->string('bed_number')->nullable();
                $table->date('date_admitted')->nullable();
                $table->text('comments')->nullable();
                $table->integer('discharge');


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
        Schema::dropIfExists('beds');
    }
}
