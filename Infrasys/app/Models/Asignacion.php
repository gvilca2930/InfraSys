<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;
    protected $table = 'asignaciones';

    protected $fillable = [
        'usuario_dni',
        'activo_codigo',
        'fecha_entrega',
        'fecha_devolucion',
        'estado_asignacion',
        'responsable_entrega',
        'responsable_recibe',
        'observaciones',
        'motivo_devolucion',
        'created_by',
    ];

    // Relación con usuario_inventarios (usuario asignado)
    public function usuarioInventario()
    {
        return $this->belongsTo(UsuarioInventario::class, 'usuario_dni', 'dni');
    }

    // Relación con activos
    public function activo()
    {
        return $this->belongsTo(Activo::class, 'activo_codigo', 'codigo_patrimonial');
    }

    // Responsable que entrega (usuario Breeze)
    public function responsableEntrega()
    {
        return $this->belongsTo(User::class, 'responsable_entrega');
    }

    // Responsable que recibe (usuario Breeze)
    public function responsableRecibe()
    {
        return $this->belongsTo(User::class, 'responsable_recibe');
    }
}
