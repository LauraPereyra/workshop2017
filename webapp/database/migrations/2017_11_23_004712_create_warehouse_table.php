<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('matrix_house_id')->unsigned()->nullable();
            $table->foreign('matrix_house_id')->references('id')->on('matrix_houses');
            $table->integer('branch_id')->unsigned()->nullable();
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->string('address');
            $table->integer('capacity');
            $table->timestamps();
        });

        Schema::create('warehouse_toys', function (Blueprint $table){
            $table->increments('id');
            $table->integer('warehouse_id')->unsigned();
            $table->foreign('warehouse_id')->references('id')->on('warehouses');
            $table->integer('toy_id')->unsigned();
            $table->foreign('toy_id')->references('id')->on('toys');
            $table->integer('stock');
            $table->decimal('precio_compra', 10, 5);
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
        Schema::dropIfExists('warehouse_toys');
        Schema::dropIfExists('warehouses');
    }
}
