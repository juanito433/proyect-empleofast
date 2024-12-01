<?php

namespace App\Http\Controllers;

use App\Models\application;
use App\Models\job;
use Illuminate\Http\Request;

class applicationController extends Controller
{
    public function store(Request $request, job $job)
    {
        // Obtén el candidato autenticado
        $candidate = auth()->user()->candidate; // Asume que el candidato está relacionado con el usuario autenticado

        // Verifica si el candidato ya aplicó al trabajo
        $existingApplication = application::where('id_jobs', $job->id)
            ->where('id_candidate', $candidate->id)
            ->first();

        if ($existingApplication) {
            return redirect()->back()->with('error', 'Ya te has postulado a esta oferta.');
        }

        // Crea la postulación
        application::create([
            'id_jobs' => $job->id,
            'id_candidate' => $candidate->id,
            'publication_date' => now(), // Fecha de postulación
            'status' => 'Pendiente',
        ]);

        return redirect()->back()->with('success', 'Postulación realizada exitosamente.');
    }
}
