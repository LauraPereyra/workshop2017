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
            $table->string('reason');
            $table->string('operation');
            $table->integer('quantity');
            $table->decimal('costo', 10, 5);
            $table->decimal('amount', 10, 5);
            $table->integer('stock_total');
            $table->decimal('balance', 10, 5);
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
