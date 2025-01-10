<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Perpus17 - Digital Library</title>

    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

    <!-- Alpine.js -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js"></script>

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</head>
<body>
    <div class="relative overflow-hidden bg-gradient-to-br from-white via-blue-50/30 to-indigo-50/30">
        <!-- Animated Background Pattern -->
        @include('partials.navbar')
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 opacity-[0.03] rotate-45" style="background-image: radial-gradient(#4F46E5 0.75px, transparent 0.75px); background-size: 12px 12px;"></div>
        </div>

        <div class="relative pt-12 pb-24 sm:pt-16 sm:pb-32 overflow-hidden mt-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
                    <!-- Left Content -->
                    <div class="sm:text-center md:mx-auto lg:col-span-6 lg:text-left" x-data="{ shown: false }"
                         x-intersect="shown = true">
                        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-gradient-to-r from-blue-600/10 to-indigo-600/10 text-blue-600"
                              data-aos="fade-down" data-aos-delay="100">
                            <span class="animate-pulse mr-2">🌟</span>
                            Selamat Datang di E-Perpus SMKN 17
                        </span>

                        <h1 class="mt-6 text-5xl font-black tracking-tight text-gray-900 sm:text-6xl md:text-7xl leading-tight"
                            data-aos="fade-right" data-aos-delay="200">
                            <span class="block" x-show="shown"
                                  x-transition:enter="transition ease-out duration-500"
                                  x-transition:enter-start="opacity-0 translate-y-8"
                                  x-transition:enter-end="opacity-100 translate-y-0">
                                Membaca
                            </span>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 inline-block"
                                  data-aos="fade-right" data-aos-delay="400">
                                Tanpa Batas
                            </span>
                            <span class="block" data-aos="fade-right" data-aos-delay="600">
                                untuk Masa Depan
                            </span>
                        </h1>

                        <p class="mt-6 text-xl text-gray-600 leading-relaxed"
                           data-aos="fade-up" data-aos-delay="700">
                            Jelajahi dunia pengetahuan digital dengan akses ke ribuan buku premium, jurnal, dan materi
                            pembelajaran interaktif untuk pengalaman belajar yang tak terbatas.
                        </p>

                        <div class="mt-8 sm:flex sm:justify-center lg:justify-start space-x-4"
                             data-aos="fade-up" data-aos-delay="800">
                            <a href="/koleksi"
                               class="group inline-flex items-center px-8 py-3.5 border border-transparent text-lg font-medium rounded-full shadow-lg text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 transform transition duration-300 hover:scale-105">
                                <span>Mulai Membaca</span>
                                <svg class="ml-2 w-5 h-5 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                            <a href="/pinjam"
                               class="inline-flex items-center px-8 py-3.5 border-2 border-blue-600 text-lg font-medium rounded-full text-blue-600 bg-white hover:bg-blue-50 transition duration-300">
                                Pinjam Buku
                            </a>
                        </div>

                        <!-- Enhanced Stats with Counters -->
                        <div class="mt-12 grid grid-cols-3 gap-6" x-data="{
                            shown: false,
                            counter1: 0,
                            counter2: 0,
                            counter3: 0
                        }" x-intersect="shown = true;
                            if(shown) {
                                const interval = setInterval(() => {
                                    counter1 = counter1 < 10 ? counter1 + 1 : 10;
                                    counter2 = counter2 < 5 ? counter2 + 1 : 5;
                                    counter3 = counter3 < 24 ? counter3 + 1 : 24;
                                    if(counter1 === 10 && counter2 === 5 && counter3 === 24) clearInterval(interval);
                                }, 100);
                            }">
                            <div class="text-center p-6 rounded-2xl bg-white/80 backdrop-blur-sm shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl"
                                 data-aos="zoom-in" data-aos-delay="900">
                                <p class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">
                                    <span>250</span>+
                                </p>
                                <p class="text-sm font-medium text-gray-600">Buku Digital</p>
                            </div>
                            <div class="text-center p-6 rounded-2xl bg-white/80 backdrop-blur-sm shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl"
                                 data-aos="zoom-in" data-aos-delay="1000">
                                <p class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">
                                    <span>589</span>+
                                </p>
                                <p class="text-sm font-medium text-gray-600">Pengguna Aktif</p>
                            </div>
                            <div class="text-center p-6 rounded-2xl bg-white/80 backdrop-blur-sm shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl"
                                 data-aos="zoom-in" data-aos-delay="1100">
                                <p class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">
                                    <span>24</span>/7
                                </p>
                                <p class="text-sm font-medium text-gray-600">Akses</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content / Image -->
                    <div class="mt-12 lg:mt-0 lg:col-span-6 relative z-10" data-aos="fade-left" data-aos-delay="300">
                        <div class="relative mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0">
                            <div class="relative animate-float">
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-3xl transform -rotate-6 transition-transform hover:rotate-0 duration-300"></div>
                                <div class="relative rounded-3xl shadow-2xl overflow-hidden group">
                                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-indigo-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80"
                                         alt="Digital Library Interface"
                                         class="w-full h-[500px] object-cover transform transition-transform duration-300 group-hover:scale-105">
                                </div>

                                <!-- Enhanced Floating Elements -->
                                <div class="absolute -bottom-12 -left-12 bg-white/90 backdrop-blur-lg p-6 rounded-2xl shadow-xl"
                                     data-aos="fade-up" data-aos-delay="600">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full flex items-center justify-center transform transition-transform hover:scale-110">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-gray-900">Baca Di Mana Saja</p>
                                            <p class="text-xs text-gray-600">Multi-device access</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="absolute -top-12 -right-12 bg-white/90 backdrop-blur-lg p-6 rounded-2xl shadow-xl"
                                     data-aos="fade-up" data-aos-delay="800">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full flex items-center justify-center transform transition-transform hover:scale-110">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-gray-900">Smart Learning</p>
                                            <p class="text-xs text-gray-600">AI-Powered recommendations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-out-cubic',
            once: true
        });

        // Add floating animation
        document.querySelector('.animate-float').style.animation = 'float 6s ease-in-out infinite';

        // Add keyframes for float animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes float {
                0% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
                100% { transform: translateY(0px); }
            }
        `;
        document.head.appendChild(style);
    </script>

    @include('partials.pinjam')
    @include('partials.pengembalian')
</body>
</html>
