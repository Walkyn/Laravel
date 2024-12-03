@extends('layouts.admin')
@section('title', 'Agregar Cliente')

@section('content')

    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Agregar cliente
            </h2>

            <!-- General -->
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                Datos
            </h4>

            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <!-- Identificación Input -->
                <label class="block mt-1 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Identificación</span>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input
                            class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300"
                            placeholder="63371697" />
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <i class="fas fa-id-card text-base"></i>
                        </div>
                    </div>
                </label>

                <!-- Nombre Input -->
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Nombre</span>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input
                            class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300"
                            placeholder="Jane" />
                        <!-- Icono de Nombre (por ejemplo, User) -->
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <i class="fas fa-user text-base"></i>
                        </div>
                    </div>
                </label>

                <!-- Apellidos Input -->
                <label class="block mt-4 mb-2 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Apellidos</span>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input
                            class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300"
                            placeholder="Doe" />
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <i class="fas fa-user text-base"></i>
                        </div>
                    </div>
                </label>
            </div>


            <!-- Inputs -->
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <!-- Teléfono Input -->
                <label class="block mt-1 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Teléfono</span>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input
                            class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300"
                            placeholder="+51 917 319 939" />
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <i class="fas fa-phone-alt text-base"></i>
                        </div>
                    </div>
                </label>

                <!-- E-mail Input -->
                <label class="block mt-4 mb-2 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">E-mail</span>
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input
                            class="block w-full pr-10 mt-1 text-sm border border-purple-300 dark:border-purple-500 dark:bg-gray-700 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded px-3 py-2 box-border focus:shadow-lg focus:shadow-purple-300"
                            placeholder="Jane Doe" />
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <i class="fas fa-envelope text-base"></i>
                        </div>
                    </div>
                </label>
            </div>


            <div class="px-4 py-3 mb-4 dark:bg-gray-800">

                <div class="flex items-center justify-center">
                    <button
                        class="px-8 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Registrar cliente
                    </button>
                </div>
            </div>

        </div>
    </main>
@endsection
