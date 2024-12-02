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
        'image_url',
        'date_create',
        'date_birth',
        'facebook',
        'instagram',
        'x',
        'about_me',



    ];
    public function applications()
    {
        return $this->hasMany(application::class, 'id_candidate');
    }

    protected $hidden = [
        'password',
        'remember_token', // Agrega esto si usas el remember token
    ];
}
