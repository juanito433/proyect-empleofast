<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class LoginCompanyController extends Controller
{
    public function register()
    {
        return view('empresa.registro.register_empresa');
    }
    public function saveregister(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'industry' => ['required', 'string'],
            'location' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:companies,email'], 
            'password' => ['required', 'string', 'min:6'], 
        ]);

        Company::create([
            'name' => $request->name,
            'industry' => $request->industry,
            'location' => $request->location,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Encriptar la contraseña
        ]);

        return redirect(url('empresas/'))->with('success', 'Registro exitoso.');
    }
}
