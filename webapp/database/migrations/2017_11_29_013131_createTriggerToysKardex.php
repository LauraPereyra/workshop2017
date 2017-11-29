<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerToysKardex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //unprepared
        DB::raw(
        '
        CREATE OR REPLACE FUNCTION load() RETURNS TRIGGER AS $emp_audit$
        BEGIN
            INSERT INTO kardexs VALUES( NEW.id, 1);
            RETURN NULL;
        END;
        $emp_audit$ LANGUAGE plpgsql;
    
        CREATE TRIGGER toys_kardex
        AFTER INSERT ON toys
        FOR EACH ROW EXECUTE PROCEDURE load();
        
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::raw('DROP TRIGGER toys_kardex;');
    }
}
