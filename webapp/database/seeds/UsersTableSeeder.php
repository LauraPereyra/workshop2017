<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user -> names      = "Christian Gabriel";
        $user -> lastname1  = "Roa";
        $user -> lastname2  = "Cardenas";
        $user -> email      = "chrisroacardenas@hotmail.com";
        $user -> password   = '$2y$10$Tlw25jSZCNadPie/npRXdObH4RqwNJFOE7ZN2i/iqOLZN5eA8nG4C';
        $user -> role       = "superadmin";
        $user -> phone      = "2222878";
        $user -> cellphone  = "70658408";
        $user -> birthday   = "1995-12-08";
        $user -> address    = "Av.asdlkjasdklj";
        $user -> sex        = "masculino";
        $user -> branch_id  = 1;
        $user ->save();

        $user = new User;
        $user -> names = "Maria Laura";
        $user -> lastname1 = "Pereyra";
        $user -> lastname2 = "Mamani";
        $user -> email = "laurapereyra2504@gmail.com";
        $user -> password = '$2y$10$Tlw25jSZCNadPie/npRXdObH4RqwNJFOE7ZN2i/iqOLZN5eA8nG4C';
        $user -> role = "superadmin";
        $user -> phone = "2222222";
        $user -> cellphone = "74567892";
        $user -> birthday = "1995-04-20";
        $user -> address = "Av.ghjghjghj";
        $user -> sex = "femenino";
        $user -> branch_id  = 1;
        $user ->save();

        $user = new User;
        $user -> names = "Joel Andy";
        $user -> lastname1 = "Rojas";
        $user -> lastname2 = "Valencia";
        $user -> email = "joel@gmail.com";
        $user -> password = '$2y$10$Tlw25jSZCNadPie/npRXdObH4RqwNJFOE7ZN2i/iqOLZN5eA8nG4C';
        $user -> role = "manager";
        $user -> phone = "2254222";
        $user -> cellphone = "68567892";
        $user -> birthday = "1994-08-25";
        $user -> address = "Av.ghjghjghj";
        $user -> sex = "masculino";
        $user -> branch_id  = 2;
        $user ->save();

        $user = new User;
        $user -> names = "Carlos Andres";
        $user -> lastname1 = "Martinez";
        $user -> lastname2 = "Cuellar";
        $user -> email = "carlos@gmail.com";
        $user -> password = '$2y$10$Tlw25jSZCNadPie/npRXdObH4RqwNJFOE7ZN2i/iqOLZN5eA8nG4C';
        $user -> role = "employee";
        $user -> phone = "2227892";
        $user -> cellphone = "74405892";
        $user -> birthday = "1995-03-30";
        $user -> address = "Av.oyoyoykfhfgk";
        $user -> sex = "masculino";
        $user -> branch_id  = 3;
        $user ->save();


    }
}
