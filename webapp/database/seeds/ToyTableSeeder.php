<?php

use Illuminate\Database\Seeder;
use App\Toys;

class ToyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toy = new Toys;
        $toy -> idtoy = 3;
        $toy -> name = "Carrito";
        $toy -> description = "asdasdasd";
        $toy -> image = "notfoto.jpg";
        $toy -> price = 20;
        $toy ->save();

        $toy = new Toys;
        $toy -> idtoy = 10;
        $toy -> name = "barbie";
        $toy -> description = "asdasdasd";
        $toy -> image = "notfoto.jpg";
        $toy -> price = 30;
        $toy ->save();

    }
}
