<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildhealthcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childhealthcards', function (Blueprint $table) {
            $table->increments('id');
            $table->text('health_facility_name')->nullable();
            $table->text('service_delivery_point_no')->nullable();
            $table->text('childs_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('gestation_age')->nullable();
            $table->text('place_of_birth')->nullable();
            $table->text('home')->nullable();
            $table->text('health_facility')->nullable();
            $table->text('fathers_name')->nullable();
            $table->text('mothers_name')->nullable();
            $table->text('province')->nullable();
            $table->text('district')->nullable();
            $table->text('division')->nullable();
            $table->text('location')->nullable();
            $table->text('estate')->nullable();
            $table->text('po_box')->nullable();
            $table->text('town')->nullable();
            $table->integer('telephone')->nullable();
            $table->date('date')->nullable();
            $table->text('description')->nullable();
            $table->text('antigen')->nullable();
            $table->text('batch_no')->nullable();
            $table->date('manufacture_date')->nullable();
            $table->text('expiry_date')->nullable();
            $table->text('manufacturer_name')->nullable();
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
        Schema::dropIfExists('childhealthcards');
    }
}
