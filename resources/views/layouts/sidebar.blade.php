<aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0" x-data="menuData()">
    <div class="py-4 text-gray-500">
        <a class="ml-6 text-lg font-bold text-gray-800" href="#">
            B-MANAGER
        </a>
        <ul class="mt-6">

            <li class="relative px-6 py-3">
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" x-show="activeMenu === 'inicio'" aria-hidden="true"></span>
                <a href="{{ route('home') }}" @click="setActiveMenu('inicio')" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800">
                    <i class="fas fa-home text-base"></i>
                    <span class="ml-4">Inicio</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" x-show="activeMenu === 'venta'" aria-hidden="true"></span>
                <a href="{{ route('ventas.create') }}" @click="setActiveMenu('venta')" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800">
                    <i class="fas fa-shopping-cart text-base"></i>
                    <span class="ml-4">Venta</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" x-show="activeMenu === 'productos'" aria-hidden="true"></span>
                <a href="{{ route('productos.index') }}" @click="setActiveMenu('productos')" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800">
                    <i class="fas fa-boxes text-base"></i>
                    <span class="ml-4">Productos</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" x-show="activeMenu === 'clientes'" aria-hidden="true"></span>
                <a href="{{ route('clientes.index') }}" @click="setActiveMenu('clientes')" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800">
                    <i class="fas fa-users text-base"></i>
                    <span class="ml-4">Clientes</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" x-show="activeMenu === 'graficos'" aria-hidden="true"></span>
                <a href="{{ url('/graficos') }}" @click="setActiveMenu('graficos')" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800">
                    <i class="fas fa-chart-line text-base"></i>
                    <span class="ml-4">Gráficos</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" x-show="activeMenu === 'reportes'" aria-hidden="true"></span>
                <a href="{{ route('reportes.index') }}" @click="setActiveMenu('reportes')" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800">
                    <i class="fa fa-chart-bar w-5 h-5 text-base"></i>
                    <span class="ml-4">Reportes</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" x-show="activeMenu === 'configuracion'" aria-hidden="true"></span>
                <a href="#" @click="setActiveMenu('configuracion')" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800">
                    <i class="fas fa-cogs w-5 h-5 text-base"></i>
                    <span class="ml-4">Configuración</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<script>
    function menuData() {
        return {
            activeMenu: localStorage.getItem('activeMenu') || 'inicio',
            setActiveMenu(menu) {
                this.activeMenu = menu;
                localStorage.setItem('activeMenu', menu);
            }
        };
    }
</script>
