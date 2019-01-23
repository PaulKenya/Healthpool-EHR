<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreatechildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('createchildren', function (Blueprint $table) {
            $table->increments('id');
            $table->string('child_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('parity')->nullable();
            $table->string('weight')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('createchildren');
    }
}
