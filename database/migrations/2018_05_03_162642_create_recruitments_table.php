<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->increments('id');

            $table->string('subject');
            $table->string('applicants_name');
            $table->string('tags');
            $table->string('contact');
            $table->string('responsible');
            $table->string('email');
            $table->string('appreciation');
            $table->string('phone');
            $table->string('source');
            $table->string('mobile');
            $table->string('referred');
            $table->string('degree');
            $table->string('applied_job');
            $table->string('department');
            $table->string('expected_salary');
            $table->string('proposed_salary');
            $table->date('availability');
            $table->string('application_summary');


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
        Schema::dropIfExists('recruitments');
    }
}
