<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Functionloadtoys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::raw(
            '
        create or REPLACE FUNCTION load_toys() RETURNS TRIGGER AS $insertar$
        DECLARE BEGIN
            Insert INTO kardexs (toy_id, warehouse_id) VALUES (New.id, 1), (New.id, 2), (New.id, 3);
            RETURN NULL;
        END;
        $insertar$ LANGUAGE plpgsql;
        
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
