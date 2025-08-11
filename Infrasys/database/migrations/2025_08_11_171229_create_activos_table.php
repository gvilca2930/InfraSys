<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_patrimonial', 50)->unique();
            $table->enum('tipo_equipo', [
                'PC', 'LAPTOP', 'SERVIDOR', 'CELULAR', 'MONITOR', 'TECLADO', 'MOUSE', 'IMPRESORA', 'OTRO'
            ]);
            $table->string('marca', 100);
            $table->string('modelo', 150);
            $table->enum('area_asignada', [
                'TI', 'FINANZAS', 'RECURSOS_HUMANOS', 'LOGISTICA', 'OPERACIONES', 'GERENCIA', 'OTRO'
            ]);
            $table->string('numero_serie', 100)->unique();
            $table->string('imei', 20)->nullable();
            $table->string('mac_lan', 17)->nullable();
            $table->string('mac_wifi', 17)->nullable();
            $table->string('cpu', 200);
            $table->string('ram', 50);
            $table->string('tipo_disco', 50);
            $table->string('almacenamiento', 50);
            $table->date('fecha_ingreso');
            $table->date('fecha_baja')->nullable();
            $table->enum('estado_fisico', [
                'OPERATIVO', 'INOPERATIVO', 'PERDIDA'
            ]);
            $table->string('factura', 100);
            $table->decimal('precio_equipo', 10, 2);
            $table->text('observaciones')->nullable();
            $table->enum('estado_asignacion', [
                'DISPONIBLE', 'ASIGNADO', 'MANTENIMIENTO'
            ]);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activos');
    }
};
