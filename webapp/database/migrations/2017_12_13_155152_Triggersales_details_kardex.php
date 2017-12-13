<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TriggersalesDetailsKardex extends Migration
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
            Create TRIGGER sales_details_kardex AFTER INSERT
            ON sales_details for EACH ROW
            EXECUTE PROCEDURE sales_detail();

        ');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::raw('DROP TRIGGER sales_details_kardex;');
    }
}
