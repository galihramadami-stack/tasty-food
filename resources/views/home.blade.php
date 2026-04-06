<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food | Healthy & Delicious</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Custom Footer Styles */
        .footer-link {
            color: #6c757d;
            text-decoration: none;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .footer-link:hover {
            color: #fff;
            padding-left: 5px;
        }

        .social-box {
            width: 40px;
            height: 40px;
            background: #222;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            text-decoration: none;
            transition: 0.3s;
        }

        .social-box:hover {
            background: #fff;
            color: #000;
            transform: translateY(-3px);
        }

        /* Utility untuk grid footer agar tidak pecah tanpa bootstrap full */
        .footer-grid {
            display: grid;
            gap: 2rem;
        }

        @media (min-width: 768px) {
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .footer-grid {
                grid-template-columns: 2fr 1fr 1fr 2fr;
            }
        }
    </style>
</head>

<body class="bg-white text-gray-900">

    <nav class="flex justify-between items-center px-10 py-8 max-w-7xl mx-auto">
        <div class="text-2xl font-extrabold tracking-tighter italic">
            TASTY FOOD
        </div>
        <div class="hidden md:flex space-x-10 text-xs font-bold uppercase tracking-[0.2em] text-gray-400">
            <a href="{{ url('/home') }}" class="text-black border-b-2 border-black pb-1">Home</a>
            <a href="{{ url('/tentang') }}" class="hover:text-black transition">Tentang</a>
            <a href="{{ url('/berita') }}" class="hover:text-black transition">Berita</a>
            <a href="#" class="hover:text-black transition">Galeri</a>
            <a href="#" class="hover:text-black transition">Kontak</a>
        </div>
    </nav>

    <header class="relative flex flex-col md:flex-row items-center px-10 py-12 max-w-7xl mx-auto min-h-[600px]">
        <div class="md:w-1/2 z-10">
            <div class="w-16 h-1 bg-black mb-6"></div>
            <h1 class="text-5xl md:text-7xl font-light text-gray-400 leading-none uppercase">Healthy</h1>
            <h2 class="text-6xl md:text-8xl font-black text-black uppercase leading-[0.8] mb-8 tracking-tighter">Tasty
                Food</h2>
            <p class="text-gray-500 text-sm leading-relaxed max-w-md mb-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui
                diam convallis arcu, eget consectetur ex sem.
            </p>
            <a href="{{ url('/tentang') }}"
                class="inline-block bg-black text-white px-10 py-4 text-xs font-bold uppercase tracking-widest hover:bg-gray-800 transition shadow-xl text-center">
                Tentang Kami
            </a>
        </div>

        <div class="md:w-1/2 relative mt-16 md:mt-0 flex justify-center">
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[110%] h-[110%] bg-gray-100 rounded-full -z-10">
            </div>
            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c" alt="Healthy Food"
                class="w-full max-w-[500px] aspect-square object-cover rounded-full shadow-2xl border-[15px] border-white">
        </div>
    </header>

    <section class="py-24 px-10 text-center max-w-4xl mx-auto">
        <h3 class="text-3xl font-extrabold uppercase tracking-widest mb-8">Tentang Kami</h3>
        <p class="text-gray-600 leading-loose text-lg italic px-4">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui
            diam convallis arcu, eget consectetur ex sem. Nullam vitae dignissim neque, sed pulvinar sem."
        </p>
        <div class="mt-8 flex justify-center">
            <div class="w-12 h-1 bg-black"></div>
        </div>
    </section>

    <section class="relative py-40 px-10 min-h-[600px] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836"
                class="w-full h-full object-cover brightness-[0.25]">
        </div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 relative z-10 w-full">
            @php
            $cards = [
            ['title' => 'Salad Segar', 'img' => 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd'],
            ['title' => 'Sayuran', 'img' => 'https://images.unsplash.com/photo-1490645935967-10de6ba17061'],
            ['title' => 'COFFEE', 'img' => 'https://images.unsplash.com/photo-1547592166-23ac45744acd'],
            ['title' => 'LOREM IPSUM', 'img' => 'https://images.unsplash.com/photo-1467003909585-2f8a72700288']
            ];
            @endphp

            @foreach($cards as $card)
            <div
                class="bg-white p-8 pt-20 rounded-[40px] shadow-2xl text-center relative mt-16 md:mt-0 group hover:-translate-y-2 transition-transform duration-300">
                <div
                    class="absolute -top-16 left-1/2 -translate-x-1/2 w-32 h-32 border-[8px] border-white rounded-full overflow-hidden shadow-lg bg-gray-200">
                    <img src="{{ $card['img'] }}?w=400&auto=format&fit=crop" class="w-full h-full object-cover">
                </div>
                <h4 class="font-black text-xl mb-4 tracking-tight uppercase">{{ $card['title'] }}</h4>
                <p class="text-gray-400 text-xs leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                </p>
            </div>
            @endforeach
        </div>
    </section>

    <section class="py-24 max-w-7xl mx-auto px-10">
        <h3 class="text-3xl font-extrabold uppercase tracking-widest text-center mb-16">Berita Kami</h3>
        <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/2 relative group overflow-hidden rounded-[40px] shadow-2xl h-[550px]">
                <img src="https://images.unsplash.com/photo-1490818387583-1baba5e638af"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent p-10 flex flex-col justify-end text-white">
                    <h4 class="text-2xl font-extrabold leading-tight uppercase mb-4">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit</h4>
                    <p class="text-sm text-gray-300 mb-6 line-clamp-2">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Phasellus ornare, augue eu rutrum commodo.</p>
                    <a href="#" class="text-yellow-400 font-bold text-xs uppercase tracking-widest">Baca Selengkapnya
                        →</a>
                </div>
            </div>

            <div class="md:w-1/2 grid grid-cols-2 gap-6">
                @for($i = 1; $i <= 4; $i++) <div
                    class="bg-white border border-gray-100 rounded-[35px] overflow-hidden hover:shadow-2xl transition-shadow p-5 flex flex-col">
                    <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?w=400"
                        class="w-full h-36 object-cover rounded-[25px] mb-4">
                    <h5 class="font-bold text-sm uppercase mb-2">Lorem Ipsum</h5>
                    <p class="text-[10px] text-gray-500 mb-4 line-clamp-2">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.</p>
                    <a href="#" class="text-yellow-500 font-extrabold text-[10px] uppercase mt-auto">Baca
                        Selengkapnya</a>
            </div>
            @endfor
        </div>
        </div>
    </section>

    <section class="py-24 max-w-7xl mx-auto px-10">
        <h3 class="text-3xl font-extrabold uppercase tracking-widest text-center mb-16">Galeri Kami</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @php
            $gallery = [
            'https://images.unsplash.com/photo-1504674900247-0877df9cc836',
            'https://images.unsplash.com/photo-1543353071-873f17a7a088',
            'https://images.unsplash.com/photo-1555939594-58d7cb561ad1',
            'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe',
            'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38',
            'https://images.unsplash.com/photo-1547592166-23ac45744acd'
            ];
            @endphp

            @foreach($gallery as $url)
            <div class="overflow-hidden rounded-[30px] group shadow-lg aspect-[4/3]">
                <img src="{{ $url }}?w=600&auto=format&fit=crop"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                    alt="Tasty Food Gallery">
            </div>
            @endforeach
        </div>
        <div class="mt-16 text-center">
            <button
                class="bg-black text-white px-16 py-4 text-xs font-bold uppercase tracking-widest shadow-xl hover:bg-gray-900 transition">
                Lihat Lebih Banyak
            </button>
        </div>
    </section>

    <footer class="bg-black text-white pt-20 pb-10 px-10 mt-20">
        <div class="max-w-7xl mx-auto">
            <div class="footer-grid">
                <div>
                    <h4 class="text-2xl font-black italic uppercase mb-6 tracking-tighter">Tasty Food</h4>
                    <p class="text-gray-400 text-sm leading-relaxed mb-8 pr-10">
                        Tempat terbaik untuk mengeksplorasi dunia kuliner nusantara dan internasional dengan ulasan
                        mendalam dari para ahli masak.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="social-box"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-box"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>

                <div>
                    <h6 class="font-bold text-white uppercase mb-8 tracking-widest text-sm">Useful links</h6>
                    <ul class="space-y-4 list-none p-0">
                        <li><a href="#" class="footer-link">Hewan</a></li>
                        <li><a href="#" class="footer-link">Galeri</a></li>
                        <li><a href="#" class="footer-link">Testimonial</a></li>
                    </ul>
                </div>

                <div>
                    <h6 class="font-bold text-white uppercase mb-8 tracking-widest text-sm">Privacy</h6>
                    <ul class="space-y-4 list-none p-0">
                        <li><a href="#" class="footer-link">Karir</a></li>
                        <li><a href="#" class="footer-link">Tentang Kami</a></li>
                        <li><a href="#" class="footer-link">Kontak Kami</a></li>
                        <li><a href="#" class="footer-link">Servis</a></li>
                    </ul>
                </div>

                <div>
                    <h6 class="font-bold text-white uppercase mb-8 tracking-widest text-sm">Contact Info</h6>
                    <ul class="space-y-5 list-none p-0">
                        <li class="flex items-center text-gray-400 text-sm">
                            <i class="bi bi-envelope-fill mr-4 text-white"></i> tastyfood@gmail.com
                        </li>
                        <li class="flex items-center text-gray-400 text-sm">
                            <i class="bi bi-telephone-fill mr-4 text-white"></i> +62 89528446317
                        </li>
                        <li class="flex items-start text-gray-400 text-sm">
                            <i class="bi bi-geo-alt-fill mr-4 text-white"></i> Kota Bandung, Jawa Barat
                        </li>
                    </ul>
                </div>
            </div>

            <div
                class="border-t border-gray-800 mt-20 pt-8 text-center text-gray-500 text-[10px] uppercase tracking-widest">
                COPYRIGHT ©2026 ALL RIGHTS RESERVED | TASTY FOOD
            </div>
        </div>
    </footer>

</body>

</html>