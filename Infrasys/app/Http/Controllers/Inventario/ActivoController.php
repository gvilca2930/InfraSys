<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivoController extends Controller
{
    public function index()
    {
        return view('inventario.activos.index');
    }
}
