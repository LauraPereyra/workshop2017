<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FunctionwarehouseToysDetail extends Migration
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
            create or REPLACE FUNCTION warehouse_toys_detail() RETURNS TRIGGER AS $insertar$
            DECLARE
                kardex_id integer;
                cantidad_entrante integer DEFAULT 0;
                costo_unitario decimal DEFAULT 0;
                importe decimal DEFAULT 0;
            BEGIN
                SELECT kardexs.id into kardex_id from kardexs, warehouse_toys
                WHERE kardexs.warehouse_id = new.warehouse_id
                and new.toy_id = kardexs.toy_id;
                Insert INTO kardex_details (kardex_id, date_kardex_detail, reason, operation, quantity, costo, amount,stock_total, balance)
                VALUES (kardex_id, current_date,\'compra\', \'entrada\',New.stock, (new.precio_compra/New.stock), new.precio_compra, New.stock,new.precio_compra);
                SELECT kardex_details.stock_total into cantidad_entrante
                from kardex_details, kardexs
                where kardex_details.reason = \'total\'
                and kardexs.toy_id = new.toy_id
                and kardexs.warehouse_id = new.warehouse_id
                and kardexs.id = kardex_details.kardex_id
                ORDER BY kardex_details.id DESC
                LIMIT 1;
                SELECT kardex_details.costo into costo_unitario
                from kardex_details, kardexs
                where kardex_details.reason = \'total\'
                and kardexs.toy_id = new.toy_id
                and kardexs.warehouse_id = new.warehouse_id
                and kardexs.id = kardex_details.kardex_id
                ORDER BY kardex_details.id DESC
                LIMIT 1;
                SELECT kardex_details.balance into importe
                from kardex_details, kardexs
                where kardex_details.reason = \'total\'
                and kardexs.toy_id = new.toy_id
                and kardexs.warehouse_id = new.warehouse_id
                and kardexs.id = kardex_details.kardex_id
                ORDER BY kardex_details.id DESC
                LIMIT 1; 
                Insert INTO kardex_details (kardex_id, date_kardex_detail, reason, operation , quantity	 , costo														, amount		  	, stock_total					, balance)
                VALUES (					kardex_id, current_date		,\'total\', \' \'		, New.stock , ((new.precio_compra+importe)/(New.stock+cantidad_entrante)) , new.precio_compra , New.stock+cantidad_entrante	 , new.precio_compra+importe);
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
