<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-gray-900 border-r border-gray-700 h-screen fixed left-0 top-0 sidebar-mobile md:translate-x-0 z-50">
            <div class="flex items-center gap-2 px-6 py-4 border-b border-gray-700">
                <i class="bi bi-house text-blue-500"></i>
                <span class="text-white text-lg font-semibold">Perpus17</span>
            </div>

            <nav class="mt-4 h-[calc(100%-5rem)] overflow-y-auto">
                <a href="{{ route('admin.dashboard') }}"
                   class="flex items-center gap-2 px-6 py-3 text-gray-300 hover:bg-blue-600 hover:text-white transition-colors {{ request()->is('admin/dashboard') ? 'bg-blue-600 text-white' : '' }}">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('user.index') }}"
                   class="flex items-center gap-2 px-6 py-3 text-gray-300 hover:bg-blue-600 hover:text-white transition-colors {{ request()->is('admin/dashboard/user') ? 'bg-blue-600 text-white' : '' }}">
                    <i class="bi bi-people"></i>
                    <span>User</span>
                </a>
                <a href="{{ route('buku.index') }}"
                   class="flex items-center gap-2 px-6 py-3 text-gray-300 hover:bg-blue-600 hover:text-white transition-colors {{ request()->is('admin/dashboard/buku') ? 'bg-blue-600 text-white' : '' }}">
                    <i class="bi bi-book"></i>
                    <span>Buku</span>
                </a>
                <a href="{{ route('riwayat.index') }}"
                   class="flex items-center gap-2 px-6 py-3 text-gray-300 hover:bg-blue-600 hover:text-white transition-colors {{ request()->is('admin/dashboard/riwayat') ? 'bg-blue-600 text-white' : '' }}">
                    <i class="bi bi-clock-history"></i>
                    <span>Riwayat</span>
                </a>

                <!-- Sign Out at the bottom -->
                <div class="absolute bottom-0 w-full pb-4 border-t border-gray-700">
                    <a href="#"
                       class="flex items-center gap-2 px-6 py-3 text-gray-300 hover:bg-blue-600 hover:text-white transition-colors">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Main Content Container -->
        <div class="flex-1 md:ml-64">
            <!-- Header -->
            <header class="bg-gray-800 border-b border-gray-700 h-16 fixed top-0 right-0 left-0 md:left-64 z-40">
                <div class="flex justify-between items-center h-full px-4">
                    <!-- Mobile menu button -->
                    <button id="mobile-menu-button" class="md:hidden text-gray-300 hover:text-white">
                        <i class="bi bi-list"></i>
                    </button>

                    <div class="ml-auto flex items-center gap-2">
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ms-1">
                                            <i class="bi bi-chevron-down"></i>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        <i class="bi bi-person"></i> {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                            <i class="bi bi-box-arrow-right"></i> {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main>
                @yield('page')
            </main>

            <!-- Fixed Footer -->
            <footer class="bg-gray-800 border-t border-gray-700 text-gray-300 py-4 text-center fixed bottom-0 right-0 left-0 md:left-64 h-16">
                <p>&copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script> perpus17
                </p>
            </footer>
        </div>
    </div>

    <script>
        // Toggle mobile menu
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const sidebar = document.getElementById('sidebar');

        mobileMenuButton.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                if (!sidebar.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                    sidebar.classList.remove('active');
                }
            }
        });
    </script>
</body>
</html>
