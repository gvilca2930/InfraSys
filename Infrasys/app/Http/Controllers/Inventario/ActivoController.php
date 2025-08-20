<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activo;

class ActivoController extends Controller
{
    // Listar todos los activos
    public function index()
    {
        $activos = Activo::all();
        return view('inventario.activos.index', compact('activos'));
    }

    // Mostrar formulario para crear un nuevo activo
    public function create()
    {
        return view('inventario.activos.create');
    }

    // Guardar un nuevo activo en la BD
    public function store(Request $request)
    {
        $request->validate([
            'codigo_patrimonial' => 'required|unique:activos,codigo_patrimonial',
            'tipo_equipo'        => 'required|string|max:100',
            'marca'              => 'nullable|string|max:100',
            'modelo'             => 'nullable|string|max:100',
            'area_asignada'      => 'nullable|string|max:100',
        ]);

        Activo::create($request->all());

        return redirect()
            ->route('inventario.activos')
            ->with('success', 'Activo agregado correctamente.');
    }
}