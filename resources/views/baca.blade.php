<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Perpus17 - Digital Library</title>

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js"></script>

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Custom Styles -->
    <style>
        .book-content {
            line-height: 1.8;
            font-size: 1.1rem;
            word-wrap: break-word;
            overflow-wrap: break-word;
            hyphens: auto;
        }

        .book-content p {
            margin-bottom: 1.5rem;
            text-align: justify;
        }

        @media (max-width: 768px) {
            .hero-height {
                height: auto;
                min-height: 80vh;
                padding: 2rem 0;
            }
        }

        .reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(59, 130, 246, 0.1);
            z-index: 1000;
        }

        .reading-progress-bar {
            height: 100%;
            background: #3B82F6;
            width: 0;
            transition: width 0.2s ease;
        }
    </style>
</head>
<body class="bg-gray-50">
   <a href="/koleksi" class="back-button flex items-center gap-2 px-4 py-2 bg-white/90 backdrop-blur-sm rounded-lg shadow-lg hover:bg-white transition-all duration-300">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        <span class="font-medium">Kembali</span>
    </a>

    <!-- Hero Section -->
    <div class="relative hero-height bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center opacity-40 blur-sm"
             style="background-image: url('{{ asset('storage/cover/' . $buku->cover) }}');">
        </div>

        <!-- Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col md:flex-row gap-8 items-start md:items-center">
                <!-- Book Cover -->
                <div class="w-full md:w-1/3 lg:w-1/4" data-aos="fade-right">
                    <img src="{{ asset('storage/cover/' . $buku->cover) }}"
                         alt="{{ $buku->nama }}"
                         class="w-full aspect-[3/4] object-cover rounded-xl shadow-2xl">
                </div>

                <!-- Book Info -->
                <div class="flex-1 text-white" data-aos="fade-up">
                    <div class="space-y-6">
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-1.5 bg-blue-600 rounded-full text-sm font-medium">
                                {{ $buku->kategori }}
                            </span>
                            <span class="px-4 py-1.5 bg-blue-500/20 rounded-full text-sm">
                                No. Buku: {{ $buku->no_buku }}
                            </span>
                        </div>

                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
                            {{ $buku->nama }}
                        </h1>

                        <div class="flex flex-wrap gap-6 text-sm">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>{{ $buku->pengarang }}</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <span>{{ $buku->penerbit }}</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ $buku->created_at->format('d M Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="px-4 py-12">
        <!-- Description -->
        <section class="mb-12" data-aos="fade-up">
            <div class="p-6 md:p-8 bg-white rounded-2xl shadow-sm">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Deskripsi</h2>
                <p class="text-gray-700 leading-relaxed break-words">
                    {{ $buku->deskripsi }}
                </p>
            </div>
        </section>

        <!-- Book Content -->
        <article class="bg-white rounded-2xl shadow-sm p-6 md:p-8 mb-12" data-aos="fade-up">
            <div class="book-content text-gray-700">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Isi Buku</h2>
=
                {!! nl2br(e($buku->isi)) !!}
            </div>
        </article>

        <!-- Share Section -->
        <section class="bg-white rounded-2xl shadow-sm p-6 md:p-8" data-aos="fade-up">
            <h3 class="text-xl font-semibold text-gray-900 mb-6">Bagikan Buku Ini</h3>
            <div class="flex flex-wrap gap-4">
                <button onclick="shareOnWhatsApp()"
                        class="flex items-center gap-2 px-6 py-3 bg-green-500 text-white rounded-xl hover:bg-green-600 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                    </svg>
                    WhatsApp
                </button>

                <button onclick="shareOnTwitter()"
                        class="flex items-center gap-2 px-6 py-3 bg-blue-400 text-white rounded-xl hover:bg-blue-500 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                    Twitter
                </button>

                <button onclick="shareOnFacebook()"
                        class="flex items-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    Facebook
                </button>
            </div>
        </section>
    </main>

    <script>
        // Reading Progress
        document.addEventListener('DOMContentLoaded', function() {
            const progressBar = document.getElementById('reading-progress');

            window.addEventListener('scroll', () => {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (winScroll / height) * 100;
                progressBar.style.width = scrolled + '%';
            });

            // Initialize AOS
            AOS.init({
                duration: 800,
                once: true,
                offset: 50,
                easing: 'ease-out-cubic'
            });
        });

        // Share Functions
        function shareOnWhatsApp() {
            const text = encodeURIComponent(`${document.title}\n${window.location.href}`);
            window.open(`https://wa.me/?text=${text}`, '_blank');
        }

        function shareOnTwitter() {
            const text = encodeURIComponent(`Reading "${document.title}"`);
            const url = encodeURIComponent(window.location.href);
            window.open(`https://twitter.com/intent/tweet?text=${text}&url=${url}`, '_blank');
        }

        function shareOnFacebook() {
            const url = encodeURIComponent(window.location.href);
            window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank');
        }
    </script>
</body>
</html>
