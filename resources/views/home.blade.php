@extends('layouts.app')

@section('content')

<nav
    class="w-full flex justify-between items-center py-5 px-8 md:px-20 bg-black/95 backdrop-blur-sm text-white sticky top-0 z-50 shadow-sm">
    <div class="flex items-center gap-2">
        <div class="w-8 h-8 rounded-lg flex items-center justify-center">
        </div>
        <a href="/" class="text-xl font-black tracking-tighter uppercase">Tasty Food</a>
    </div>

    <div class="hidden md:flex items-center space-x-12">
        <a href="/"
            class="text-xs font-bold uppercase tracking-[0.2em] hover:text-yellow-500 transition-colors duration-300">Home</a>
        <a href="/tentang"
            class="text-xs font-bold uppercase tracking-[0.2em] hover:text-yellow-500 transition-colors duration-300">Tentang</a>
        <a href="/berita"
            class="text-xs font-bold uppercase tracking-[0.2em] hover:text-yellow-500 transition-colors duration-300">Berita</a>
        <a href="/galeri"
            class="text-xs font-bold uppercase tracking-[0.2em] hover:text-yellow-500 transition-colors duration-300">Galeri</a>
        <a href="/kontak"
            class="text-xs font-bold uppercase tracking-[0.2em] hover:text-yellow-500 transition-colors duration-300">Kontak</a>
    </div>

    <button class="md:hidden p-2 hover:bg-white/10 rounded-lg transition">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>
</nav>

<section class="relative min-h-[85vh] flex items-center px-8 md:px-20 py-12 overflow-hidden bg-white">
    <div class="max-w-2xl z-10">
        <span
            class="inline-block px-4 py-1.5 bg-yellow-100 text-yellow-700 text-[10px] font-black uppercase tracking-widest rounded-full mb-6">Premium
            Taste</span>
        <h2 class="text-7xl md:text-8xl font-black leading-[0.9] mb-6 uppercase tracking-tighter">
            Healthy <br>
            <span class="text-transparent" style="-webkit-text-stroke: 1.5px black;">Tasty Food</span>
        </h2>
        <p class="text-gray-500 mb-10 leading-relaxed text-lg max-w-md">
            Pengalaman kuliner terbaik dengan bahan organik pilihan untuk menjaga kesehatan tubuh Anda setiap hari.
        </p>
        <div class="flex gap-4">
            <a href="/tentang"
                class="bg-black text-white px-10 py-4 uppercase text-[11px] font-black tracking-[0.2em] hover:scale-105 active:scale-95 transition transform shadow-2xl">
                Tentang Kami
            </a>
        </div>
    </div>

    <div class="absolute -right-20 top-1/2 -translate-y-1/2 w-1/2 hidden md:block animate-pulse duration-[3000ms]">
        <img src="{{ asset('images/img-4.png') }}" class="w-full h-auto drop-shadow-[0_35px_35px_rgba(0,0,0,0.2)]"
            alt="Hero Food">
    </div>
</section>

<section class="py-32 text-center px-8 bg-white">
    <h3 class="text-sm font-black uppercase tracking-[0.4em] text-gray-400 mb-6">Discover Our Story</h3>
    <h4 class="text-4xl font-bold mb-8 uppercase tracking-tighter">Kualitas Adalah <br> Prioritas Utama Kami</h4>
    <p class="max-w-xl mx-auto text-gray-500 leading-loose mb-12 italic text-lg">
        "Makanan bukan hanya soal rasa, tapi soal bagaimana ia memberikan energi dan kebahagiaan bagi mereka yang
        menikmatinya."
    </p>
    <div class="w-12 h-1 bg-black mx-auto"></div>
</section>

<section class="relative py-40 bg-neutral-900 overflow-hidden">
    <div class="absolute inset-0 opacity-20"
        style="background-image: url('{{ asset('images/Group 70.png') }}'); background-size: cover;"></div>

    <div class="container mx-auto px-8 relative z-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        @foreach(['img-1.png', 'img-2.png', 'img-3.png', 'img-4.png'] as $img)
        <div
            class="bg-white/5 backdrop-blur-md p-10 rounded-2xl border border-white/10 text-center hover:bg-white hover:text-black transition-all duration-500 group">
            <img src="{{ asset('images/'.$img) }}"
                class="w-20 h-20 mx-auto rounded-full mb-8 border-2 border-white/20 group-hover:border-black/10 transition-colors object-cover">
            <h5 class="font-black text-xs uppercase tracking-widest mb-4">Quality Control</h5>
            <p class="text-xs opacity-60 group-hover:opacity-100">Standar internasional dalam pengolahan setiap menu
                kami.</p>
        </div>
        @endforeach
    </div>
