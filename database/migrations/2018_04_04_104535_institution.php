<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Institution extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('registration_number')->unique();
            $table->string('avatar')->default('default-user.png');
            $table->string('cover')->default('default-cover.png');
            $table->string('telephone');
            $table->longText('type')->nullable();
            $table->string('keph_level')->nullable();
            $table->longText('facility_type')->nullable();
            $table->string('owner')->nullable();
            $table->longText('regulatory_body')->nullable();
            $table->string('bed_capacity')->nullable();
            $table->string('branches')->nullable();
            $table->longText('working_days')->nullable();
            $table->longText('brief_description_of_services')->nullable();
            $table->longText('insurance')->nullable();
            $table->string('company_name')->nullable();
            $table->string('legal_name')->nullable();
            $table->string('cots')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('county')->nullable();
            $table->string('address')->nullable();
            $table->string('sub_county')->nullable();
            $table->string('ward')->nullable();
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
        Schema::dropIfExists('institutions');
    }
}
