@extends('layouts.admin')

@section('title', 'Daftar Menu Makanan - Tasty Admin')

@section('content')
<div class="glass-card rounded-2xl overflow-hidden shadow-sm">
    <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-gradient-to-r from-slate-50/50 to-white">
        <div>
            <h3 class="text-lg font-black text-slate-900 tracking-tight">Daftar Menu Makanan</h3>
            <p class="text-sm text-slate-500 mt-1">Kelola semua menu makanan yang tersedia di sistem</p>
        </div>
        <a href="{{ route('food.create') }}" class="px-5 py-2.5 bg-gradient-to-r from-orange-500 to-orange-600 text-white text-sm font-bold rounded-xl hover:from-orange-600 hover:to-orange-700 transition-all shadow-md hover:shadow-lg shadow-orange-500/30 flex items-center gap-2">
            <i class="fas fa-plus"></i> Tambah Menu
        </a>
    </div>
    
    @if(session('success'))
    <div class="p-4 mx-8 mt-4 mb-2 bg-green-50 text-green-700 border border-green-200 rounded-lg flex items-center gap-3">
        <i class="fas fa-check-circle"></i>
        {{ session('success') }}
    </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-slate-50/80 border-b border-slate-100">
                <tr class="text-slate-600 font-bold text-xs uppercase tracking-wider">
                    <th class="px-8 py-5">Gambar</th>
                    <th class="px-8 py-5">Nama Menu</th>
                    <th class="px-8 py-5">Kategori</th>
                    <th class="px-8 py-5">Harga</th>
                    <th class="px-8 py-5 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($foods as $food)
                <tr class="hover:bg-gradient-to-r hover:from-orange-50/50 hover:to-transparent transition-colors group">
                    <td class="px-8 py-5">
                        @if($food->image)
                            <img src="{{ asset('storage/' . $food->image) }}" alt="{{ $food->name }}" class="w-16 h-16 object-cover rounded-lg shadow-sm">
                        @else
                            <div class="w-16 h-16 bg-slate-100 rounded-lg flex items-center justify-center text-slate-400">
                                <i class="fas fa-image text-xl"></i>
                            </div>
                        @endif
                    </td>
                    <td class="px-8 py-5 font-bold text-slate-900">{{ $food->name }}</td>
                    <td class="px-8 py-5">
                        <span class="inline-block px-3 py-1 bg-slate-100 text-slate-700 text-xs font-bold rounded-lg">{{ $food->category }}</span>
                    </td>
                    <td class="px-8 py-5 text-slate-700 font-bold">Rp {{ number_format($food->price, 0, ',', '.') }}</td>
                    <td class="px-8 py-5 text-center">
                        <div class="flex items-center justify-center gap-2">
                            <a href="{{ route('food.show', $food->id) }}" class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('food.edit', $food->id) }}" class="p-2 text-slate-400 hover:text-orange-600 hover:bg-orange-50 rounded-lg transition-colors" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('food.destroy', $food->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-8 py-10 text-center text-slate-500">Belum ada menu makanan yang ditambahkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
