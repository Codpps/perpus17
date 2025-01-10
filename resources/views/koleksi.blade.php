<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Perpus17 - Digital Library</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        .book-card {
            transform-style: preserve-3d;
            perspective: 1000px;
        }
        .book-cover {
            transition: transform 0.5s ease-out;
        }
        .book-card:hover .book-cover {
            transform: rotateY(10deg) rotateX(5deg);
        }
        .search-input:focus ~ .search-icon {
            transform: scale(1.1) rotate(-5deg);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-indigo-50/30 to-purple-50/30 min-h-screen">
    @include('partials.navbar')

    <main class="min-h-screen pt-28 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Hero Section -->
            <div class="text-center mb-16" data-aos="fade-down">
                <h1 class="text-4xl md:text-5xl font-bold text-blue-900 mb-4">
                    Jelajahi Dunia Literasi Digital
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Temukan ribuan buku digital yang akan membawa Anda ke petualangan pengetahuan baru
                </p>
            </div>

            <!-- Enhanced Search Section -->
            <div class="w-full max-w-3xl mx-auto mb-16"
                 x-data="{ searchFocus: false }"
                 data-aos="fade-up">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000 group-hover:duration-200"></div>
                    <input type="text"
                           placeholder="Cari judul, penulis, atau kategori..."
                           class="search-input relative w-full px-8 py-5 text-lg border-0 rounded-2xl
                                  shadow-lg backdrop-blur-sm bg-white/90
                                  focus:outline-none focus:ring-2 focus:ring-blue-400
                                  transition-all duration-300"
                           x-on:focus="searchFocus = true"
                           x-on:blur="searchFocus = false">
                    <span class="search-icon absolute right-6 top-1/2 -translate-y-1/2 text-blue-500 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                </div>
            </div>

            <!-- Enhanced Books Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 p-4">
                @foreach ($bukus as $buku)
                <article class="book-card group relative bg-white rounded-3xl shadow-lg overflow-hidden
                              hover:shadow-2xl transition-all duration-500"
                         data-aos="fade-up"
                         data-aos-delay="{{ $loop->index * 100 }}">
                    <!-- Enhanced Cover Image Container -->
                    <div class="relative aspect-[3/4] overflow-hidden">
                        <img src="{{ asset('storage/cover/' . $buku->cover) }}"
                             alt="{{ $buku->nama }}"
                             class="book-cover w-full h-full object-cover object-center">

                        <!-- Enhanced Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent
                                    opacity-0 group-hover:opacity-100 transition-all duration-500
                                    flex flex-col justify-end p-6">
                            <span class="inline-block px-4 py-2 text-sm font-semibold bg-blue-500/90 text-white rounded-full
                                       transform -translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100
                                       transition-all duration-500 delay-100">
                                {{ $buku->kategori ?? 'Unknown Category' }}
                            </span>
                            <p class="text-white/90 text-sm mt-2 line-clamp-3 transform -translate-y-4 opacity-0
                                    group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 delay-200">
                                {{ $buku->deskripsi ?? 'Tidak ada deskripsi tersedia.' }}
                            </p>
                        </div>
                    </div>

                    <!-- Enhanced Book Info -->
                    <div class="p-6 space-y-4">
                        <h3 class="font-bold text-blue-900 text-xl leading-snug line-clamp-2
                                 group-hover:text-blue-700 transition-colors duration-300">
                            {{ $buku->nama }}
                        </h3>
                        <div class="space-y-2">
                            <p class="text-gray-600 text-sm flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>{{ $buku->pengarang }}</span>
                            </p>
                            <p class="text-gray-600 text-sm flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <span>{{ $buku->penerbit ?? 'Tidak Diketahui' }}</span>
                            </p>
                        </div>

                        <!-- Enhanced Action Button -->
                        <a href="{{ route('baca', $buku->id ?? 0) }}"
   class="block w-full text-center bg-gradient-to-r from-blue-500 to-blue-600
          text-white font-medium py-3 px-6 rounded-xl
          transition-all duration-300 ease-in-out
          hover:shadow-lg hover:from-blue-600 hover:to-blue-700
          active:scale-95
          focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
    <span class="inline-flex items-center justify-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="h-5 w-5 transition-transform duration-300 group-hover:rotate-12"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
        </svg>
        Baca Sekarang
    </span>
</a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic'
            });
        });
    </script>
</body>
</html>
