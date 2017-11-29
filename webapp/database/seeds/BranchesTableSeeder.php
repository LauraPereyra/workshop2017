<?php

use Illuminate\Database\Seeder;
use App\Branch;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branch = new Branch;
        $branch -> nit        = "6549871";
        $branch -> name       = "Sucursal Obrajes";
        $branch -> address    = "Av. asdljhasdlkj";
        $branch -> telephone  = "2165487";
        $branch ->save();

        $branch = new Branch;
        $branch -> nit        = "6549765";
        $branch -> name       = "Sucursal miraflores";
        $branch -> address    = "Av. asdhgjjjh";
        $branch -> telephone  = "5123549";
        $branch ->save();

        $branch = new Branch;
        $branch -> nit        = "6521548";
        $branch -> name       = "Sucursal Achumani";
        $branch -> address    = "Av. achuaslkjasdljkas";
        $branch -> telephone  = "2223549";
        $branch ->save();
    }
}
