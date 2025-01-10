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

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-50 to-white text-gray-800">

<!-- Navbar -->
@include('partials.navbar')

<!-- Main Content -->
 <div class="container mx-auto px-4 py-12 flex-grow flex items-center min-h-screen">
        <div class="w-full bg-gradient-to-br from-blue-50 to-white rounded-3xl shadow-2xl overflow-hidden"
             data-aos="fade-up" data-aos-duration="1000">
            <div class="relative p-12 text-center">
                <!-- Header Content -->
                <h1 class="text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-400 mb-4">
                    Team Development
                </h1>
                <p class="text-gray-600 text-2xl mb-16">
                    SMKN 17 Jakarta - E-Perpus17
                </p>

                <!-- Team Grid -->
                <div class="grid md:grid-cols-4 gap-8">
                    <!-- Team Member Card 1 -->
                    <div class="group relative" data-aos="zoom-in" data-aos-delay="200">
                        <div class="bg-white rounded-2xl p-8 transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-xl">
                            <div class="relative mb-8">
                                <img src="{{ asset('team/dafa.jpg') }}" alt="Dafa Fairuz"
                                     class="w-48 h-48 rounded-full mx-auto object-cover transition-transform duration-500 group-hover:scale-110">
                            </div>
                            <h3 class="font-bold text-2xl text-blue-800 mb-2">Dafa Fairuz</h3>
                            <p class="text-base text-gray-600 mb-4">Full Stack Developer</p>
                            <div class="flex flex-wrap justify-center gap-2 mb-4">
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">Laravel</span>
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">Vue.js</span>
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">MySQL</span>
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">AWS</span>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicate other cards with different data -->
                    <!-- Team Member Card 2 -->
                    <div class="group relative" data-aos="zoom-in" data-aos-delay="400">
                        <div class="bg-white rounded-2xl p-8 transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-xl">
                            <div class="relative mb-8">
                                <img src="{{ asset('team/ivan.jpg') }}" alt="Ivan Maldini"
                                     class="w-48 h-48 rounded-full mx-auto object-cover transition-transform duration-500 group-hover:scale-110">
                            </div>
                            <h3 class="font-bold text-2xl text-blue-800 mb-2">Ivan Maldini</h3>
                            <p class="text-base text-gray-600 mb-4">Frontend Developer</p>
                            <div class="flex flex-wrap justify-center gap-2 mb-4">
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">React</span>
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">TailwindCSS</span>
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">JavaScript</span>
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">TypeScript</span>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member Card 3 -->
                    <div class="group relative" data-aos="zoom-in" data-aos-delay="600">
                        <div class="bg-white rounded-2xl p-8 transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-xl">
                            <div class="relative mb-8">
                                <img src="/api/placeholder/300/300" alt="Fahri Halianto"
                                     class="w-48 h-48 rounded-full mx-auto object-cover transition-transform duration-500 group-hover:scale-110">
                            </div>
                            <h3 class="font-bold text-2xl text-blue-800 mb-2">Fahri Halianto</h3>
                            <p class="text-base text-gray-600 mb-4">Backend Developer</p>
                            <div class="flex flex-wrap justify-center gap-2 mb-4">
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">PHP</span>
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">Node.js</span>
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">MongoDB</span>
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">Redis</span>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member Card 4 -->
                    <div class="group relative" data-aos="zoom-in" data-aos-delay="800">
                        <div class="bg-white rounded-2xl p-8 transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-xl">
                            <div class="relative mb-8">
                                <img src="{{ asset('team/erik.jpg') }}" alt="Erik Sheva"
                                     class="w-48 h-48 rounded-full mx-auto object-cover transition-transform duration-500 group-hover:scale-110">
                            </div>
                            <h3 class="font-bold text-2xl text-blue-800 mb-2">Erik Sheva</h3>
                            <p class="text-base text-gray-600 mb-4">UI/UX Designer</p>
                            <div class="flex flex-wrap justify-center gap-2 mb-4">
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">Figma</span>
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">Adobe XD</span>
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">Prototyping</span>
                                <span class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">User Research</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Description -->
                <div class="mt-16 text-center max-w-3xl mx-auto">
                    <p class="text-xl text-gray-700 leading-relaxed">
                        Tim kami dari SMKN 17 Jakarta telah mengembangkan E-Perpus17
                        sebagai solusi digital untuk mengakses dan mendistribusikan
                        pengetahuan secara lebih efisien dan inklusif.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            easing: 'ease-in-out'
        });
    </script>
</body>
</html>
