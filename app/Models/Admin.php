<?php

namespace App\Models;

use App\User;

class Admin extends User
{
    use Notifiable;

    protected $table = "users",
            $fillable = [
                'name', 'email', 'password','role'
            ],
            $hidden = [
                'password', 'remember_token',
            ];

}
