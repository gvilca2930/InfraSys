<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsuarioInventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuario_inventarios')->insert([
            [
                'dni' => '12345678',
                'apellidos_nombres' => 'Perez Gomez Juan',
                'tipo_plla' => 'Planilla',
                'area' => 'RECURSOS HUMANOS',
                'cargo' => 'Asistente de RRHH',
                'fecha_inicio' => '2024-01-15',
                'fecha_cese' => null,
                'condicion' => 'Contratado',
                'celular' => '999888777',
                'fecha_nacimiento' => '1995-05-20',
                'edad' => 29,
                'sexo' => 'M',
                'estado_sistema' => 'ACTIVO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'dni' => '87654321',
                'apellidos_nombres' => 'Lopez Martinez Maria',
                'tipo_plla' => 'Planilla',
                'area' => 'CONTABILIDAD Y FINANZAS',
                'cargo' => 'Contadora Senior',
                'fecha_inicio' => '2023-03-10',
                'fecha_cese' => null,
                'condicion' => 'Indefinido',
                'celular' => '988777666',
                'fecha_nacimiento' => '1990-09-12',
                'edad' => 34,
                'sexo' => 'F',
                'estado_sistema' => 'ACTIVO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
