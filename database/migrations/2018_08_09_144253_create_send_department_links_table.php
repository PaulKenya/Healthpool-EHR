<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendDepartmentLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_department_links', function (Blueprint $table) {
            $table->increments('id');
            $table->text('links')->nullable();
            $table->text('department_id')->references('id')->on('departments');
            $table->integer('discharged')->nullable();
            $table->string('price')->nullable();
            $table->string('description')->nullable();
            $table->integer('is_paid')->nullable();
            $table->integer('seen')->nullable();
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
        Schema::dropIfExists('send_department_links');
    }
}
