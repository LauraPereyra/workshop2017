<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $fillable = ['name_supplier', 'country', 'cellphone', 'cellphone2', 'phone', 'phone2', 'email', 'website', 'address_supplier'];
}
