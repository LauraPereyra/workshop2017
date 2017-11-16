<?php

use Illuminate\Database\Seeder;
use \App\Matrix_house;

class Matrix_houseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matrix = new Matrix_house;
        $matrix -> name_matrix_house    = "Casa Matrix 1";
        $matrix -> address_matrix_house = "Av.asdkjlasd";
        $matrix -> phone_matrix_house   = "2222487";
        $matrix->save();


        $matrix = new Matrix_house;
        $matrix -> name_matrix_house    = "Casa Matrix 2";
        $matrix -> address_matrix_house = "Av.fghfghfghfgh";
        $matrix -> phone_matrix_house   = "2220065";
        $matrix->save();
    }
}
