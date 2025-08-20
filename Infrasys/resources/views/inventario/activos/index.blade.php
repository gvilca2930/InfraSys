<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Inventario de Activos') }}
            </h2>

            {{-- Botón para agregar un nuevo activo --}}
            <a href="{{ route('inventario.activos.create') }}"
               class="px-4 py-2 text-center text-gray-500">
                + Agregar Activo
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6 overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 text-left">Código</th>
                            <th class="px-4 py-2 text-left">Tipo</th>
                            <th class="px-4 py-2 text-left">Marca</th>
                            <th class="px-4 py-2 text-left">Modelo</th>
                            <th class="px-4 py-2 text-left">Área</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($activos as $activo)
                            <tr>
                                <td class="px-4 py-2">{{ $activo->codigo_patrimonial }}</td>
                                <td class="px-4 py-2">{{ $activo->tipo_equipo }}</td>
                                <td class="px-4 py-2">{{ $activo->marca }}</td>
                                <td class="px-4 py-2">{{ $activo->modelo }}</td>
                                <td class="px-4 py-2">{{ $activo->area_asignada }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-2 text-center text-gray-500">
                                    No hay activos registrados.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
