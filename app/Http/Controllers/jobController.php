<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\job;
use Illuminate\Http\Request;

class jobController extends Controller
{
    public function jobs()
    {
        // Obtener los trabajos con la relación 'company'
        $jobs = Job::with('company')->get();

        // Obtener las categorías y tipos únicos
        $categories = Job::select('category')->distinct()->get();
        $types = Job::select('type_jobs')->distinct()->get();

        // Pasar las variables a la vista
        return view('app.index', compact('jobs', 'categories', 'types'));
    }


    public function create(Request $request)
    {
        $company = company::find($request->id);

        return view('admin.jobs.create', compact('company'));
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
