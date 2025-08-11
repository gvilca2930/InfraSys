<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventario') }}
        </h2>
    </x-slot>

    <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{-- Menú tipo pestañas --}}
        <nav class="flex space-x-4 border-b border-gray-200">
            <a href="{{ route('inventario.activos') }}"
                class="py-2 px-3 border-b-2 font-medium text-sm
                    {{ request()->routeIs('inventario.activos') ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                Activos
            </a>

            <a href="{{ route('inventario.asignaciones') }}"
                class="py-2 px-3 border-b-2 font-medium text-sm
                    {{ request()->routeIs('inventario.asignaciones') ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                Asignaciones
            </a>
        </nav>
    </div>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __("Bienvenido al módulo de Inventario") }}
            </div>
        </div>
    </div>
</x-app-layout>
