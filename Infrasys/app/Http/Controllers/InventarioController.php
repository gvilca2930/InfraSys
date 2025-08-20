<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activo;

class InventarioController extends Controller
{
    public function index()
{
    $activos = Activo::all();
    return view('inventario.index', compact('activos'));
}
}
