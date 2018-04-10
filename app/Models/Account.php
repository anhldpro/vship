<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use Notifiable;

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
        'avatar',
        'acct_type'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


}
