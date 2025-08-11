<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AsignacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener los usuarios responsables de la tabla users por nombre
        $responsableEntrega = DB::table('users')->where('name', 'VILCA GUERRA GEORGE GREGORY')->first();
        $responsableRecibe = DB::table('users')->where('name', 'CARDENAS PACCO JONATHAN OSWALDO')->first();

        DB::table('asignaciones')->insert([
            [
                'usuario_dni' => '12345678', // de usuario_inventarios
                'activo_codigo' => 'IN-PC-2025-001', // de activos
                'fecha_entrega' => '2025-08-01',
                'fecha_devolucion' => null,
                'estado_asignacion' => 'VIGENTE',
                'responsable_entrega' => $responsableEntrega->id,
                'responsable_recibe' => $responsableRecibe->id,
                'observaciones' => 'Primera asignación para pruebas.',
                'motivo_devolucion' => null,
                'created_by' => $responsableEntrega->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'usuario_dni' => '87654321',
                'activo_codigo' => 'IN-PC-2025-001',
                'fecha_entrega' => '2025-08-05',
                'fecha_devolucion' => null,
                'estado_asignacion' => 'VIGENTE',
                'responsable_entrega' => $responsableEntrega->id,
                'responsable_recibe' => null,
                'observaciones' => 'Segunda asignación sin responsable que recibe.',
                'motivo_devolucion' => null,
                'created_by' => $responsableEntrega->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
