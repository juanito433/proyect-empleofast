<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;

class jobController extends Controller
{
    public function jobs(){
        $jobs = job::all();
        return view('app.index', compact('jobs'));
    }
}
