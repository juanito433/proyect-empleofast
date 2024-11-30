<?php

namespace App\Http\Controllers;

use App\Models\candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCandidateController extends Controller
{
    public function edit(Request $request)
    {
        $candidate = candidate::find($request->id);

        return view('admin.candidate.edit', compact('candidate'));
    }
    public function update(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'about_me' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'skills' => 'nullable|array',
            'skills.*' => 'string|max:255',
            'date_create' => 'required|date',
            'date_birth' => 'required|date',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'x' => 'nullable|url',
            'image_url' => 'required|image', // Se permite una imagen opcional
        ]);
    
        // Encontrar al candidato por el ID
        $candidate = Candidate::findOrFail($request->id);
    
        // Procesar la imagen si está presente
        $path = $candidate->image_url; // Establecer el path inicial (se mantiene el antiguo si no se sube una nueva imagen)
        if ($request->hasFile('image_url')) {
            // Eliminar la imagen anterior si existe
            if ($candidate->image_url && Storage::exists($candidate->image_url)) {
                Storage::delete($candidate->image_url); // Eliminar la imagen vieja
            }
            // Guardar la nueva imagen
            $path = $request->file('image_url')->store('public/candidates'); // Guardamos la nueva imagen en el directorio adecuado
        }
    
        // Filtrar habilidades vacías (para que no se guarden habilidades vacías)
        $skills = array_filter($request->skills, function ($skill) {
            return !empty($skill); // Eliminar habilidades vacías
        });
    
        // Actualizar los datos del candidato
        $candidate->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'about_me' => $request->about_me,
            'location' => $request->location,
            'skills' => $skills ? json_encode($skills) : null,  // Guardar las habilidades actualizadas, si hay habilidades
            'date_create' => $request->date_create,
            'date_birth' => $request->date_birth,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'x' => $request->x,
            'image_url' => $path, // El nuevo path de la imagen
        ]);
    
        // Opcional: Mostrar los datos para depurar
    
        // Redirigir al perfil del candidato con un mensaje de éxito
        return redirect()->route('candidate.profile')->with('success', 'Candidato actualizado correctamente');
    }
    
}
