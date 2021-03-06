<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'names', 'lastname1', 'lastname2', 'email', 'password','role', 'phone', 'cellphone', 'birthday', 'address', 'sex'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roleType(){
        if($this->role == 'superadmin'){
            return 1;
        }elseif ($this->role == 'manager'){
            return 2;
        }elseif ($this->role == 'employee'){
            return 3;
        }
    }
}
