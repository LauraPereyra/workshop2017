<?php

use Illuminate\Database\Seeder;
use App\WarehouseToy;

class WorehouseToySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $worehousetoy = new WarehouseToy;
        $worehousetoy -> warehouse_id   = 1;
        $worehousetoy -> toy_id         = 369;
        $worehousetoy -> stock          = 500;
        $worehousetoy -> precio_compra  = 50;
        $worehousetoy ->save();


        $worehousetoy = new WarehouseToy;
        $worehousetoy -> warehouse_id   = 2;
        $worehousetoy -> toy_id         = 369;
        $worehousetoy -> stock          = 0;
        $worehousetoy -> precio_compra  = 60;
        $worehousetoy ->save();
    }
}
