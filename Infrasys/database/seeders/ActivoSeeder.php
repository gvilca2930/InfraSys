<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activo;

class ActivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activo::create([
            'codigo_patrimonial' => 'IN-PC-2025-001',
            'tipo_equipo' => 'PC',
            'marca' => 'Dell',
            'modelo' => 'Optiplex 7090',
            'area_asignada' => 'TI',
            'numero_serie' => 'SN12345678',
            'imei' => null,
            'mac_lan' => '00:1A:2B:3C:4D:5E',
            'mac_wifi' => '11:22:33:44:55:66',
            'cpu' => 'Intel Core i7-11700',
            'ram' => '16GB',
            'tipo_disco' => 'SSD',
            'almacenamiento' => '512GB',
            'fecha_ingreso' => '2025-01-15',
            'fecha_baja' => null,
            'estado_fisico' => 'OPERATIVO',
            'factura' => 'F001-000123',
            'precio_equipo' => 3500.50,
            'observaciones' => 'Equipo asignado a TI para pruebas',
            'estado_asignacion' => 'ASIGNADO'
        ]);
    }
}
