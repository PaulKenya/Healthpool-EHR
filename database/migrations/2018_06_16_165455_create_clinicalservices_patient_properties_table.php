<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesPatientPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_patient_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bio_bed_number')->nullable();
            $table->string('jewellery')->nullable();
            $table->string('weapon_declaration')->nullable();
            $table->string('necklace')->nullable();
            $table->string('model_type')->nullable();
            $table->string('ring')->nullable();
            $table->string('clothing')->nullable();
            $table->string('watch')->nullable();
            $table->string('belt')->nullable();
            $table->string('type_and_make')->nullable();
            $table->string('blouse_skirt')->nullable();
            $table->string('cash')->nullable();
            $table->string('coat_jacket')->nullable();
            $table->string('shillings_kenya')->nullable();
            $table->string('dress_skirt')->nullable();
            $table->string('foreign_currency')->nullable();
            $table->string('dressing_gown')->nullable();
            $table->string('travellers_cheque')->nullable();
            $table->string('underwear')->nullable();
            $table->string('personal_documents')->nullable();
            $table->string('socks')->nullable();
            $table->string('id_card')->nullable();
            $table->string('shoes')->nullable();
            $table->string('passport')->nullable();
            $table->string('shirt_others')->nullable();
            $table->string('credit_cards')->nullable();
            $table->string('personal_items')->nullable();
            $table->string('license')->nullable();
            $table->string('glasses_contact')->nullable();
            $table->string('medical_insurance')->nullable();
            $table->string('hearing_aid')->nullable();
            $table->string('left_right')->nullable();
            $table->string('model')->nullable();
            $table->string('assistive_devices')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('prothesis')->nullable();
            $table->string('vehicle_deposit')->nullable();
            $table->string('others')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('denture')->nullable();
            $table->string('model2')->nullable();
            $table->string('partials')->nullable();
            $table->string('color')->nullable();
            $table->string('uper_lower')->nullable();
            $table->string('electronics')->nullable();
            $table->string('miscellaneous')->nullable();
            $table->string('radio')->nullable();
            $table->string('laptop')->nullable();
            $table->string('walkman')->nullable();
            $table->string('calculator')->nullable();
            $table->string('camera_video')->nullable();
            $table->string('names')->nullable();
            $table->string('signature_a')->nullable();
            $table->date('date_b')->nullable();
            $table->string('valuables_to_safe')->nullable();
            $table->string('taken_by_name')->nullable();
            $table->string('signature')->nullable();
            $table->string('cut_served')->nullable();
            $table->string('soilage')->nullable();
            $table->string('taken_by_security_police')->nullable();
            $table->string('signatures')->nullable();
            $table->date('date_c')->nullable();
            $table->string('valuables_to_safe2')->nullable();
            $table->string('inventory_recorded_by')->nullable();
            $table->date('date_d')->nullable();
            $table->string('signature3')->nullable();
            $table->string('name_of_patient')->nullable();
            $table->string('ward')->nullable();
            $table->string('signature4')->nullable();
            $table->date('date_e')->nullable();

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
        Schema::dropIfExists('clinicalservices_patient_properties');
    }
}
