<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
//            CatalogSeeder::class,
            UsersTableSeeder::class,
            SupplierTableseeder::class,
            Matrix_houseTableSeeder::class,
            OrdersTableSeeder::class

        ]);
    }
}
