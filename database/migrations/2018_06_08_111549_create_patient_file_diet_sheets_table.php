<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileDietSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_diet_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('op_ip_no')->nullable();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->string('address')->nullable();
            $table->string('clinic_ward')->nullable();
            $table->date('date_of_admission')->nullable();
            $table->date('date_of_discharge')->nullable();
            $table->string('comments')->nullable();
            $table->string('mondayBREAKFAST')->nullable();
            $table->string('tuesdayBREAKFAST')->nullable();
            $table->string('wednesdayBREAKFAST')->nullable();
            $table->string('thursdayBREAKFAST')->nullable();
            $table->string('fridayBREAKFAST')->nullable();
            $table->string('saturdayBREAKFAST')->nullable();
            $table->string('sundayBREAKFAST')->nullable();
            $table->string('mondaySNACK')->nullable();
            $table->string('tuesdaySNACK')->nullable();
            $table->string('wednesdaySNACK')->nullable();
            $table->string('thursdaySNACK')->nullable();
            $table->string('fridaySNACK')->nullable();
            $table->string('saturdaySNACK')->nullable();
            $table->string('sundaySNACK')->nullable();
            $table->string('mondayLUNCH')->nullable();
            $table->string('tuesdayLUNCH')->nullable();
            $table->string('wednesdayLUNCH')->nullable();
            $table->string('thursdayLUNCH')->nullable();
            $table->string('fridayLUNCH')->nullable();
            $table->string('saturdayLUNCH')->nullable();
            $table->string('sundayLUNCH')->nullable();
            $table->string('mondaySNACK1')->nullable();
            $table->string('tuesdaySNACK1')->nullable();
            $table->string('wednesdaySNACK1')->nullable();
            $table->string('thursdaySNACK1')->nullable();
            $table->string('fridaySNACK1')->nullable();
            $table->string('saturdaySNACK1')->nullable();
            $table->string('sundaySNACK1')->nullable();
            $table->string('mondayDINNER')->nullable();
            $table->string('tuesdayDINNER')->nullable();
            $table->string('wednesdayDINNER')->nullable();
            $table->string('thursdayDINNER')->nullable();
            $table->string('fridayDINNER')->nullable();
            $table->string('saturdayDINNER')->nullable();
            $table->string('sundayDINNER')->nullable();
            $table->string('mondayBEDTIME')->nullable();
            $table->string('tuesdayBEDTIME')->nullable();
            $table->string('wednesdayBEDTIME')->nullable();
            $table->string('thursdayBEDTIME')->nullable();
            $table->string('fridayBEDTIME')->nullable();
            $table->string('saturdayBEDTIME')->nullable();
            $table->string('sundayBEDTIME')->nullable();

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
        Schema::dropIfExists('patient_file_diet_sheets');
    }
}
