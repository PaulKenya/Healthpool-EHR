<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticServicesUploadFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_services_upload_files', function (Blueprint $table)
        {

            $table->increments('id');
            $table->date('xray_date')->nullable();
            $table->string('x_ray_body_part')->nullable();
            $table->string('name_of_radiologist')->nullable();
            $table->string('radiologist_reg_no')->nullable();
            $table->string('report')->nullable();
            $table->string('xray_file')->nullable();

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
        Schema::dropIfExists('diagnostic_services_upload_files');
    }
}
