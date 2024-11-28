<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credenciales = $request->only('email', 'password');

        if (Auth::guard('company')->attempt($credenciales, $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect('empresas/');
        }

        // Redirige con un mensaje de error
        return back()->withErrors(['email' => 'Las credenciales incorrectas.'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::guard('company')->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect(url('/'));
    }
}
