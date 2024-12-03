<!-- Mobile sidebar -->
<!-- Backdrop -->

<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>


<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white md:hidden"
    x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
    @keydown.escape="closeSideMenu">

    <div class="py-4 text-gray-500">
        <a class="ml-6 text-lg font-bold text-gray-800" href="#">
            B-MANAGER
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                <a href="{{ route('home') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800">
                    <i class="fas fa-home text-base"></i>
                    <span class="ml-4">Inicio</span>
                </a>
            </li>
        </ul>
        
        <ul>
            <li class="relative px-6 py-3">
                <a href="{{ route('ventas.create') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="forms.html">
                    <i class="fas fa-shopping-cart text-base"></i>
                    <span class="ml-4">Venta</span>
                </a>
            </li>            
            <li class="relative px-6 py-3">
                <a href="{{ route('productos.index') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="cards.html">
                    <i class="fas fa-boxes text-base"></i>
                    <span class="ml-4">Productos</span>
                </a>
            </li>
            
            <li class="relative px-6 py-3">
                <a href="{{ route('clientes.index') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800">
                    <i class="fas fa-users text-base"></i>
                    <span class="ml-4">Clientes</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <a href="{{ url('/graficos') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800">
                    <i class="fas fa-chart-line text-base"></i>
                    <span class="ml-4">Gráficos</span>
                </a>
            </li>
            
            <li class="relative px-6 py-3">
                <a href="{{ route('reportes.index') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="modals.html">
                    <i class="fa fa-chart-bar w-5 h-5 text-base"></i>
                    <span class="ml-4">Reportes</span>
                </a>
            </li>
            
            <li class="relative px-6 py-3">
                <a href="#" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="tables.html">
                    <i class="fas fa-cogs w-5 h-5 text-base"></i>
                    <span class="ml-4">Configuración</span>
                </a>
            </li> 
        </ul>
        <div class="px-6 my-6">
                <button
                    type=""
                    class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gray-600 border border-transparent rounded-lg active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-red">
                    <i class="fas fa-sign-out-alt mr-2"></i> Cerrar sesión
                </button>
        </div>
        
    </div>
</aside>
