@extends('layouts.admin')
@section('title', 'Reportes')

@section('content')

    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Bienvenido a reportes
            </h2>
            <div class="w-full bg-white shadow-md rounded-md p-4 mb-6">
                <form class="flex flex-wrap gap-4">
                    <div class="flex-1">
                        <label for="fecha_inicio" class="block text-xs font-semibold text-gray-500 uppercase">Fecha
                            Inicio</label>
                        <input type="date" id="fecha_inicio"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                    </div>

                    <div class="flex-1">
                        <label for="fecha_fin" class="block text-xs font-semibold text-gray-500 uppercase">Fecha Fin</label>
                        <input type="date" id="fecha_fin"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                    </div>

                    <div class="flex-1">
                        <label for="vendedor" class="block text-xs font-semibold text-gray-500 uppercase">Vendedor</label>
                        <select id="vendedor"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                            <option value="">Seleccionar Vendedor</option>
                            <option value="vendedor1">Juan Pérez</option>
                            <option value="vendedor2">Ana Gómez</option>
                            <option value="vendedor3">Carlos Ruiz</option>
                        </select>
                    </div>

                    <div class="mt-6 flex items-center space-x-4">
                        <button type="button"
                            class="bg-indigo-600 text-white text-sm px-6 py-2 rounded-lg hover:bg-indigo-700 transition">
                            Filtrar
                        </button>
                    </div>
                </form>
            </div>


            <!-- Tabla de Ventas (Simulada) -->
            <div class="w-full overflow-x-auto  shadow-lg">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Nº Boleta</th>
                            <th class="px-4 py-3">Fecha</th>
                            <th class="px-4 py-3">Cliente</th>
                            <th class="px-4 py-3">Total</th>
                            <th class="px-4 py-3">Método de Pago</th>
                            <th class="px-4 py-3">Estado</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <!-- Ejemplo de una venta -->
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p class="font-semibold">B001-003</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">2024-12-02</td>
                            <td class="px-4 py-3 text-sm">Carlos Ruiz</td>
                            <td class="px-4 py-3 text-sm">$150.00</td>
                            <td class="px-4 py-3 text-sm">Tarjeta</td>
                            <td class="px-4 py-3 text-sm">
                                <div class="flex items-center">
                                    <span
                                        class="text-xs px-2 py-1 font-semibold leading-tight text-yellow-700 bg-red-100 rounded-full dark:text-white">
                                        Cancelado
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p class="font-semibold">B001-004</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">2024-12-02</td>
                            <td class="px-4 py-3 text-sm">Juan Pérez</td>
                            <td class="px-4 py-3 text-sm">$250.00</td>
                            <td class="px-4 py-3 text-sm">Transferencia</td>
                            <td class="px-4 py-3 text-sm">
                                <div class="flex items-center">
                                    <span
                                        class="text-xs px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:text-white">
                                        Completada
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Previous">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    1
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    2
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    3
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    4
                                </button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    8
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    9
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div>
        </div>
    </main>
@endsection
