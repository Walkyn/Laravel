@extends('layouts.admin')
@section('title', 'Productos')

@section('content')

    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Bienvenido a productos
            </h2>

            @if (session('mensaje'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
                    class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 transition-opacity duration-500 ease-in-out"
                    x-bind:style="{ opacity: show ? 1 : 0 }">
                    {{ session('mensaje') }}
                </div>
            @endif

            <div class="flex justify-between items-center mb-4">
                <!-- Título -->
                <h4 class="text-lg font-semibold text-gray-600 dark:text-gray-300">
                    Lista de productos
                </h4>

                <!-- Botón -->
                <button onclick="window.location.href='{{ route('productos.create') }}'"
                    class="px-8 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Registrar producto
                </button>
            </div>

            <!-- Tabla -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Producto</th>
                                <th class="px-4 py-3">Descripción</th>
                                <th class="px-4 py-3">Precio Costo</th>
                                <th class="px-4 py-3">Precio Venta</th>
                                <th class="px-4 py-3">Stock</th>
                                <th class="px-4 py-3">Acción</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($productos as $producto)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">{{ $producto->producto }}</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    {{ $producto->codigo }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $producto->descripcion }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ number_format($producto->precio_costo, 2) }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ number_format($producto->precio_venta, 2) }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <div class="flex items-center">
                                            <span
                                                class="text-xs px-2 py-1 font-semibold leading-tight 
                                {{ $producto->stock > 0 ? 'text-green-700 bg-green-100' : 'text-orange-700 bg-orange-100' }} 
                                rounded-full dark:text-white">
                                                {{ $producto->stock }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <button
                                                onclick="window.location.href='{{ route('productos.edit', $producto->id) }}'"
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <i class="fas fa-edit w-5 h-4"></i>
                                            </button>

                                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST"
                                                onsubmit="return confirm('¿Estás seguro de eliminar este producto?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                    aria-label="Delete">
                                                    <i class="fas fa-trash-alt w-5 h-4"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div>
                    {{ $productos->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection
