<?php

namespace App\Http\Controllers;

use App\Models\candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
            'email' => ['required', 'email', 'unique:candidates,email'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        $candidate = candidate::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'skills' => $request->skills,
            'location' => $request->location,
            'password' => bcrypt($request->password),
        ]);

        // Autenticar automáticamente al candidato
        Auth::guard('candidate')->login($candidate);

        return redirect('candidatos/perfil')->with('success', 'Registro exitoso y autenticado.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credenciales = $request->only('email', 'password');

        if (Auth::guard('candidate')->attempt($credenciales, $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('candidatos/perfil'); // Redirige a la URL protegida o al perfil
        }

        return back()->withErrors(['email' => 'Las credenciales incorrectas.'])->withInput();
    }
    public function profile()
    {
        $candidate = Auth::guard('candidate')->user(); // Obtener el candidato autenticado
        return view('admin.candidate.profile', compact('candidate')); // Pasar datos a la vista
    }


    public function logouts(Request $request)
    {
        Auth::guard('candidate')->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect(url('/'));
    }
}
