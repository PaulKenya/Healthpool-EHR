<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileDietRequisitionSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_diet_requisition_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ward');
            $table->date('date');
            $table->string('On_call');
            $table->integer('children');
            $table->integer('adults');
            $table->integer('well_people');
            $table->integer('patients_on_ngt');
            $table->integer('regular_diet');
            $table->integer('low_salt_diet');
            $table->integer('diabetic_diet');
            $table->integer('low_fat_diet');
            $table->integer('renal_diet');
            $table->integer('soft_light_diet');
            $table->integer('high_protein_diet');
            $table->integer('toto_diet');
            $table->integer('cocoa_with_sugar');
            $table->integer('porridge_with_sugar');
            $table->integer('white_bread');
            $table->integer('specify_any_other');
            $table->integer('MilkpacketsFresh');
            $table->integer('mala');
            $table->integer('f_seventy_five');
            $table->integer('f_one_hundred');
            $table->integer('special_uji');
            $table->integer('special_soup');
            $table->integer('enriched_lactose_free_uji');
            $table->integer('uji_without_sugar');
            $table->integer('tea_without_sugar');
            $table->integer('brown_bread');
            $table->integer('fruits');
            $table->integer('Eggs_Boiled');
            $table->string('remarks');
            $table->string('ordered_by');
            $table->string('designation');
            $table->string('signature');
            $table->date('date1');
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
        Schema::dropIfExists('patient_file_diet_requisition_sheets');
    }
}
