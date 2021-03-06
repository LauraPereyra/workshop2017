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
        Create TRIGGER toys_kardex AFTER INSERT
        ON toys for	EACH ROW
        EXECUTE PROCEDURE load_toys();
        
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
