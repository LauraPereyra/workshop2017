<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Supplierorder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplierorder', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Codigo');
            $table->string('item');
            $table->integer('Cantidad');
            $table->integer('Recibido');
            $table->integer('Pendiente');
            $table->dateTime('Fecha_Pedido');
            $table->dateTime('Fecha_limite_entrega');
            $table->string('proveedor');
            $table->dateTime('Fecha_autorizacion');
            $table->string('Autorizado_por');
            $table->dateTime('Fecha_de_envio');
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
        Schema::dropIfExists('supplierorder');
    }
}
