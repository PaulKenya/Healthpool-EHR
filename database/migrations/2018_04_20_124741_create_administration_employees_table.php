<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrationEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administration_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('photo');
            $table->string('work_address');
            $table->string('position');
            $table->string('work_location');
            $table->string('work_email');
            $table->string('manager');
            $table->string('work_phone');
            $table->string('coach');
            $table->string('working_hours');
            $table->string('manager2');
            $table->string('employee');
            $table->string('collaborators');
            $table->string('colleagues');
            $table->string('periodic_appraisals');
            $table->string('nationality');
            $table->string('private_address');
            $table->string('id_no');
            $table->integer('pass_no');
            $table->string('bank_account_no');
            $table->string('gender');
            $table->date('d_o_b');
            $table->integer('visa_no');
            $table->integer('work_permit_no');
            $table->date('visa_expiry_date');
            $table->string('related_user');
            $table->string('badge_id');
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
        Schema::dropIfExists('administration_employees');
    }
}
