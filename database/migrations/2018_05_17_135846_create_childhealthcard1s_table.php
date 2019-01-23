<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildhealthcard1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childhealthcard1s', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_given9')->nullable();
            $table->date('date_of_next_visit9')->nullable();
            $table->date('date_given10')->nullable();
            $table->date('date_of_next_visit10')->nullable();
            $table->text('present')->nullable();
            $table->text('date_checked')->nullable();
            $table->text('absent')->nullable();
            $table->date('date_redone')->nullable();
            $table->date('date_given')->nullable();
            $table->date('date_of_next_visit')->nullable();
            $table->date('date_given1')->nullable();
            $table->date('date_of_next_visit1')->nullable();
            $table->date('date_given2')->nullable();
            $table->date('date_of_next_visit2')->nullable();
            $table->date('date_given3')->nullable();
            $table->date('date_of_next_visit3')->nullable();
            $table->date('date_given4')->nullable();
            $table->date('date_of_next_visit4')->nullable();
            $table->date('date_given5')->nullable();
            $table->date('date_of_next_visit5')->nullable();
            $table->date('date_given6')->nullable();
            $table->date('date_of_next_visit6')->nullable();
            $table->date('date_given7')->nullable();
            $table->date('date_given8')->nullable();
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
        Schema::dropIfExists('childhealthcard1s');
    }
}
