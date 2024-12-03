@extends('layouts.admin')
@section('title', 'Modificar producto')

@section('content')

    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Editar producto
            </h2>

            <!-- General -->
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                Detalles
            </h4>


            <!-- Formulario -->
            <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                @csrf
                @method('PUT')           

                <!-- Productos -->
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <!-- Código -->
                    <label class="block mt-2 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Código</span>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input type="text" name="codigo" value="{{ old('codigo', $producto->codigo) }}"
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
                            <input type="text" name="producto" value="{{ old('producto', $producto->producto) }}"
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
                                placeholder="Breve descripción del producto">{{ old('descripcion', $producto->descripcion) }}</textarea>
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                <i class="fas fa-info-circle"></i>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

                    <!-- Precio Costo -->
                    <label class="block mt-2 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Precio costo</span>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input type="number" name="precio_costo"
                                value="{{ old('precio_costo', $producto->precio_costo) }}"
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
                            <input type="number" name="precio_venta"
                                value="{{ old('precio_venta', $producto->precio_venta) }}"
                                class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300"
                                placeholder="50.00" />
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                    </label>

                    <!-- Stock -->
                    <label class="block mt-2 mb-2 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Stock</span>
                        <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input type="number" name="stock" value="{{ old('stock', $producto->stock) }}"
                                class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300"
                                placeholder="100" />
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                <i class="fas fa-boxes"></i>
                            </div>
                        </div>
                    </label>
                </div>

                <!-- Botón -->
                <div class="px-4 py-3 mb-4 dark:bg-gray-800">
                    <div class="flex items-center justify-center">
                        <button type="submit"
                            class="px-8 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Modificar producto
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </main>
@endsection
