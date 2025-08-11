<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    public function index()
    {
        return view('inventario.asignaciones.index');
    }
}
