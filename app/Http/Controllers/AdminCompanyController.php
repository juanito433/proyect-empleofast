<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCompanyController extends Controller
{
    public function edit(Request $request)
    {
        $company = company::find($request->id);

        return view('admin.company.edit', compact('company'));
    }
    public function update(Request $request, $id)
    {
        // Validar los datos enviados
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'location' => 'required|string',
            'telefono' => 'required|numeric',
            'date_create' => 'required|date',
            'valores' => 'nullable|array', // Asegurar que es un array o null
            'valores.*' => 'nullable|string|max:255', // Validar cada valor del array
            'description' => 'required|string',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'x' => 'nullable|url',
            'site' => 'nullable|url',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Buscar la empresa
        $company = Company::findOrFail($id);

        // Procesar el campo "valores" (manejar valores vacíos o nulos)
        $valores = $validatedData['valores'] ?? []; // Usar un array vacío si no se envía "valores"
        $filteredValores = array_filter($valores, fn($valor) => !empty($valor)); // Eliminar valores vacíos

        // Actualizar la información
        $company->update([
            'name' => $validatedData['name'],
            'industry' => $validatedData['industry'],
            'location' => $validatedData['location'],
            'telefono' => $validatedData['telefono'],
            'date_create' => $validatedData['date_create'],
            'valores' => !empty($filteredValores) ? json_encode($filteredValores) : null, // Guardar como JSON o null
            'description' => $validatedData['description'],
            'facebook' => $validatedData['facebook'],
            'instagram' => $validatedData['instagram'],
            'x' => $validatedData['x'],
            'site' => $validatedData['site'],
        ]);

        // Manejo del archivo de imagen
        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('public/companies');
            $company->image_url = $path;
            $company->save(); // Guardar el nuevo path de la imagen
        }

        // Redirigir con un mensaje de éxito
        return redirect()->route('company.profile')->with('success', 'Perfil actualizado exitosamente.');
    }
}
