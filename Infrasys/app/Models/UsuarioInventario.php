<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioInventario extends Model
{
    use HasFactory;

    protected $table = 'usuario_inventarios';

    protected $fillable = [
        'dni',
        'apellidos_nombres',
        'tipo_plla',
        'area',
        'cargo',
        'fecha_inicio',
        'fecha_cese',
        'condicion',
        'celular',
        'fecha_nacimiento',
        'edad',
        'sexo',
        'estado_sistema'
    ];
}
