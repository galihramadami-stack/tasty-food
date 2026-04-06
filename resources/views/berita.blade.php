@extends('layouts.app')

@section('content')

<nav class="w-full flex justify-between items-center py-6 px-10 md:px-20 bg-black text-white sticky top-0 z-50">
    <h1 class="text-2xl font-bold tracking-tighter uppercase">Tasty Food</h1>
    <div class="hidden md:flex space-x-8 uppercase text-sm font-bold tracking-widest">
        <a href="/" class="hover:text-gray-400 transition">Home</a>
        <a href="/tentang" class="hover:text-gray-400 transition">Tentang</a>
        <a href="/berita" class="text-gray-400">Berita</a>
        <a href="/galeri" class="hover:text-gray-400 transition">Galeri</a>
        <a href="/kontak" class="hover:text-gray-400 transition">Kontak</a>
    </div>
</nav>

<section class="relative h-[50vh] flex items-center px-10 md:px-20 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}" class="w-full h-full object-cover" alt="Berita Kami Hero">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="relative z-10">
        <h2 class="text-5xl md:text-6xl font-bold text-white uppercase tracking-tighter">Berita Kami</h2>
    </div>
</section>

<section class="py-20 px-10 md:px-20 bg-white">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="rounded-3xl overflow-hidden shadow-2xl">
            <img src="{{ asset('images/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" class="w-full h-[400px] object-cover" alt="Berita Utama">
        </div>
        <div class="space-y-6">
            <h3 class="text-3xl font-bold uppercase leading-tight">Apa Saja Makanan Khas Nusantara?</h3>
            <p class="text-gray-600 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui
                diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex.
                Fusce sit amet viverra ante.
            </p>
            <p class="text-gray-500 leading-relaxed italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui
                diam convallis arcu, eget consectetur ex sem eget lacus.
            </p>
            <a href="#"
                class="inline-block bg-black text-white px-8 py-3 uppercase text-xs font-bold tracking-widest hover:bg-gray-800 transition">
                Baca Selengkapnya
            </a>
        </div>
    </div>
</section>

<section class="py-20 px-10 md:px-20 bg-gray-50">
    <h3 class="text-2xl font-bold uppercase mb-12 tracking-tighter">Berita Lainnya</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach(range(1, 8) as $item)
        <div
            class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 flex flex-col">
            <img src="{{ asset('images/img-4.png'.(($item % 4) + 1).'.png') }}" class="w-full h-48 object-cover">
            <div class="p-6 flex-1 flex flex-col">
                <h4 class="font-bold text-lg uppercase mb-3 leading-tight">Lorem Ipsum</h4>
                <p class="text-gray-500 text-sm mb-6 line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                </p>
                <div class="mt-auto flex justify-between items-center">
                    <a href="#" class="text-yellow-600 font-bold text-xs uppercase hover:underline">Baca
                        selengkapnya</a>
                    <span class="text-gray-300 text-xl">...</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<footer class="bg-black text-white pt-20 pb-10 px-10 md:px-20">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
        <div class="space-y-6">
            <h4 class="text-2xl font-bold uppercase">Tasty Food</h4>
            <p class="text-gray-400 text-sm leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Aenean sed nisl elementum.</p>
            <div class="flex space-x-4">
                <div
                    class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition cursor-pointer">
                    f</div>
                <div
                    class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-400 transition cursor-pointer">
                    t</div>
            </div>
        </div>
        <div>
            <h5 class="font-bold mb-8 uppercase text-sm tracking-widest">Useful links</h5>
            <ul class="text-gray-400 space-y-4 text-sm">
                <li><a href="#" class="hover:text-white transition">Blog</a></li>
                <li><a href="#" class="hover:text-white transition">Hewan</a></li>
                <li><a href="#" class="hover:text-white transition">Galeri</a></li>
                <li><a href="#" class="hover:text-white transition">Testimonial</a></li>
            </ul>
        </div>
        <div>
            <h5 class="font-bold mb-8 uppercase text-sm tracking-widest">Privacy</h5>
            <ul class="text-gray-400 space-y-4 text-sm">
                <li><a href="#" class="hover:text-white transition">Karir</a></li>
                <li><a href="/tentang" class="hover:text-white transition">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-white transition">Kontak Kami</a></li>
                <li><a href="#" class="hover:text-white transition">Servis</a></li>
            </ul>
        </div>
        <div>
            <h5 class="font-bold mb-8 uppercase text-sm tracking-widest">Contact Info</h5>
            <ul class="text-gray-400 space-y-4 text-sm">
                <li class="flex items-center gap-3">📧 tastyfood@gmail.com</li>
                <li class="flex items-center gap-3">📞 +62 812 3456 7890</li>
                <li class="flex items-center gap-3">📍 Kota Bandung, Jawa Barat</li>
            </ul>
        </div>
    </div>
    <div class="text-center border-t border-gray-800 pt-8">
        <p class="text-gray-500 text-xs uppercase tracking-widest">Copyright ©2023 All rights reserved</p>
    </div>
</footer>

@endsection