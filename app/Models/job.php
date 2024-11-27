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
        'description',
        'id_company',
        'publication_date',
        'type_jobs',
        'category',

    ];


    public function company()
    {
    return $this->belongsTo(company::class, 'id_company');
    }
}
