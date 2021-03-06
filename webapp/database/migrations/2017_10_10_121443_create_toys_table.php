<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idtoy')->unique();
            $table->string('name');
            $table->string('description');
            $table->string('image')->default('notfoto.jpg');
            $table->decimal('price',10,2);
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
        Schema::dropIfExists('toys');
    }
}
