@extends('layouts.app')

@section('content')

<nav class="w-full flex justify-between items-center py-6 px-10 md:px-20 bg-black text-white sticky top-0 z-50">
    <h1 class="text-2xl font-bold tracking-tighter uppercase">Tasty Food</h1>
    <div class="hidden md:flex space-x-8 uppercase text-sm font-bold tracking-widest">
        <a href="/" class="hover:text-gray-400 transition">Home</a>
        <a href="/tentang" class="text-gray-400">Tentang</a>
        <a href="/berita" class="hover:text-gray-400 transition">Berita</a>
        <a href="/galeri" class="hover:text-gray-400 transition">Galeri</a>
        <a href="/kontak" class="hover:text-gray-400 transition">Kontak</a>
    </div>
</nav>

<section class="relative h-[60vh] flex items-center px-10 md:px-20 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}" class="w-full h-full object-cover" alt="Tentang Kami Hero">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>

    <div class="relative z-10">
        <h2 class="text-5xl md:text-6xl font-bold text-white uppercase tracking-tighter">
            Tentang Kami
        </h2>
    </div>
</section>

<section class="py-24 px-10 md:px-20 bg-white">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
        <div class="space-y-6">
            <h3 class="text-3xl font-bold uppercase tracking-tighter">Tasty Food</h3>
            <p class="font-bold text-gray-800 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui
                diam convallis arcu, eget consectetur ex sem eget lacus.
            </p>
            <p class="text-gray-500 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui
                diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex.
                Fusce sit amet viverra ante.
            </p>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('images/brooke-lark-oaz0raysASk-unsplash.jpg') }}" class="w-full h-80 object-cover rounded-2xl shadow-xl"
                alt="Gallery 1">
            <img src="{{ asset('images/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" class="w-full h-80 object-cover rounded-2xl shadow-xl mt-12"
                alt="Gallery 2">
        </div>
    </div>
</section>

<section class="py-24 px-10 md:px-20 bg-gray-50">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
        <div class="grid grid-cols-2 gap-4 order-2 md:order-1">
            <img src="{{ asset('images/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" class="w-full h-64 object-cover rounded-2xl shadow-lg"
                alt="Visi 1">
            <img src="{{ asset('images/michele-blackwell-rAyCBQTH7ws-unsplash.jpg') }}" class="w-full h-64 object-cover rounded-2xl shadow-lg"
                alt="Visi 2">
        </div>
        <div class="space-y-6 order-1 md:order-2">
            <h3 class="text-3xl font-bold uppercase tracking-tighter">Visi</h3>
            <p class="text-gray-600 leading-loose">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus.
                Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur
                facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio.
            </p>
        </div>
    </div>
</section>

<section class="py-24 px-10 md:px-20 bg-white">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
        <div class="space-y-6">
            <h3 class="text-3xl font-bold uppercase tracking-tighter">Misi</h3>
            <p class="text-gray-600 leading-loose">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus.
                Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur
                facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio.
            </p>
        </div>
        <div>
            <img src="{{ asset('images/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" class="w-full h-80 object-cover rounded-3xl shadow-2xl"
                alt="Misi Image">
        </div>
    </div>
</section>

<footer class="bg-black text-white pt-24 pb-12 px-10 md:px-20">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 border-b border-gray-800 pb-16 mb-8">
        <div class="space-y-6">
            <h4 class="text-2xl font-bold uppercase tracking-tighter">Tasty Food</h4>
            <p class="text-gray-400 text-sm leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed nisl elementum, madius nisli.
            </p>
            <div class="flex space-x-4">
                <a href="#"
                    class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition">f</a>
                <a href="#"
                    class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-400 transition">t</a>
            </div>
        </div>

        <div>
            <h5 class="font-bold mb-8">Useful links</h5>
            <ul class="text-gray-400 space-y-4 text-sm">
                <li><a href="#" class="hover:text-white transition">Blog</a></li>
                <li><a href="#" class="hover:text-white transition">Hewan</a></li>
                <li><a href="#" class="hover:text-white transition">Galeri</a></li>
                <li><a href="#" class="hover:text-white transition">Testimonial</a></li>
            </ul>
        </div>

        <div>
            <h5 class="font-bold mb-8">Privacy</h5>
            <ul class="text-gray-400 space-y-4 text-sm">
                <li><a href="#" class="hover:text-white transition">Karir</a></li>
                <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-white transition">Kontak Kami</a></li>
                <li><a href="#" class="hover:text-white transition">Servis</a></li>
            </ul>
        </div>

        <div>
            <h5 class="font-bold mb-8">Contact Info</h5>
            <ul class="text-gray-400 space-y-4 text-sm">
                <li class="flex items-center gap-3">📧 tastyfood@gmail.com</li>
                <li class="flex items-center gap-3">📞 +62 812 3456 7890</li>
                <li class="flex items-center gap-3">📍 Kota Bandung, Jawa Barat</li>
            </ul>
        </div>
    </div>
    <p class="text-center text-gray-500 text-xs uppercase tracking-widest">
        Copyright ©2023 All rights reserved
    </p>
</footer>

@endsection