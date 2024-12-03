@extends('layouts.admin')
@section('title', 'Agregar producto')

@section('content')

    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Agregar producto
            </h2>

            <!-- General -->
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                Detalles
            </h4>

            <form action="{{ url('productos') }}" method="POST">
                @csrf
                <!-- Productos Inputs -->
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <!-- Código -->
                    <label class="block mt-2 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Código</span>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input name="codigo" required
                                class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300"
                                placeholder="PRD-001" />
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                <i class="fas fa-barcode"></i>
                            </div>
                        </div>
                    </label>

                    <!-- Producto -->
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Producto</span>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input name="producto" required
                                class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300"
                                placeholder="Producto A" />
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                <i class="fas fa-box"></i>
                            </div>
                        </div>
                    </label>

                    <!-- Descripción -->
                    <label class="block mt-4 mb-2 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Descripción</span>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <textarea name="descripcion"
                                class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300"
                                placeholder="Breve descripción del producto"></textarea>
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                <i class="fas fa-info-circle"></i>
                            </div>
                        </div>
                    </label>
                </div>

                <!-- Inputs -->
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

                    <!-- Precio Costo -->
                    <label class="block mt-2 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Precio costo</span>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input name="precio_costo" required
                                class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300"
                                placeholder="20.00" />
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                        </div>
                    </label>

                    <!-- Precio Venta -->
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Precio venta</span>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input name="precio_venta" required
                                class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300"
                                placeholder="50.00" />
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                    </label>

                    <!-- Unidad -->
                    <div class="flex mt-4 text-sm">
                        <label class="flex items-center dark:text-gray-400">
                            <input type="checkbox"
                                class="text-purple-600 form-checkbox focus:border-purple-500 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" />
                            <span class="ml-2 flex items-center">
                                unidad
                            </span>
                        </label>
                    </div>

                    <!-- Stock -->
                    <label class="block mt-2 mb-2 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Stock</span>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input name="stock" required
                                class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300"
                                placeholder="100" />
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                <i class="fas fa-boxes"></i>
                            </div>
                        </div>
                    </label>
                </div>

                <!-- Botones -->
                <div class="px-4 py-3 mb-4 dark:bg-gray-800">
                    <div class="flex items-center justify-center gap-4">

                        <a href="{{ url('productos') }}"
                            class="px-8 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-500 border border-transparent rounded-md active:bg-red-600 hover:bg-red-400 focus:outline-none focus:shadow-outline-red cursor-pointer flex items-center">
                            <i class="fas fa-times mr-2"></i>
                            Cancelar
                        </a>

                        <button type="submit"
                            class="px-8 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple cursor-pointer flex items-center">
                            <i class="fas fa-save mr-2"></i>
                            Guardar
                        </button>
                    </div>
                    
                </div>

            </form>
        </div>
    </main>
@endsection
