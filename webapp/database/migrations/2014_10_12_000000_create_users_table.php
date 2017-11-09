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
            $table->string('names');
            $table->string('lastname1');
            $table->string('lastname2');
            $table->string('email')->unique();
            $table->string('password',60);
            $table->enum('role', ['superadmin','employee','manager'])->default('employee');
            $table->string('phone');
            $table->string('cellphone');
            $table->date('birthday');
            $table->string('address');
            $table->enum('sex',['masculino','femenino'])->default('masculino');
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
