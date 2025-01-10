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
</head>
<body class="font-sans antialiased bg-gray-100">
    <!-- Navbar -->
    @include('partials.navbar')

   @auth
<div class="min-h-screen bg-gray-50 pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Main Container - Side by side on desktop, stacked on mobile -->
        <div class="flex flex-col lg:flex-row lg:space-x-8 space-y-8 lg:space-y-0">
            <!-- Form Section -->
            <div class="lg:w-1/2">
                <div class="text-center mb-8" data-aos="fade-down">
                    <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 bg-clip-text text-transparent">
                        Form Peminjaman Buku
                    </h1>
                    <p class="text-gray-600 mt-2">Silakan lengkapi informasi peminjaman buku</p>
                </div>

                <div class="backdrop-blur-xl bg-white/80 rounded-2xl shadow-lg" data-aos="fade-up">
                    <form action="{{ route('pinjam.verify') }}" method="POST" class="p-8 space-y-6">
                        @csrf
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Judul Buku</label>
                                <input type="text"
                                       name="judul_buku"
                                       value="{{ old('judul_buku') }}"
                                       class="w-full px-4 py-2.5 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('judul_buku') border-red-500 @enderror"
                                       required>
                                @error('judul_buku')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Buku</label>
                                <input type="text"
                                       name="nomor_buku"
                                       value="{{ old('nomor_buku') }}"
                                       class="w-full px-4 py-2.5 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('nomor_buku') border-red-500 @enderror"
                                       required>
                                @error('nomor_buku')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Penerbit</label>
                                <input type="text"
                                       name="penerbit"
                                       value="{{ old('penerbit') }}"
                                       class="w-full px-4 py-2.5 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 @error('penerbit') border-red-500 @enderror"
                                       required>
                                @error('penerbit')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                    class="w-full px-4 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 transition duration-200 font-medium">
                                Simpan Data Peminjaman
                            </button>
                        </div>

                        @if (session('success'))
                            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>

            <!-- Table Section -->
          <div class="lg:w-1/2">
    <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl shadow-xl overflow-hidden h-full border border-blue-100">
        <div class="px-8 py-6 border-b border-blue-100 bg-white">
            <h2 class="text-2xl font-bold text-blue-800 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                Buku yang Dipinjam
            </h2>
        </div>

        <div class="overflow-x-auto p-4">
            <table class="min-w-full divide-y divide-blue-100">
                <thead>
                    <tr class="bg-blue-200">
                        <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-blue-600 uppercase tracking-wider rounded-l-lg">
                            Judul Buku
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-blue-600 uppercase tracking-wider">
                            Nomor Buku
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-blue-600 uppercase tracking-wider rounded-r-lg">
                            Penerbit
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-blue-50">
                    @forelse (auth()->user()->riwayat as $item)
        <tr class="hover:bg-blue-50 transition-all duration-200">
            <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm font-semibold text-blue-900">{{ $item->judul_buku }}</div>
            </td>
            <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-blue-700">{{ $item->nomor_buku }}</div>
            </td>
            <td class="px-6 py-5 whitespace-nowrap">
                <div class="text-sm text-blue-700">{{ $item->penerbit }}</div>
            </td>
        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 whitespace-nowrap text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-200 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                    </svg>
                                    <span class="text-blue-400 font-medium">Tidak ada data peminjaman</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
@endauth

    @guest
    <div class="min-h-screen bg-gray-100 pt-24 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="backdrop-blur-xl bg-white/80 rounded-2xl shadow-lg p-8" data-aos="fade-up" data-aos-duration="1000">
            <div class="flex flex-col items-center justify-center text-center">
                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-4 bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 bg-clip-text text-transparent">
                    Login Diperlukan
                </h2>
                <p class="text-gray-600 mb-8 max-w-md">
                    Untuk dapat meminjam buku, Anda perlu masuk ke akun Anda terlebih dahulu.
                </p>
                <a href="/login" class="px-6 py-2.5 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium transition-all hover:shadow-lg">
                    Masuk Sekarang
                </a>
            </div>
        </div>
    </div>
    @endguest

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 50
            });
        });
    </script>
</body>
</html>
