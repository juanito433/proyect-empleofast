<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_jobs',
        'id_candidate',
        'message',
        'resume_path',
        'status',
    ];

    // Relación con el modelo Job
  /*   public function job()
    {
        return $this->belongsTo(Job::class, 'id_jobs', 'id');
    }


    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'id_candidate', 'id');
    } */

    public function job()
{
    return $this->belongsTo(job::class, 'id_jobs');
}

public function candidate()
{
    return $this->belongsTo(candidate::class, 'id_candidate');
}

}
