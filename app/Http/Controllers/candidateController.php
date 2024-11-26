<?php

namespace App\Http\Controllers;

use App\Models\candidate;
use Illuminate\Http\Request;

class candidateController extends Controller
{
    public function candidatos(){
        $candidates = candidate::all();
        return view('datos.candidato', compact('candidates'));
    }
}
