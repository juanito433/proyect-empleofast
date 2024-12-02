<?php

namespace App\Http\Controllers;

use App\Models\candidate;
use App\Models\company;
use App\Models\job;
use Illuminate\Http\Request;

class jobController extends Controller
{
    public function jobs(Request $request)
    {
        $jobs = Job::with('company')->get();
        $categories = Job::select('category')->distinct()->get();
        $types = Job::select('type_jobs')->distinct()->get();

        // Cargar el candidato solo si se pasa el ID
        $candidate = null;
        if ($request->id) {
            $candidate = Candidate::find($request->id);
        }

        return view('app.index', compact('jobs', 'categories', 'types', 'candidate'));
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

        return redirect(url('/empresas/admin/profile'))->with('success', 'Trabajo registrado con éxito.');
    }
    public function show($id)
    {
        // Obtener los empleos de la compañía usando el $id
        $company = company::findOrFail($id);
        $empleos = $company->empleos; // Suponiendo que tienes una relación con los empleos

        return view('admin.company.applications', compact('empleos', 'company'));
    }
    public function postulations($id)
    {
        $candidate = Candidate::findOrFail($id);
        $applications = $candidate->applications()->with('job')->get();

        return view('admin.candidate.applications', compact('applications', 'candidate'));
    }
}
