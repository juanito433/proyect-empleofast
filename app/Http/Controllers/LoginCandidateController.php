<?php

namespace App\Http\Controllers;

use App\Models\candidate;
use Illuminate\Http\Request;

class LoginCandidateController extends Controller
{
    public function register()
    {
        return view('candidato.registro.register_candidato');
    }
    public function saveregister(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:companies,email'],
            'password' => ['required', 'string', 'min:6'], 
        ]);

        candidate::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'skills' => $request->skills,
            'location' => $request->location,
            'password' => bcrypt($request->password), // Encriptar la contraseña
        ]);

        return redirect(url('candidatos/'))->with('success', 'Registro exitoso.');
    }
}
