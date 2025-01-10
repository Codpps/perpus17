
<nav class="fixed w-full z-50 backdrop-blur-lg bg-white/80 border-b border-gray-100"
     x-data="{
        isOpen: false,
        scrolled: false,
        dropdownOpen: false
     }"
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     :class="{ 'shadow-lg': scrolled }">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between py-4"
             :class="{ 'py-2': scrolled }"
             x-transition>
            <!-- Logo -->
            <div class="flex items-center flex-1" data-aos="fade-right" data-aos-duration="1000">
                <a href="/" class="group flex items-center space-x-2">
                    <span class="text-2xl font-black bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 bg-clip-text text-transparent
                                transform transition-all duration-300 group-hover:scale-105">
                        E-Perpus<span class="text-gray-800">17</span>
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center justify-center flex-1 space-x-1"
                 data-aos="fade-down"
                 data-aos-duration="1000">
                <a href="/"
   class="px-4 py-2 rounded-full
          hover:bg-blue-50 hover:text-blue-600 transition-all duration-300
          {{ Request::is('/') ? '!font-bold !bg-blue-100 !text-blue-600' : 'text-gray-600' }}">
    Beranda
</a>
<a href="/koleksi"
   class="px-4 py-2 rounded-full
          hover:bg-blue-50 hover:text-blue-600 transition-all duration-300
          {{ Request::is('koleksi') ? '!font-bold !bg-blue-100 !text-blue-600' : 'text-gray-600' }}">
    Koleksi
</a>
<a href="/tentang"
   class="px-4 py-2 rounded-full
          hover:bg-blue-50 hover:text-blue-600 transition-all duration-300
          {{ Request::is('tentang') ? '!font-bold !bg-blue-100 !text-blue-600' : 'text-gray-600' }}">
    Tentang
</a>
<a href="/pinjam"
   class="px-4 py-2 rounded-full
          hover:bg-blue-50 hover:text-blue-600 transition-all duration-300
          {{ Request::is('pinjam') ? '!font-bold !bg-blue-100 !text-blue-600' : 'text-gray-600' }}">
    Pinjam
</a>

            </div>

            <!-- User Profile/Login Section -->
            <div class="hidden md:flex items-center flex-1 justify-end" data-aos="fade-left" data-aos-duration="1000">
                @auth
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                            class="flex items-center space-x-3 px-4 py-2 rounded-full hover:bg-gray-100 transition-all duration-300"
                            :class="{ 'bg-gray-100': open }">
                        <div class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 flex items-center justify-center text-white font-medium">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <span class="text-gray-700 font-medium">{{ Auth::user()->name }}</span>
                        <svg class="h-5 w-5 text-gray-600 transform transition-transform duration-300"
                             :class="{ 'rotate-180': open }"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                   <div x-show="open"
     x-transition:enter="transition ease-out duration-200"
     x-transition:enter-start="opacity-0 scale-95"
     x-transition:enter-end="opacity-100 scale-100"
     x-transition:leave="transition ease-in duration-150"
     x-transition:leave-start="opacity-100 scale-100"
     x-transition:leave-end="opacity-0 scale-95"
     @click.away="open = false"
     class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden"
>
    <!-- Profile Link -->
    <a href="{{ route('profile.edit') }}"
       class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200 border-b border-gray-100"
    >
        <div class="flex items-center space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            <span>{{ __('Profile') }}</span>
        </div>
    </a>

    <!-- Logout Form -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit"
                class="block w-full text-left px-4 py-3 text-sm text-red-600 hover:bg-red-50 transition-colors duration-200"
        >
            <div class="flex items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span>Logout</span>
            </div>
        </button>
    </form>
</div>

                    </div>
                </div>
                @endauth

                @guest
                <a href="/login"
                   class="group relative px-6 py-2.5 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium
                          transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/30">
                    <span class="relative z-10">Masuk</span>
                    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-purple-600 to-indigo-600 opacity-0
                                group-hover:opacity-100 transition-opacity duration-300"></div>
                </a>
                @endguest
            </div>

            <!-- Mobile Menu Button -->
            <button @click="isOpen = !isOpen"
                    class="md:hidden relative w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors duration-300">
                <div class="relative w-6 h-6">
                    <span class="absolute block w-full h-0.5 bg-gray-600 transform transition-all duration-300"
                          :class="{'rotate-45 translate-y-0': isOpen, '-translate-y-2': !isOpen}"></span>
                    <span class="absolute block w-full h-0.5 bg-gray-600 transform transition-all duration-300"
                          :class="{'opacity-0': isOpen}"></span>
                    <span class="absolute block w-full h-0.5 bg-gray-600 transform transition-all duration-300"
                          :class="{'-rotate-45 translate-y-0': isOpen, 'translate-y-2': !isOpen}"></span>
                </div>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div x-show="isOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="md:hidden">
            <div class="bg-white/90 backdrop-blur-xl rounded-2xl shadow-lg p-6 space-y-4 mb-4">
                <a href="/" class="block px-4 py-2 text-gray-600 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-all duration-300">
                    Beranda
                </a>
                <a href="/koleksi" class="block px-4 py-2 text-gray-600 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-all duration-300">
                    Koleksi
                </a>
                <a href="/tentang" class="block px-4 py-2 text-gray-600 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-all duration-300">
                    Tentang
                </a>
                <a href="/pinjam" class="block px-4 py-2 text-gray-600 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-all duration-300">
                    Pinjam
                </a>

                @auth
                <div class="px-4 py-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 flex items-center justify-center text-white font-medium">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <span class="text-gray-700 font-medium">{{ Auth::user()->name }}</span>
                    </div>
                    <a href="{{ route('logout') }}"
                       class="block w-full px-4 py-2 text-center text-red-600 rounded-lg border border-red-200 hover:bg-red-50 transition-all duration-300">
                        Logout
                    </a>
                </div>
                @else
                <a href="/login"
                   class="block w-full px-6 py-3 text-center bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl
                          hover:shadow-lg hover:shadow-blue-500/30 transition-all duration-300">
                    Masuk
                </a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<script>
    // Initialize AOS
    document.addEventListener('DOMContentLoaded', () => {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 50
        });
    });
</script>
