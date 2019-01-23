<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar')->default('default-user.png');
            $table->string('cover')->default('default-cover.png');
            $table->integer('telephone')->nullable();
            $table->integer('id_number')->unique();
            $table->string('role')->references('id')->on('roles');
            $table->boolean('account_active')->default(false);
            $table->boolean('is_admin')->default(false);
            $table->integer('institution_id')->references('id')->on('institutions');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
