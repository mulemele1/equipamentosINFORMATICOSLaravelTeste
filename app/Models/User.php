<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'usuarios'; // Nome da tabela no banco de dados

    protected $fillable = [
        'name', 'email', 'password', 'password_crip', 'usertype', 'ativo', 'telefone', 'profile_photo_path',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
