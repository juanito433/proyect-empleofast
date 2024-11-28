<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Cambia el extendido


class candidate extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'skills',
        'location',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token', // Agrega esto si usas el remember token
    ];
}
