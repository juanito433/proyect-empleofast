<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'description',
        'id_company',
        'publication_date',
        'type_jobs',
        'category',
        'salary',
        'image_url',

    ];


    public function company()
    {
    return $this->belongsTo(company::class, 'id_company');
    }

    public function applications()
    {
        return $this->hasMany(application::class, 'id_jobs');
    }
}
