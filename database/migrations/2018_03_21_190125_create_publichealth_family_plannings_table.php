<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublichealthFamilyPlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publichealth_family_plannings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ag');
            $table->string('ah');
            $table->string('ai');
            $table->integer('aj');
            $table->string('ak');
            $table->string('al');
            $table->string('am');
            $table->string('an');
            $table->integer('ao');
            $table->string('ap');
            $table->string('aq');
            $table->string('ar');
            $table->string('as');

            $table->string('au');
            $table->string('av');
            $table->string('aw');
            $table->string('ax');
            $table->string('ay');
            $table->string('az');
            $table->string('ba');
            $table->string('bb');
            $table->string('bc');
            $table->string('bd');
            $table->string('be');
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
        Schema::dropIfExists('publichealth_family_plannings');
    }
}
