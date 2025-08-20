<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Nuevo Activo') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-stone-200 rounded-xl shadow-sm p-6">

                {{-- Mensajes de validación --}}
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-100 text-red-700 rounded-lg">
                        <ul class="list-disc list-inside text-sm space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Formulario --}}
                <form action="{{ route('inventario.activos.store') }}" method="POST">
                    @csrf

                    {{-- Grid responsivo: 1 columna en móvil, 2 en tablet, 4 en desktop --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">

                        {{-- Fila 1 --}}
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">
                                Código Patrimonial <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="codigo_patrimonial" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200" 
                                   required>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">
                                Tipo de Equipo <span class="text-red-500">*</span>
                            </label>
                            <select name="tipo_equipo" 
                                    class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                           focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                           transition-all duration-200" 
                                    required>
                                <option value="">-- Seleccionar --</option>
                                <option value="PC">PC</option>
                                <option value="LAPTOP">LAPTOP</option>
                                <option value="SERVIDOR">SERVIDOR</option>
                                <option value="CELULAR">CELULAR</option>
                                <option value="MONITOR">MONITOR</option>
                                <option value="TECLADO">TECLADO</option>
                                <option value="MOUSE">MOUSE</option>
                                <option value="IMPRESORA">IMPRESORA</option>
                                <option value="OTRO">OTRO</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">Marca</label>
                            <input type="text" name="marca" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">Modelo</label>
                            <input type="text" name="modelo" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        {{-- Fila 2 --}}
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">Área Asignada</label>
                            <input type="text" name="area_asignada" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">Número de Serie</label>
                            <input type="text" name="numero_serie" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">IMEI</label>
                            <input type="text" name="imei" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">MAC LAN</label>
                            <input type="text" name="mac_lan" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        {{-- Fila 3 --}}
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">MAC WiFi</label>
                            <input type="text" name="mac_wifi" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">CPU</label>
                            <input type="text" name="cpu" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">RAM</label>
                            <input type="text" name="ram" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">Tipo de Disco</label>
                            <input type="text" name="tipo_disco" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        {{-- Fila 4 --}}
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">Almacenamiento</label>
                            <input type="text" name="almacenamiento" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">Fecha de Ingreso</label>
                            <input type="date" name="fecha_ingreso" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">Fecha de Baja</label>
                            <input type="date" name="fecha_baja" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">Estado Físico</label>
                            <select name="estado_fisico" 
                                    class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                           focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                           transition-all duration-200">
                                <option value="">-- Seleccionar --</option>
                                <option value="OPERATIVO">OPERATIVO</option>
                                <option value="INOPERATIVO">INOPERATIVO</option>
                                <option value="PERDIDA">PERDIDA</option>
                            </select>
                        </div>

                        {{-- Fila 5 --}}
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">Factura</label>
                            <input type="text" name="factura" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">Precio del Equipo</label>
                            <input type="number" step="0.01" name="precio_equipo" 
                                   class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                          transition-all duration-200">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-stone-800">Estado de Asignación</label>
                            <select name="estado_asignacion" 
                                    class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                           focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                           transition-all duration-200">
                                <option value="">-- Seleccionar --</option>
                                <option value="ASIGNADO">ASIGNADO</option>
                                <option value="DISPONIBLE">DISPONIBLE</option>
                                <option value="MANTENIMIENTO">MANTENIMIENTO</option>
                            </select>
                        </div>

                        {{-- Campo vacío para completar la fila de 4 columnas --}}
                        <div></div>

                    </div>

                    {{-- Campo de observaciones que ocupa todo el ancho --}}
                    <div class="mt-6 space-y-2">
                        <label class="block text-sm font-semibold text-stone-800">Observaciones</label>
                        <textarea name="observaciones" rows="4" 
                                  class="w-full text-sm py-2.5 px-3 border border-stone-300 rounded-lg shadow-sm 
                                         focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
                                         transition-all duration-200 resize-vertical"
                                  placeholder="Ingrese observaciones adicionales..."></textarea>
                    </div>

                    {{-- Botones --}}
                    <div class="mt-8 flex flex-col sm:flex-row justify-end gap-3 sm:gap-4">
                        <a href="{{ route('inventario.activos') }}" 
                           class="px-6 py-2.5 bg-gray-500 hover:bg-gray-600 text-white rounded-lg font-semibold 
                                  text-center transition-colors duration-200 shadow-sm">
                            Cancelar
                        </a>
                        <button type="submit" 
                                class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold 
                                       transition-colors duration-200 shadow-sm">
                            Guardar Activo
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>