<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;

class jobController extends Controller
{
    public function jobs()
    {
        $jobs = Job::with('company')->get(); // Carga la relación
        return view('app.index', compact('jobs'));
    }
}
