<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TriggerwarehouseToysKardex extends Migration
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
            Create TRIGGER warehouse_toys_kardex AFTER INSERT
            ON warehouse_toys for EACH ROW
            EXECUTE PROCEDURE warehouse_toys_detail();
        
        ');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::raw('DROP TRIGGER warehouse_toys_kardex;');
    }
}
