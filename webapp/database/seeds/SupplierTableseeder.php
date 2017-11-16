<?php

use Illuminate\Database\Seeder;
use \App\Suppliers;

class SupplierTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = new Suppliers();
        $supplier -> name_supplier      = "Coca Cola";
        $supplier -> country            = "Bolivia";
        $supplier -> phone              = "2015487";
        $supplier -> phone2             = "2458961";
        $supplier -> cellphone          = "70540058";
        $supplier -> cellphone2         = "61248887";
        $supplier -> email              = "coca.cola@cc.com";
        $supplier -> website            = "www.coca-cola.com";
        $supplier -> address_supplier   = "Av.lhasdfklhsdf";
        $supplier -> save();

        $supplier = new Suppliers();
        $supplier -> name_supplier      = "Coca Cola2";
        $supplier -> country            = "Bolivia";
        $supplier -> phone              = "2015487";
        $supplier -> phone2             = "2458961";
        $supplier -> cellphone          = "70540058";
        $supplier -> cellphone2         = "61248887";
        $supplier -> email              = "coca.cola@cc.com";
        $supplier -> website            = "www.coca-cola.com";
        $supplier -> address_supplier   = "Av.lhasdfklhsdf";
        $supplier -> save();

        $supplier = new Suppliers();
        $supplier -> name_supplier      = "Coca Cola3";
        $supplier -> country            = "Bolivia";
        $supplier -> phone              = "2015487";
        $supplier -> phone2             = "2458961";
        $supplier -> cellphone          = "70540058";
        $supplier -> cellphone2         = "61248887";
        $supplier -> email              = "coca.cola@cc.com";
        $supplier -> website            = "www.coca-cola.com";
        $supplier -> address_supplier   = "Av.lhasdfklhsdf";
        $supplier -> save();

        $supplier = new Suppliers();
        $supplier -> name_supplier      = "Coca Cola4";
        $supplier -> country            = "Bolivia";
        $supplier -> phone              = "2015487";
        $supplier -> phone2             = "2458961";
        $supplier -> cellphone          = "70540058";
        $supplier -> cellphone2         = "61248887";
        $supplier -> email              = "coca.cola@cc.com";
        $supplier -> website            = "www.coca-cola.com";
        $supplier -> address_supplier   = "Av.lhasdfklhsdf";
        $supplier -> save();

    }
}
