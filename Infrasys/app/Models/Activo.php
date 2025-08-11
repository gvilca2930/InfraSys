<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_patrimonial',
        'tipo_equipo',
        'marca',
        'modelo',
        'area_asignada',
        'numero_serie',
        'imei',
        'mac_lan',
        'mac_wifi',
        'cpu',
        'ram',
        'tipo_disco',
        'almacenamiento',
        'fecha_ingreso',
        'fecha_baja',
        'estado_fisico',
        'factura',
        'precio_equipo',
        'observaciones',
        'estado_asignacion'
    ];
}
