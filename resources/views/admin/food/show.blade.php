@extends('layouts.admin')

@section('title', 'Detail Menu - ' . $food->name)

@section('content')
<div class="max-w-6xl mx-auto fade-in">
    <!-- Header Controls -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <a href="{{ route('food.index') }}" class="glass-card inline-flex items-center gap-2 px-5 py-2.5 text-slate-600 hover:text-orange-600 rounded-xl transition-all font-semibold text-sm hover:-translate-y-1">
                <i class="fas fa-arrow-left"></i> Kembali ke Menu
            </a>
        </div>
        <div>
            <a href="{{ route('food.edit', $food->id) }}" class="inline-flex items-center gap-2 px-6 py-2.5 bg-gradient-to-r from-orange-500 to-orange-600 text-white rounded-xl font-bold text-sm shadow-lg shadow-orange-500/40 hover:shadow-orange-600/50 hover:-translate-y-1 transition-all">
                <i class="fas fa-pen-fancy"></i> Edit Menu
            </a>
        </div>
    </div>

    <!-- Main Content Card -->
    <div class="glass-card rounded-[2.5rem] border border-white/50 overflow-hidden relative shadow-sm hover:shadow-xl transition-shadow duration-500">
        <!-- Subtle Background Glow inside the card -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-orange-400/20 rounded-full mix-blend-multiply filter blur-3xl animate-[pulse_4s_ease-in-out_infinite]"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-300/20 rounded-full mix-blend-multiply filter blur-3xl animate-[pulse_5s_ease-in-out_infinite]"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 relative z-10">
            
            <!-- Left Side: Image (Span 5) -->
            <div class="lg:col-span-5 p-8 lg:p-10 flex items-center justify-center relative">
                <div class="relative w-full aspect-[4/5] max-w-md rounded-[2rem] overflow-hidden shadow-2xl group border-4 border-white/60">
                    @if($food->image)
                        <img src="{{ asset('storage/' . $food->image) }}" alt="{{ $food->name }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent opacity-70 group-hover:opacity-90 transition-opacity duration-500"></div>
                    @else
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-slate-400 bg-gradient-to-br from-slate-100 to-slate-200">
                            <div class="w-24 h-24 rounded-full bg-white/50 backdrop-blur-sm flex items-center justify-center mb-4 shadow-inner">
                                <i class="fas fa-camera text-4xl text-slate-300"></i>
                            </div>
                            <span class="text-sm font-bold uppercase tracking-widest text-slate-500">No Image</span>
                        </div>
                    @endif

                    <!-- Category Badge floating on image -->
                    <div class="absolute top-6 left-6 z-10">
                        <span class="px-5 py-2 bg-white/20 backdrop-blur-md border border-white/40 text-white text-[10px] font-black rounded-full shadow-lg uppercase tracking-widest">
                            {{ $food->category }}
                        </span>
                    </div>

                    <!-- Price floating on image (Bottom) -->
                    <div class="absolute bottom-6 left-6 right-6 z-10 transform translate-y-4 opacity-90 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-out">
                        <div class="bg-white/95 backdrop-blur-xl p-4 lg:p-5 rounded-2xl shadow-xl border border-white/80 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Harga Porsi</p>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-sm font-bold text-orange-500">Rp</span>
                                    <span class="text-2xl lg:text-3xl font-black text-slate-800 tracking-tighter">{{ number_format($food->price, 0, ',', '.') }}</span>
                                </div>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-orange-50 flex items-center justify-center text-orange-500 border border-orange-100">
                                <i class="fas fa-tag text-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Details (Span 7) -->
            <div class="lg:col-span-7 p-8 lg:p-12 flex flex-col justify-center border-t lg:border-t-0 lg:border-l border-white/40 bg-white/30 backdrop-blur-sm">
                
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="flex items-center gap-2 px-4 py-1.5 bg-emerald-500/10 text-emerald-600 border border-emerald-500/20 rounded-full text-[11px] font-black uppercase tracking-widest shadow-sm">
                            <div class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse shadow-[0_0_8px_rgba(16,185,129,0.8)]"></div>
                            Menu Aktif Tersedia
                        </div>
                    </div>
                    
                    <h1 class="text-4xl lg:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-slate-900 via-slate-800 to-slate-600 tracking-tight leading-[1.1] mb-6">
                        {{ $food->name }}
                    </h1>
                </div>

                <!-- Deskripsi Card -->
                <div class="bg-white/80 backdrop-blur-md rounded-[2rem] p-6 lg:p-8 border border-white mb-8 shadow-sm group hover:shadow-md transition-all duration-300">
                    <h3 class="text-xs font-black text-slate-800 uppercase tracking-widest mb-4 flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center text-orange-500">
                            <i class="fas fa-quote-left text-xs"></i>
                        </div>
                        Cerita Rasa
                    </h3>
                    @if($food->description)
                        <p class="text-slate-600 leading-relaxed text-[1.1rem] font-medium">{{ $food->description }}</p>
                    @else
                        <p class="text-slate-400 italic">Menu ini belum memiliki deskripsi cerita rasa.</p>
                    @endif
                </div>

                <!-- Info Metadata -->
                <div class="grid grid-cols-2 gap-4 lg:gap-6 mt-auto">
                    <div class="bg-white/50 backdrop-blur-md rounded-2xl p-5 border border-white/60 hover:bg-white/80 transition-colors group">
                        <div class="flex items-center gap-3 mb-2">
                            <i class="fas fa-calendar-plus text-slate-400 group-hover:text-orange-500 transition-colors"></i>
                            <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Ditambahkan</p>
                        </div>
                        <p class="text-sm lg:text-base font-black text-slate-800">{{ $food->created_at->format('d M Y') }}</p>
                        <p class="text-xs font-semibold text-slate-500">{{ $food->created_at->format('H:i') }} WIB</p>
                    </div>
                    
                    <div class="bg-white/50 backdrop-blur-md rounded-2xl p-5 border border-white/60 hover:bg-white/80 transition-colors group">
                        <div class="flex items-center gap-3 mb-2">
                            <i class="fas fa-clock-rotate-left text-slate-400 group-hover:text-orange-500 transition-colors"></i>
                            <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Pembaruan Terakhir</p>
                        </div>
                        <p class="text-sm lg:text-base font-black text-slate-800">{{ $food->updated_at->format('d M Y') }}</p>
                        <p class="text-xs font-semibold text-slate-500">{{ $food->updated_at->format('H:i') }} WIB</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection