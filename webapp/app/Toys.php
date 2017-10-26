<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Toys extends Model
{
    protected $fillable = ['id','idtoy','name','price','description','image'];
    public $timestamps = true;


}
