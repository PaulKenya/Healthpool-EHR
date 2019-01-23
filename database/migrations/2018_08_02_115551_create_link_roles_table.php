<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('link_id')->references('id')->on('links');
            $table->integer('role_id')->references('id')->on('roles');
            $table->string('permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_roles');
    }
}
