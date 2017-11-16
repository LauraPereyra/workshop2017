<?php

use Illuminate\Database\Seeder;
use \App\Orders;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new Orders;
        $order -> order_date = "2017-10-20" ;
        $order -> order_arrive = "2017-10-21" ;
        $order -> status = "pendiente" ;
        $order -> supplier_id = 1 ;
        $order -> matrix_house_id = 1 ;
        $order->save();

        $order = new Orders;
        $order -> order_date = "2017-10-25" ;
        $order -> order_arrive = "2017-10-29" ;
        $order -> status = "pendiente" ;
        $order -> supplier_id = 2 ;
        $order -> matrix_house_id = 1 ;
        $order->save();
    }
}
