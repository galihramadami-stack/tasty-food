<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Tasty Food</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <header class="relative h-[350px] bg-gray-900">
        <div class="absolute inset-0 bg-black/50 z-10"></div>

        <img src="https://picsum.photos/id/488/1200/500" class="absolute inset-0 w-full h-full object-cover z-0">

        <div class="relative z-20 max-w-6xl mx-auto px-6 h-full flex flex-col">
            <nav class="flex justify-between items-center py-6">
                <div class="text-xl font-bold text-white uppercase">Tasty Food</div>
                <div class="space-x-6 text-sm font-semibold text-white/90 uppercase">
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ url('/tentang') }}" class="border-b-2 border-white">Tentang</a>
                    <a href="{{ url('/berita') }}">Berita</a>
                    <a href="#">Galeri</a>
                    <a href="#">Kontak</a>
                </div>
            </nav>

            <div class="mt-auto mb-12">
                <h1 class="text-4xl md:text-5xl font-extrabold text-white uppercase">Tentang Kami</h1>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-20 space-y-24">

        <section class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-2xl font-bold uppercase mb-6">Tasty Food</h2>
                <div class="text-sm text-gray-600 leading-relaxed space-y-4">
                    <p class="font-semibold text-gray-900">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                        commodo, dui diam convallis arcu.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                        commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim
                        neque, vel luctus ex.
                    </p>
                </div>
            </div>
            <div class="flex gap-4">
                <img src="https://picsum.photos/id/493/300/400" class="w-1/2 h-80 object-cover rounded-3xl shadow-md">
                <img src="https://picsum.photos/id/292/300/400"
                    class="w-1/2 h-80 object-cover rounded-3xl shadow-md mt-10">
            </div>
        </section>

        <section class="grid md:grid-cols-2 gap-12 items-center">
            <div class="grid grid-cols-2 gap-4 order-2 md:order-1">
                <img src="https://picsum.photos/id/429/300/300" class="w-full h-48 object-cover rounded-2xl">
                <img src="https://picsum.photos/id/431/300/300" class="w-full h-48 object-cover rounded-2xl">
            </div>
            <div class="order-1 md:order-2">
                <h2 class="text-2xl font-bold uppercase mb-6">Visi</h2>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus
                    tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et
                    suscipit.
                </p>
            </div>
        </section>

        <section class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-2xl font-bold uppercase mb-6">Misi</h2>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus
                    tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et
                    suscipit.
                </p>
            </div>
            <div>
                <img src="https://picsum.photos/id/163/600/350" class="w-full h-72 object-cover rounded-3xl shadow-md">
            </div>
        </section>

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
                    <li>Blog</li>
                    <li>Hewan</li>
                    <li>Galeri</li>
                    <li>Testimonial</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold uppercase mb-6 text-sm">Privacy</h4>
                <ul class="text-xs text-gray-400 space-y-3">
                    <li>Karir</li>
                    <li>Tentang Kami</li>
                    <li>Kontak Kami</li>
                    <li>Servis</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold uppercase mb-6 text-sm">Contact Info</h4>
                <ul class="text-xs text-gray-400 space-y-4">
                    <li>✉ tastyfood@gmail.com</li>
                    <li>✆ +62 812 3456 7890</li>
                    <li>📍 Kota Bandung, Jawa Barat</li>
                </ul>
            </div>
        </div>
        <div
            class="mt-16 text-center text-[10px] text-gray-600 border-t border-gray-800 pt-8 uppercase tracking-widest">
            Copyright ©2023 All rights reserved
        </div>
    </footer>

</body>

</html>