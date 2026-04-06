<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food | Galeri Kami</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Custom Swiper Button agar putih bulat */
        .swiper-button-next,
        .swiper-button-prev {
            background-color: white;
            width: 50px !important;
            height: 50px !important;
            border-radius: 50%;
            color: black !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 20px !important;
            font-weight: bold;
        }
    </style>
</head>

<body class="bg-white">

    <header class="relative h-[450px] bg-cover bg-center px-12"
        style="background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2070&auto=format&fit=crop');">

        <nav class="flex justify-between items-center py-8 text-white relative z-10">
            <div class="text-2xl font-black italic tracking-tighter uppercase">TASTY FOOD</div>
            <ul class="hidden md:flex space-x-10 text-xs font-bold uppercase tracking-[0.2em]">
                <li><a href="{{ url('/home') }}" class="hover:text-gray-300">HOME</a></li>
                <li><a href="{{ url('/tentang') }}" class="hover:text-gray-300">TENTANG</a></li>
                <li><a href="{{ url('/berita') }}" class="hover:text-gray-300">BERITA</a></li>
                <li><a href="{{ url('/galeri') }}" class="border-b-2 border-white pb-1">GALERI</a></li>
                <li><a href="{{ url('/kontak') }}" class="hover:text-gray-300">KONTAK</a></li>
            </ul>
        </nav>

        <div class="absolute bottom-16 left-12 z-10">
            <h1 class="text-6xl font-extrabold text-white uppercase tracking-tighter">GALERI KAMI</h1>
        </div>

        <div class="absolute inset-0 bg-black/40"></div>
    </header>

    <main class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="swiper mySwiper mb-16">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rounded-[50px] overflow-hidden shadow-2xl h-[500px]">
                            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c"
                                class="w-full h-full object-cover" alt="Food 1">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-[50px] overflow-hidden shadow-2xl h-[500px]">
                            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd"
                                class="w-full h-full object-cover" alt="Food 2">
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                @php
                $gambarGaleri = [
                'photo-1490645935967-10de6ba17061', 'photo-1547592166-23ac45744acd',
                'photo-1504674900247-0877df9cc836', 'photo-1540189549336-e6e99c3679fe',
                'photo-1565299624946-b28f40a0ae38', 'photo-1555939594-58d7cb561ad1',
                'photo-1493770348161-369560ae357d', 'photo-1543353071-873f17a7a088'
                ];
                @endphp

                @foreach($gambarGaleri as $img)
                <div class="aspect-square rounded-[40px] overflow-hidden shadow-lg group">
                    <img src="https://images.unsplash.com/{{ $img }}?w=600&auto=format&fit=crop"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Tasty Food Gallery">
                </div>
                @endforeach
            </div>
        </div>
    </main>

    <footer class="bg-black text-white pt-16 pb-8">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <h4 class="font-bold uppercase mb-6">Tasty Food</h4>
                <p class="text-xs text-gray-400 leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus ornare, augue eu rutrum commodo.</p>
            </div>
            <div>
                <h4 class="font-bold uppercase mb-6 text-sm">Useful Links</h4>
                <ul class="text-xs text-gray-400 space-y-3">
                    <li class="hover:text-white cursor-pointer transition">Blog</li>
                    <li class="hover:text-white cursor-pointer transition">Hewan</li>
                    <li class="hover:text-white cursor-pointer transition">Galeri</li>
                    <li class="hover:text-white cursor-pointer transition">Testimonial</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold uppercase mb-6 text-sm">Privacy</h4>
                <ul class="text-xs text-gray-400 space-y-3">
                    <li class="hover:text-white cursor-pointer transition">Karir</li>
                    <li class="hover:text-white cursor-pointer transition">Tentang Kami</li>
                    <li class="hover:text-white cursor-pointer transition">Kontak Kami</li>
                    <li class="hover:text-white cursor-pointer transition">Servis</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold uppercase mb-6 text-sm">Contact Info</h4>
                <ul class="text-xs text-gray-400 space-y-4">
                    <li>✉ tastyfood@gmail.com</li>
                    <li>✆ +62 89528446317</li>
                    <li>📍 Kota Bandung, Jawa Barat</li>
                </ul>
            </div>
        </div>
        <div
            class="mt-16 text-center text-[10px] text-gray-600 border-t border-gray-800 pt-8 uppercase tracking-widest">
            Copyright ©2023 All rights reserved
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 3000,
            },
        });
    </script>
</body>

</html>