</section>

<section class="py-32 px-8 md:px-20 bg-gray-50">
    <div class="flex justify-between items-end mb-16">
        <div>
            <h3 class="text-4xl font-black uppercase tracking-tighter">Berita Terbaru</h3>
            <div class="w-12 h-1 bg-yellow-500 mt-2"></div>
        </div>
        <a href="#" class="text-xs font-bold uppercase tracking-widest border-b-2 border-black">Lihat Semua</a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <div class="lg:col-span-7 group cursor-pointer">
            <div class="rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.1)] mb-8">
                <img src="{{ asset('images/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}"
                    class="w-full h-[500px] object-cover group-hover:scale-110 transition duration-1000">
            </div>
            <span class="text-yellow-600 font-black text-[10px] uppercase tracking-widest">Featured Post</span>
            <h4 class="text-3xl font-bold mt-4 mb-4 group-hover:text-yellow-600 transition">Cara Mengolah Sayuran Agar
                Vitamin Tetap Terjaga</h4>
            <p class="text-gray-500 text-sm leading-relaxed">Rahasia dapur professional dalam menjaga nutrisi makanan
                tetap maksimal...</p>
        </div>

        <div class="lg:col-span-5 flex flex-col gap-8">
            @foreach(['img-1.png', 'img-2.png'] as $img_sm)
            <div
                class="flex gap-6 items-center p-4 rounded-2xl hover:bg-white hover:shadow-xl transition duration-500 group cursor-pointer">
                <img src="{{ asset('images/'.$img_sm) }}" class="w-32 h-32 rounded-2xl object-cover shrink-0">
                <div>
                    <h5 class="font-bold text-lg leading-tight group-hover:text-yellow-600 transition">Tips Hidup Sehat
                        Dengan Diet Karbo</h5>
                    <p class="text-xs text-gray-400 mt-2">Baca Selengkapnya →</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-32 px-8 md:px-20 bg-white">
    <h3 class="text-center text-4xl font-black uppercase tracking-tighter mb-16">Our Gallery</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <img src="{{ asset('images/img-1.png') }}" class="w-full h-72 object-cover rounded-3xl">
        <img src="{{ asset('images/img-2.png') }}" class="w-full h-72 object-cover rounded-3xl mt-12">
        <img src="{{ asset('images/img-3.png') }}" class="w-full h-72 object-cover rounded-3xl">
        <img src="{{ asset('images/img-4.png') }}" class="w-full h-72 object-cover rounded-3xl mt-12">
    </div>
</section>

<footer class="bg-black text-white pt-32 pb-12 px-8 md:px-20">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-16 mb-20 border-b border-white/10 pb-20">
        <div class="col-span-1 md:col-span-1">
            <h4 class="text-2xl font-black mb-8">Tasty Food</h4>
            <p class="text-gray-500 text-sm leading-loose">Menghadirkan kelezatan bintang lima langsung ke meja makan
                Anda setiap hari.</p>
        </div>
        <div>
            <h5 class="font-bold text-xs uppercase tracking-[0.3em] text-gray-300 mb-8">Navigation</h5>
            <ul class="text-gray-500 text-xs space-y-4 font-bold uppercase tracking-widest">
                <li><a href="#" class="hover:text-white transition">Menu Card</a></li>
                <li><a href="#" class="hover:text-white transition">Order Now</a></li>
                <li><a href="#" class="hover:text-white transition">Locations</a></li>
            </ul>
        </div>
        <div>
            <h5 class="font-bold text-xs uppercase tracking-[0.3em] text-gray-300 mb-8">Support</h5>
            <ul class="text-gray-500 text-xs space-y-4 font-bold uppercase tracking-widest">
                <li><a href="#" class="hover:text-white transition">Help Center</a></li>
                <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                <li><a href="#" class="hover:text-white transition">Terms of Use</a></li>
            </ul>
        </div>
        <div class="bg-white/5 p-8 rounded-3xl border border-white/10">
            <h5 class="font-bold text-xs uppercase tracking-[0.3em] text-white mb-4">Newsletter</h5>
            <input type="text" placeholder="Email Address"
                class="bg-transparent border-b border-white/20 w-full py-2 text-sm focus:outline-none focus:border-yellow-500 transition mb-4">
            <button class="text-[10px] font-black uppercase tracking-widest text-yellow-500">Subscribe →</button>
        </div>
    </div>
    <div class="text-center text-[10px] font-bold uppercase tracking-[0.5em] text-gray-600">
        © 2026 Tasty Food Digital Experience. All Rights Reserved.
    </div>
</footer>

@endsection