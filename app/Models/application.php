<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;

    protected $fillable = ['id_jobs', 'id_candidate', 'publication_date', 'status'];

    // Relación con el modelo Job
    public function job()
    {
        return $this->belongsTo(job::class, 'id_jobs');
    }

    // Relación con el modelo Candidate
    public function candidate()
    {
        return $this->belongsTo(candidate::class, 'id_candidate');
    }
}
