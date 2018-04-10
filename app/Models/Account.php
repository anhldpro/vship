<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    protected $table = "account";


    protected $fillable = [
        'id',
        'username',
        'password',
        'name',
        'email',
        'mobile',
        'telephone',
        'address',
        'contact_name',
        'avatar'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


}