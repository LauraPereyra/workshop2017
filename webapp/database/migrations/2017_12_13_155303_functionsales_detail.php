<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FunctionsalesDetail extends Migration
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
            create or REPLACE FUNCTION sales_detail() RETURNS TRIGGER AS $insertar$
            DECLARE
                warehouse_idd integer;
                kardex_idd integer;
                ultimo_costo decimal;
                stk_total integer;
                balance decimal;
            BEGIN
                SELECT warehouses.id into warehouse_idd
                from warehouses, branches, users
                WHERE branches.id = warehouses.branch_id
                and branches.id = users.branch_id
                and users.id = 1;
                /*poner aqui el id del usuario con la variable de session*/
                SELECT kardex_details.kardex_id into kardex_idd
                from kardex_details, kardexs
                WHERE kardexs.id = kardex_details.kardex_id
                and kardexs.toy_id = new.toy_id /*aca poner el toy_id de la sale_detail*/
                and kardexs.warehouse_id = warehouse_idd /*aca poner el almacen donde el usuario se encuentra*/
                LIMIT 1;
                SELECT kardex_details.costo into ultimo_costo
                from kardex_details
                WHERE kardex_details.kardex_id = kardex_idd
                and kardex_details.reason = \'total\'
                ORDER BY kardex_details.id DESC
                LIMIT 1;
                Insert INTO kardex_details (kardex_id, date_kardex_detail, reason, operation, quantity	 , costo	 	, amount					,stock_total  , balance)
                VALUES (					kardex_idd, current_date	,\'venta\', \'salida\' ,New.quantity, ultimo_costo , New.quantity*ultimo_costo, New.quantity,New.quantity*ultimo_costo);
                SELECT kardex_details.stock_total into stk_total
                FROM kardex_details, kardexs
                where kardex_details.reason = \'total\'
                and kardexs.toy_id = new.toy_id
                and kardexs.warehouse_id = warehouse_idd
                and kardexs.id = kardex_details.kardex_id
                ORDER BY kardex_details.id DESC
                LIMIT 1;
                SELECT kardex_details.balance into balance
                FROM kardex_details, kardexs
                where kardex_details.reason = \'total\'
                and kardexs.toy_id = new.toy_id
                and kardexs.warehouse_id = warehouse_idd
                and kardexs.id = kardex_details.kardex_id
                ORDER BY kardex_details.id DESC
                LIMIT 1;
                Insert INTO kardex_details (kardex_id, date_kardex_detail, reason , operation, quantity	 	, costo			, amount					, stock_total				, balance)
                    VALUES (				kardex_idd, current_date	, \'total\', \' \'		, New.quantity , ultimo_costo , New.quantity*ultimo_costo , stk_total-New.quantity	  , (balance-(New.quantity*ultimo_costo)));
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
