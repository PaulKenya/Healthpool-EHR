name->nullable()<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maternals', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name_of_institution')->nullable();
            $table->text('name_of_client')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->text('gravida')->nullable();
            $table->text('parity')->nullable();
            $table->text('height')->nullable();
            $table->text('lmp')->nullable();
            $table->text('edd')->nullable();
            $table->text('marital_status')->nullable();
            $table->text('education')->nullable();
            $table->text('address')->nullable();
            $table->text('telephone')->nullable();
            $table->text('occupation')->nullable();
            $table->text('next_of_kin')->nullable();
            $table->text('next_of_kin_address')->nullable();
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
        Schema::dropIfExists('maternals');
    }
}
