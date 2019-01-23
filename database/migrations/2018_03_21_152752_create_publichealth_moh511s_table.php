<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublichealthMoh511sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publichealth_moh511s', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('cwc_no');
            $table->string('revisit');
            $table->string('full_names');
            $table->integer('age');
            $table->string('sex');
            $table->string('sub_location');
            $table->string('village');
            $table->string('address');
            $table->float('weight');
            $table->string('underweight');
            $table->string('danger_signs');
            $table->string('net_issued');
            $table->string('type_of_follow_up');
            $table->string('referral');
            $table->string('remarks');
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
        Schema::dropIfExists('publichealth_moh511s');
    }
}
