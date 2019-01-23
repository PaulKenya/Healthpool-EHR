<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FluidInOutChart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fluid_in_out_charts', function (Blueprint $table) {
            $table->increments('id');

            $table->date("date")->nullable();
            $table->integer("bed")->nullable();
            $table->integer("body_weight")->nullable();
            $table->integer("balance_yesterday")->nullable();
            $table->string("time")->nullable();
            $table->integer("systole_bp")->nullable();
            $table->string("type_of_fluid")->nullable();
            $table->integer("litra_vol")->nullable();
            $table->integer("oral")->nullable();
            $table->string("noso_gastric_suction")->nullable();
            $table->string("vomituous")->nullable();
            $table->string("dried_stool_fistula")->nullable();
            $table->integer("urine_amount")->nullable();
            $table->integer("urine_sp_gr")->nullable();
            $table->string("instruction_for_intravenous_fluid_today")->nullable();
            $table->string("instruction_for_oral_fluids_today")->nullable();
            $table->string("instruction_for_noso_gastric_suction_today")->nullable();
            $table->integer("urine")->nullable();
            $table->string("drain_stool_or_fistula")->nullable();
            $table->string("vomitous")->nullable();
            $table->string("naso_gastric_suction")->nullable();
            $table->string("insensible_loss")->nullable();
            $table->integer("total_output")->nullable();
            $table->integer("intake")->nullable();
            $table->string("intravenous")->nullable();
            $table->integer("oral_")->nullable();
            $table->string("total_intake")->nullable();
            $table->integer("balance_today")->nullable();

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
        Schema::dropIfExists('fluid_in_out_charts');
    }
}
