<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['order_date', 'order_arrive', 'status', 'supplier_id', 'matrix_house_id'];
}
