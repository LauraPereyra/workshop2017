<?php

use Illuminate\Database\Seeder;
use App\Warehouse;

class WorehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $worehouse = new Warehouse;
        $worehouse -> name               = "Almacen Obrajes";
        $worehouse -> matrix_house_id    = null;
        $worehouse -> branch_id          = 1;
        $worehouse -> address            = "Av. kjahsdhklasd";
        $worehouse -> capacity           = 500;
        $worehouse ->save();

        $worehouse = new Warehouse;
        $worehouse -> name               = "Almacen Miraflores";
        $worehouse -> matrix_house_id    = null;
        $worehouse -> branch_id          = 2;
        $worehouse -> address            = "Av. asdasdasd";
        $worehouse -> capacity           = 300;
        $worehouse ->save();

    }
}
