<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class companyController extends Controller
{
    public function empresa(){
        $companys = company::all();
        return view('datos.empresas', compact('companys'));
    }
}
