<section class="relative py-24 overflow-hidden">
    <!-- Animated Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-br from-white via-blue-50 to-indigo-50">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #4F46E5 1px, transparent 0); background-size: 40px 40px; opacity: 0.1;"></div>
    </div>

    <div class="container mx-auto px-4 max-w-7xl relative">
        <!-- Section Header -->
        <div class="text-center mb-20"
             data-aos="fade-up"
             data-aos-duration="1000">
            <h2 class="relative inline-block text-4xl md:text-5xl font-black mb-6">
                <span class="absolute -inset-1 rounded-lg bg-blue-100/50 blur-xl"></span>
                <span class="relative">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">
                        4 Langkah Mudah
                    </span>
                    <span class="relative ml-2">
                        Peminjaman Buku
                    </span>
                </span>
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Proses peminjaman buku yang simpel dan cepat. Mulai baca buku favoritmu dalam hitungan menit!
            </p>
        </div>

        <!-- Steps Container -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
            <!-- Connecting Lines (Desktop Only) -->
            <div class="hidden lg:block absolute top-1/2 left-0 w-full transform -translate-y-1/2">
                <div class="h-1 bg-gradient-to-r from-blue-200 via-indigo-200 to-blue-200
                            animate-pulse"></div>
                <div class="absolute top-0 left-0 w-full h-full"
                     style="background: linear-gradient(90deg, transparent, white, transparent);
                            animation: shine 3s infinite linear;"></div>
            </div>

            <!-- Step 1 -->
            <div class="relative group"
                 data-aos="zoom-in-up"
                 data-aos-delay="100"
                 x-data="{ hover: false }"
                 @mouseenter="hover = true"
                 @mouseleave="hover = false">
                <div class="bg-white rounded-3xl p-8 shadow-lg transition-all duration-500
                            hover:shadow-2xl hover:-translate-y-2 border border-blue-50 relative z-10">
                    <!-- Number Badge -->
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600
                                  flex items-center justify-center text-white font-bold text-lg
                                  shadow-lg transition-transform duration-500 group-hover:scale-110">
                            1
                        </div>
                    </div>

                    <!-- Icon Container -->
                    <div class="mb-8 mt-6">
                        <div class="w-20 h-20 mx-auto rounded-2xl bg-blue-50 flex items-center justify-center
                                  transform transition-transform duration-500 group-hover:rotate-6">
                            <svg class="w-10 h-10 text-blue-600 transition-transform duration-500 group-hover:scale-110"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="text-center relative">
                        <h3 class="text-xl font-bold mb-4 text-gray-900">Login</h3>
                        <p class="text-gray-600 transition-all duration-300 group-hover:text-gray-900">
                            Anda bisa login dan regist menggunakan data diri sebagai siswa SMKN 17 JKT
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative group"
                 data-aos="zoom-in-up"
                 data-aos-delay="200">
                <div class="bg-white rounded-3xl p-8 shadow-lg transition-all duration-500
                            hover:shadow-2xl hover:-translate-y-2 border border-blue-50 relative z-10">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600
                                  flex items-center justify-center text-white font-bold text-lg
                                  shadow-lg transition-transform duration-500 group-hover:scale-110">
                            2
                        </div>
                    </div>

                    <div class="mb-8 mt-6">
                        <div class="w-20 h-20 mx-auto rounded-2xl bg-blue-50 flex items-center justify-center
                                  transform transition-transform duration-500 group-hover:rotate-6">
                            <svg class="w-10 h-10 text-blue-600 transition-transform duration-500 group-hover:scale-110"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                    </div>

                    <div class="text-center">
                        <h3 class="text-xl font-bold mb-4 text-gray-900">Masuk halaman pinjam</h3>
                        <p class="text-gray-600 transition-all duration-300 group-hover:text-gray-900">
                            Masuk ke halaman pinjam untuk mengakses form peminjaman buku perpus17
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative group"
                 data-aos="zoom-in-up"
                 data-aos-delay="300">
                <div class="bg-white rounded-3xl p-8 shadow-lg transition-all duration-500
                            hover:shadow-2xl hover:-translate-y-2 border border-blue-50 relative z-10">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600
                                  flex items-center justify-center text-white font-bold text-lg
                                  shadow-lg transition-transform duration-500 group-hover:scale-110">
                            3
                        </div>
                    </div>

                    <div class="mb-8 mt-6">
                        <div class="w-20 h-20 mx-auto rounded-2xl bg-blue-50 flex items-center justify-center
                                  transform transition-transform duration-500 group-hover:rotate-6">
                            <svg class="w-10 h-10 text-blue-600 transition-transform duration-500 group-hover:scale-110"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                    </div>

                    <div class="text-center">
                        <h3 class="text-xl font-bold mb-4 text-gray-900">Ajukan Peminjaman</h3>
                        <p class="text-gray-600 transition-all duration-300 group-hover:text-gray-900">
                            Ajukan peminjaman dengan cara mengisi form pengisian identitas buku yang dipinjam
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="relative group"
                 data-aos="zoom-in-up"
                 data-aos-delay="400">
                <div class="bg-white rounded-3xl p-8 shadow-lg transition-all duration-500
                            hover:shadow-2xl hover:-translate-y-2 border border-blue-50 relative z-10">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600
                                  flex items-center justify-center text-white font-bold text-lg
                                  shadow-lg transition-transform duration-500 group-hover:scale-110">
                            4
                        </div>
                    </div>

                    <div class="mb-8 mt-6">
                        <div class="w-20 h-20 mx-auto rounded-2xl bg-blue-50 flex items-center justify-center
                                  transform transition-transform duration-500 group-hover:rotate-6">
                            <svg class="w-10 h-10 text-blue-600 transition-transform duration-500 group-hover:scale-110"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                    </div>

                    <div class="text-center">
                        <h3 class="text-xl font-bold mb-4 text-gray-900">Mulai Membaca</h3>
                        <p class="text-gray-600 transition-all duration-300 group-hover:text-gray-900">
                            Setelah disetujui, Anda bebas membaca buku dimana pun dan kapanpun anda mau
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes shine {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(100%);
    }
}
</style>
