<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'industry',
        'location',
        'image_url',
        'email',
        'password',
    ];
    public function jobs()
    {
        return $this->hasMany(Job::class); // Una empresa tiene muchos empleos
    }
}
