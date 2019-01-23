<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrationBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administration_billings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_person_responsible_for_bill')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('occupational')->nullable();
            $table->string('employer')->nullable();
            $table->string('employers_address')->nullable();
            $table->string('employers_phone_no')->nullable();
            $table->string('contributers_relationship_to_patient')->nullable();
            $table->string('primary_insurance')->nullable();
            $table->integer('deposit_paid')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('receipt_number')->nullable();
            $table->string('previous_account_balance')->nullable();
            $table->string('customer_type')->nullable();
            $table->string('patient_guardian_signature')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('administration_billings');
    }
}
