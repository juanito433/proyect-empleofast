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

        $company = Company::create([
            'name' => $request->name,
            'industry' => $request->industry,
            'location' => $request->location,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Encriptar la contraseña
        ]);

        Auth::guard('company')->login($company); // Autenticar automáticamente
        return redirect('empresas/admin/profile')->with('success', 'Registro y autenticación exitosos.');
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
            return redirect()->intended('empresas/admin/profile'); // Redirige a la URL que intentaron acceder
        }

        return back()->withErrors(['email' => 'Las credenciales incorrectas.'])->withInput();
    }

    public function profile()
    {
        $company = Auth::guard('company')->user(); // Obtiene el candidato autenticado
        return view('admin.company.profile', compact('company'));
    }
    public function logout(Request $request)
    {
        Auth::guard('company')->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect(url('/'));
    }
}
