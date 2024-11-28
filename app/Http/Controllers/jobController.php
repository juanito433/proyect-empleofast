<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\job;
use Illuminate\Http\Request;

class jobController extends Controller
{
    public function jobs()
    {
        $jobs = Job::with('company')->get(); // Carga la relación
        return view('app.index', compact('jobs'));
    }

    public function create()
    {
        $companies = company::all(); // Obtén todas las empresas
        return view('admin.jobs.create', compact('companies'));
    }
    public function publication(Request $request)
    {
        $validated = $request->validate([
            'id_company' => 'required|integer|exists:companies,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type_jobs' => 'required|string',
            'publication_date' => 'required|date',
            'category' => 'required|string',
            'salary' => 'required|numeric|min:0', // Valida salario como número positivo
            'image_url' => 'nullable|image', // Opcional, máximo 2MB
        ]);

        // Manejo de la imagen si es enviada
        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('jobs', 'public');
            $validated['image_url'] = $path;
        }

        Job::create($validated);

        return redirect(url('app/perfil'))->with('success', 'Trabajo registrado con éxito.');
    }
}
