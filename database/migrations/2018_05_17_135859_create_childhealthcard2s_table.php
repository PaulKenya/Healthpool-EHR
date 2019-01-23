<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildhealthcard2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childhealthcard2s', function (Blueprint $table) {
            $table->increments('id');
            $table->text('check6')->nullable();
            $table->date('date6')->nullable();
            $table->text('check12')->nullable();
            $table->date('date12')->nullable();
            $table->text('check18')->nullable();
            $table->date('date18')->nullable();
            $table->text('check24')->nullable();
            $table->date('date24')->nullable();
            $table->text('check30')->nullable();
            $table->date('date30')->nullable();
            $table->text('check36')->nullable();
            $table->date('date36')->nullable();
            $table->text('check42')->nullable();
            $table->date('date42')->nullable();
            $table->text('check48')->nullable();
            $table->date('date48')->nullable();
            $table->text('check54')->nullable();
            $table->date('date54')->nullable();
            $table->text('check60')->nullable();
            $table->date('date60')->nullable();
            $table->text('vaccine')->nullable();
            $table->date('date_given')->nullable();
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
        Schema::dropIfExists('childhealthcard2s');
    }
}
