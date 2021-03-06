<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKardexDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kardex_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kardex_id')->unsigned();
            $table->foreign('kardex_id')->references('id')->on('kardexs');
            $table->date('date_kardex_detail');
            $table->string('reason')->nullable();
            $table->string('operation')->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('costo', 10, 5)->nullable();
            $table->decimal('amount', 10, 5)->nullable();
            $table->integer('stock_total')->nullable();
            $table->decimal('balance', 10, 5)->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kardex_details');
    }
}
