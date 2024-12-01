<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['id_jobs', 'id_candidate', 'publication_date', 'status'];
=======
    protected $fillable = [
        'id_jobs',
        'id_candidate',
        'message',
        'resume_path',
        'status',
    ];
>>>>>>> 172a635fbbbb63b06f4dd8e1e3d80d0e1dbcbb0e

    // Relación con el modelo Job
  /*   public function job()
    {
<<<<<<< HEAD
        return $this->belongsTo(job::class, 'id_jobs');
    }

    // Relación con el modelo Candidate
    public function candidate()
    {
        return $this->belongsTo(candidate::class, 'id_candidate');
=======
        return $this->belongsTo(Job::class, 'id_jobs', 'id');
    }


    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'id_candidate', 'id');
<<<<<<< HEAD
    } */

    public function job()
{
    return $this->belongsTo(job::class, 'id_jobs');
}

public function candidate()
{
    return $this->belongsTo(candidate::class, 'id_candidate');
}

=======
>>>>>>> 172a635fbbbb63b06f4dd8e1e3d80d0e1dbcbb0e
    }
>>>>>>> b195b62daa975304ca13c6305bc7844394ab4021
}
