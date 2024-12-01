<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Cambia el extendido


class company extends Authenticatable 
{
    use HasFactory;

    protected $fillable = [
        'name',
        'industry',
        'location',
        'telefono',
        'date_create',
        'valores',
        'description',
        'instagram',
        'facebook',
        'x',
        'site',
        'image_url',
        'email',
        'password',

    ];
    protected $hidden = [
        'password',
        'remember_token', // Agrega esto si usas el remember token
    ];
    public function jobs()
    {
        return $this->hasMany(Job::class); // Una empresa tiene muchos empleos
    }
    public function empleos()
    {
        return $this->hasMany(Job::class, 'id_company'); // Relación uno a muchos
    }
}
