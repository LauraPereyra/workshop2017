<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $fillable = ['name_supplier', 'country', 'phone', 'address_supplier'];
}
