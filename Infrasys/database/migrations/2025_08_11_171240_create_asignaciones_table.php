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
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->id();
            // FK a usuario_inventarios.dni
            $table->string('usuario_dni', 8);
            $table->foreign('usuario_dni')->references('dni')->on('usuario_inventarios')->onDelete('cascade');

            // FK a activos.codigo_patrimonial
            $table->string('activo_codigo', 50);
            $table->foreign('activo_codigo')->references('codigo_patrimonial')->on('activos')->onDelete('cascade');

            $table->date('fecha_entrega');
            $table->date('fecha_devolucion')->nullable();

            $table->enum('estado_asignacion', ['VIGENTE', 'DEVUELTO', 'PERDIDO'])->index();

            // FK a users.id para responsables
            $table->unsignedBigInteger('responsable_entrega');
            $table->foreign('responsable_entrega')->references('id')->on('users');

            $table->unsignedBigInteger('responsable_recibe')->nullable();
            $table->foreign('responsable_recibe')->references('id')->on('users');

            $table->text('observaciones');
            $table->text('motivo_devolucion')->nullable();

            $table->string('created_by', 100);
            $table->index('fecha_entrega');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaciones');
    }
};
