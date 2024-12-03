@extends('layouts.admin')
@section('title', 'Ventas')

@section('content')

    <main class="h-full flex-1 pb-16 overflow-y-auto">
        <div class="container px-6 mx-w-full mx-auto ">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Realizar venta
            </h2>

            <div class="mb-8 flex flex-wrap rounded-lg gap-4 md:flex-row md:gap-6 mt-2">
                <div
                    class="flex-grow w-full sm:w-1/3 lg:w-1/3 xl:w-1/3 p-6 mx-auto bg-white rounded-lg shadow-md border-t-2 border-violet-500">
                    <div class="flex justify-between mb-2">
                        <h2 class="text-lg font-bold font-Jakarta w-full">BOLETA</h2>
                    </div>
                    <div class="flex flex-col md:flex-row justify-between items-center mb-2">
                        <p class="text-gray-600"><span id="invoiceNumber" class="font-bold">B001-000038</span></p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4 text-base font-outfit">
                        <div class="flex md:flex-row flex-col items-center w-full">
                            <div class="md:w-1/2 w-full md:mb-0 mb-4">
                                <label class="block mb-2 text-gray-700 dark:text-gray-300">Fecha <span
                                        class="text-red-500">*</span></label>
                                <input type="date"
                                    class="mt-1 block w-full border border-slate-600 rounded p-2 text-sm text-gray-700 dark:bg-transparent dark:text-white dark:border-slate-500 focus:border-slate-800 focus:ring-4 focus:ring-slate-300 dark:focus:ring-slate-800 transition-all" />
                            </div>

                            <div class="md:w-1/2 w-full md:ml-4">
                                <label class="block mb-2 text-gray-700 dark:text-gray-300">Cliente <span
                                        class="text-red-500">*</span></label>
                                <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch"
                                    class="inline-flex justify-between items-center w-full p-2 text-sm font-outfit text-center text-white bg-slate-600 transition-all rounded hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800"
                                    type="button">Buscar
                                    <i class="fas fa-chevron-down w-2.5 h-2.8 ms-2.5 text-white"></i>
                                </button>

                                <!-- Dropdown menu -->
                                <div id="dropdownSearch"
                                    class="z-10 hidden bg-zinc-50 rounded-lg shadow-md border w-70 dark:bg-gray-700">
                                    <div class="p-3">
                                        <label for="input-group-search" class="sr-only">Search</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                <i class="fas fa-search w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                            </div>
                                            <input type="text" id="input-group-search"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Buscar cliente">
                                        </div>
                                    </div>
                                    <ul class="h-40 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownSearchButton">
                                        <li>
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input id="checkbox-item-11" type="checkbox" value=""
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-11"
                                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Bonnie
                                                    Green</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#"
                                        class="flex items-center p-3 text-sm font-medium text-blue-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-500 hover:underline">
                                        <i class="fas fa-user-plus w-4 h-4 me-2"></i>
                                        Agregar cliente
                                    </a>

                                    <a href="#"
                                        class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-red-500 hover:underline">
                                        <i class="fas fa-user-times w-4 h-4 me-2"></i>
                                        Borrar cliente
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="min-h-32 max-h-32 overflow-x-auto">
                        <table class="min-w-full whitespace-nowrap">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">
                                        <input id="default-checkbox" type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 border-blue-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </th>
                                    <th class="px-4 py-3">Acción</th>
                                    <th class="px-4 py-3">Producto</th>
                                    <th class="px-4 py-3">Precio</th>
                                    <th class="px-4 py-3">Cantidad</th>
                                    <th class="px-4 py-3">Importe</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <input id="default-checkbox" type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 border-blue-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <button
                                            class="relative w-6 h-6 rounded bg-red-500 focus:outline-none transition-transform duration-300 ease-in-out hover:scale-110 hover:shadow-lg">
                                            <i
                                                class="text-white absolute inset-0 rounded bg-red-600 hover:bg-red-500 shadow-2xl transform scale-105 transition-transform duration-300 ease-in-out">
                                                <span class="fa fa-trash text-xs text-center mt-1"></span>
                                            </i>
                                        </button>
                                    </td>
                                    <td class="px-4 py-3 text-sm">Fernet</td>
                                    <td class="px-4 py-3 text-sm text-right">1.00</td>
                                    <td class="px-4 py-3 text-sm text-right">
                                        <input type="number" class="border border-gray-300 rounded p-1 w-16" value="1"
                                            min="1" />
                                    </td>
                                    <td class="px-4 py-3 text-sm text-right">1.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="mt-4 font-outfit text-base text-slate-800">
                        <div class="flex justify-between p-2">
                            <span>SubTotal</span>
                            <span>$ 5.03</span>
                        </div>
                        <hr class="border-gray-300 dark:border-gray-500">
                        <div class="flex justify-between items-center py-2 pl-2">
                            <span>Descontar</span>
                            <input type="number" placeholder="0.00"
                                class="border border-slate-600 rounded p-2 w-24 text-right text-gray-700 dark:bg-gray-600 dark:text-white dark:border-slate-500 focus:ring-4 focus:ring-slate-300 dark:focus:ring-slate-800 transition-all">
                        </div>
                        <hr class="border-gray-300 dark:border-gray-500">
                        <div class="flex justify-between p-2">
                            <span>TOTAL</span>
                            <span>$ 5.03</span>
                        </div>
                    </div>

                    <div class="flex justify-between mt-2 space-x-6 md:space-x-32 font-outfit text-base">
                        <div class="flex-1">
                            <label class="block mb-2">PAGAR</label>
                            <input type="number"
                                class="border border-slate-600 rounded p-2 w-full text-right text-gray-700 dark:bg-gray-600 dark:text-white dark:border-slate-500 focus:ring-4 focus:ring-slate-300 dark:focus:ring-slate-800 transition-all"
                                placeholder="0.00" />
                        </div>

                        <div class="flex-1 flex flex-col items-end">
                            <label class="block mb-2">CAMBIO</label>
                            <span
                                class="block border border-slate-600 rounded p-2 w-full text-right bg-gray-200 dark:bg-gray-700 dark:border-slate-500 text-gray-700 dark:text-white">0.00</span>
                        </div>
                    </div>

                    <div class="flex justify-between mt-6 space-x-6">
                        <button
                            class="bg-slate-800 text-white hover:bg-slate-700 p-2 rounded transition-all font-Outfit text-sm w-full flex items-center justify-center space-x-2">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="text-base font-outfit">Cobrar</span>
                        </button>

                        <button
                            class="bg-red-500 text-white hover:bg-red-400 p-2 rounded transition-all font-Outfit text-sm w-full flex items-center justify-center space-x-2">
                            <i class="fa fa-times"></i>
                            <span class="font-outfit text-base">Cancelar</span>
                        </button>
                    </div>

                </div>

                <!--Card 2 tabla 2-->
                <div
                    class="flex-grow w-full sm:w-1/3 lg:w-1/2 xl:w-1/2 mx-auto px-6 py-4 bg-white rounded-lg shadow-md border-t-2 border-violet-500">
                    <h2 class="text-lg font-outfit mb-2">Agregar un Producto</h2>
                    <div class="relative mb-4 font-Jakarta text-sm">
                        <input type="text" placeholder="Buscar productos"
                            class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300 placeholder-font-outfit" />
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <i class="fas fa-barcode text-slate-400"></i>
                        </div>
                    </div>
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full max-h-64 sm:max-h-80 lg:max-h-96">
                            <div class="overflow-y-auto">
                                <table class="min-w-full whitespace-no-wrap bg-card">
                                    <thead>
                                        <tr
                                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                            <th class="px-4 py-3">Opción</th>
                                            <th class="px-4 py-3">Código</th>
                                            <th class="px-4 py-3">Nombre</th>
                                            <th class="px-4 py-3">Precio</th>
                                            <th class="px-4 py-3">Stock</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                        <!-- Product rows go here -->
                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3 text-left">
                                                <div class="flex justify-start items-start">
                                                    <button
                                                        class="relative flex items-center justify-center text-white rounded bg-green-500 shadow-green-3d w-7 h-7 p-0 transition-transform duration-300 ease-in-out hover:bg-green-400 hover:scale-110 hover:shadow-lg focus:outline-none">
                                                        <i class="fas fa-cart-plus text-white"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm text-left">0001</td>
                                            <td class="px-4 py-3 text-sm text-left">CELULAR</td>
                                            <td class="px-4 py-3 text-sm text-left"><span>9.50</span></td>
                                            <td class="px-4 py-3 text-sm text-left">
                                                <span
                                                    class="text-xs px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:text-white">102</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Paginación -->
                            <div
                                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                                <span class="flex items-center col-span-3">
                                    Showing 21-30 of 100
                                </span>
                                <span class="col-span-2"></span>
                                <!-- Pagination -->
                                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                                    <nav aria-label="Table navigation">
                                        <ul class="inline-flex items-center">
                                            <li>
                                                <button
                                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                                    aria-label="Previous">
                                                    <svg class="w-4 h-4 fill-current" aria-hidden="true"
                                                        viewBox="0 0 20 20">
                                                        <path
                                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li>
                                                <button
                                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                                            </li>
                                            <li>
                                                <button
                                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                                            </li>
                                            <li>
                                                <button
                                                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
                                            </li>
                                            <li>
                                                <button
                                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                                            </li>
                                            <li>
                                                <span class="px-3 py-1">...</span>
                                            </li>
                                            <li>
                                                <button
                                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                                            </li>
                                            <li>
                                                <button
                                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                                            </li>
                                            <li>
                                                <button
                                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                                    aria-label="Next">
                                                    <svg class="w-4 h-4 fill-current" aria-hidden="true"
                                                        viewBox="0 0 20 20">
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
                    </div>

                </div>

            </div>
        </div>
    </main>
    
@endsection
