<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuario_inventarios', function (Blueprint $table) {
            $table->id();
            $table->string('dni',8)->unique();
            $table->string('apellidos_nombres',300);
            $table->string('tipo_plla',50);
            $table->enum('area',['RECURSOS HUMANOS',
                                                'DESARROLLO E INNOVACION',
                                                'CONTABILIDAD Y FINANZAS',
                                                'GERENCIA',
                                                'MANTENIMIENTO',
                                                'GESTION Y MEJORA CONTINUA',
                                                'RECURSOS CRITICOS',
                                                'OPERACIONES',
                                                'FLOTA',
                                                'SSOMA']);
            $table->string('cargo',150);
            $table->date('fecha_inicio');
            $table->date('fecha_cese')->nullable(); 
            $table->string('condicion',50);
            $table->string('celular',15);
            $table->date('fecha_nacimiento');
            $table->tinyInteger('edad')->nullable();
            $table->enum('sexo',['M','F']);
            $table->enum('estado_sistema',['ACTIVO','INACTIVO','CESADO'])
                                                            ->default('ACTIVO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_inventarios');
    }
};
