<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = [
        'name','matrix_house_id', 'branch_id', 'address', 'capacity'
    ];
}
