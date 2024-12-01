<?php

namespace App\Http\Controllers;

use App\Models\application;
use App\Models\job;
use App\Notifications\ApplicationReceived;
use Illuminate\Http\Request;

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
        if (!$resumePath) {
            return redirect()->back()->withErrors(['resume' => 'Error al subir el archivo. Intente de nuevo.']);
        }

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

        // Redirigir con éxito
        return redirect()->route('jobs.show', $validated['id_jobs'])
            ->with('success', 'Tu aplicación ha sido enviada exitosamente.');
    }
}
