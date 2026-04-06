@extends('layouts.app')

@section('title', 'Kontak - Tasty Food')

@section('content')
<section class="relative h-[350px] flex items-center px-10 mb-20">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?q=80&w=2070"
            class="w-full h-full object-cover brightness-[0.3]">
    </div>
    <div class="max-w-7xl mx-auto w-full relative z-10">
        <h1 class="text-5xl font-black text-white uppercase tracking-tighter italic">Kontak Kami</h1>
    </div>
</section>

<section class="py-10 px-10 max-w-7xl mx-auto">
    <h2 class="text-2xl font-black uppercase mb-10 tracking-tight">Kontak Kami</h2>

    <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-4">
            <input type="text" placeholder="Subject"
                class="w-full border-2 border-gray-100 rounded-xl px-5 py-4 focus:border-black outline-none transition text-sm font-light">
            <input type="text" placeholder="Name"
                class="w-full border-2 border-gray-100 rounded-xl px-5 py-4 focus:border-black outline-none transition text-sm font-light">
            <input type="email" placeholder="Email"
                class="w-full border-2 border-gray-100 rounded-xl px-5 py-4 focus:border-black outline-none transition text-sm font-light">
        </div>

        <div>
            <textarea placeholder="Message"
                class="w-full h-full border-2 border-gray-100 rounded-xl px-5 py-4 focus:border-black outline-none transition text-sm font-light min-h-[180px]"></textarea>
        </div>

        <div class="md:col-span-2">
            <button type="submit"
                class="w-full bg-black text-white font-bold uppercase py-4 rounded-xl tracking-[0.4em] hover:bg-gray-800 transition shadow-lg text-xs">
                Kirim
            </button>
        </div>
    </form>
</section>

<section class="py-24 bg-white px-10">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-16 text-center">
        <div class="flex flex-col items-center">
            <div
                class="w-20 h-20 bg-black rounded-full flex items-center justify-center mb-6 shadow-2xl text-white text-2xl">
                <i class="bi bi-envelope-fill"></i>
            </div>
            <h4 class="font-black uppercase mb-2 tracking-widest text-sm">Email</h4>
            <p class="text-gray-500 text-xs italic">tastyfood@gmail.com</p>
        </div>

        <div class="flex flex-col items-center">
            <div
                class="w-20 h-20 bg-black rounded-full flex items-center justify-center mb-6 shadow-2xl text-white text-2xl">
                <i class="bi bi-telephone-fill"></i>
            </div>
            <h4 class="font-black uppercase mb-2 tracking-widest text-sm">Phone</h4>
            <p class="text-gray-500 text-xs italic">+62 812 3456 7890</p>
        </div>

        <div class="flex flex-col items-center">
            <div
                class="w-20 h-20 bg-black rounded-full flex items-center justify-center mb-6 shadow-2xl text-white text-2xl">
                <i class="bi bi-geo-alt-fill"></i>
            </div>
            <h4 class="font-black uppercase mb-2 tracking-widest text-sm">Location</h4>
            <p class="text-gray-500 text-xs italic">Kota Bandung, Jawa Barat</p>
        </div>
    </div>
</section>

<section class="px-10 pb-32">
    <div
        class="max-w-7xl mx-auto rounded-[40px] overflow-hidden shadow-2xl h-[450px] border-[10px] border-white relative">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d107.573116!3d-6.903444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e639825488d3%3A0x3015760a348b110!2sBandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1700000000000"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
</section>
@endsection