<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon"  href="/favicon.ico" type="image/x-icon">
    <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
  />
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
    href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&family=Jakarta+Sans:wght@400;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />

</head>

<body>

    <script>
        function data() {
            function getThemeFromLocalStorage() {

                if (window.localStorage.getItem('dark')) {
                    return JSON.parse(window.localStorage.getItem('dark'))
                }

                return (
                    !!window.matchMedia &&
                    window.matchMedia('(prefers-color-scheme: dark)').matches
                )
            }

            function setThemeToLocalStorage(value) {
                window.localStorage.setItem('dark', value)
            }

            return {
                dark: getThemeFromLocalStorage(),
                toggleTheme() {
                    this.dark = !this.dark
                    setThemeToLocalStorage(this.dark)
                },
                isSideMenuOpen: false,
                toggleSideMenu() {
                    this.isSideMenuOpen = !this.isSideMenuOpen
                },
                closeSideMenu() {
                    this.isSideMenuOpen = false
                },
                isNotificationsMenuOpen: false,
                toggleNotificationsMenu() {
                    this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
                },
                closeNotificationsMenu() {
                    this.isNotificationsMenuOpen = false
                },
                isProfileMenuOpen: false,
                toggleProfileMenu() {
                    this.isProfileMenuOpen = !this.isProfileMenuOpen
                },
                closeProfileMenu() {
                    this.isProfileMenuOpen = false
                },
                isPagesMenuOpen: false,
                togglePagesMenu() {
                    this.isPagesMenuOpen = !this.isPagesMenuOpen
                },
                isClientesMenuOpen: false,
                toggleClientesMenu() {
                    this.isClientesMenuOpen = !this.isClientesMenuOpen
                },
                // Modal
                isModalOpen: false,
                trapCleanup: null,
                openModal() {
                    this.isModalOpen = true
                    this.trapCleanup = focusTrap(document.querySelector('#modal'))
                },
                closeModal() {
                    this.isModalOpen = false
                    this.trapCleanup()
                },
            }
        }
    </script>

    <div class="flex h-screen bg-gray-100" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        @include('layouts.sidebar')

        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        @include('layouts.mobile-sidebar')

        <div class="flex flex-col flex-1 w-full">
            <!-- Header -->
            @include('layouts.header')


            <section class="h-full overflow-y-auto">
                @yield('content')
            </section>
            
        </div>
    </div>
</body>

</html>
