<?php

namespace App\Http\Controllers;

use App\Models\application;
use App\Models\job;
use App\Notifications\ApplicationReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class applicationController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'id_jobs' => 'required|exists:jobs,id',
            'id_candidate' => 'required|exists:candidates,id',
            'message' => 'required|string',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Subir el archivo del currículum
        $resumePath = $request->file('resume')->store('resumes', 'public');

        // Crear la aplicación
        $application = Application::create([
            'id_jobs' => $validated['id_jobs'],
            'id_candidate' => $validated['id_candidate'],
            'message' => $validated['message'],
            'resume_path' => $resumePath,
            'status' => 'Pendiente', // Estado inicial de la aplicación
        ]);

        // Notificar a la empresa (opcional)
        if ($application->job->employer) {
            $application->job->employer->notify(new ApplicationReceived($application));
        }
        $exists = Application::where('id_jobs', $request->id_jobs)
            ->where('id_candidate', $request->id_candidate)
            ->exists();

        if ($exists) {
            return redirect()->back()->withErrors(['error' => 'Ya has aplicado a esta oferta de trabajo.']);
        }

        // Redirigir con éxito
        return redirect()->route('jobs.show', $validated['id_jobs'])
            ->with('success', 'Tu aplicación ha sido enviada exitosamente.');
    }
    public function pendientes(Request $request, $id)
    {
        // Filtrar trabajos según la ID de la compañía
        $jobs = Job::where('id_company', $id)->with('applications')->get();
        $company = Auth::guard('company')->user(); // Obtiene el candidato autenticado


        return view('admin.company.postualtions', compact('jobs', 'company'));
    }
}
