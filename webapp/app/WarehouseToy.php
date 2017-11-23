<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WarehouseToy extends Model
{
    protected $fillable = [
        'warehouse_id','toy_id', 'stock'
    ];
}
