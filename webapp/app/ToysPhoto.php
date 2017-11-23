<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToysPhoto extends Model
{
    protected $fillable = ['toy_id','images'];

    public function product()
    {
        return $this->belongsTo('App\Toys');
    }
}
