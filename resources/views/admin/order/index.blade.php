@extends('layouts.admin')

@section('title', 'Daftar Pesanan - Tasty Admin')

@section('content')
<div class="glass-card rounded-2xl overflow-hidden shadow-sm">
    <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-gradient-to-r from-slate-50/50 to-white">
        <div>
            <h3 class="text-lg font-black text-slate-900 tracking-tight">Daftar Pesanan</h3>
            <p class="text-sm text-slate-500 mt-1">Kelola semua pesanan pelanggan di sini</p>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-slate-50/80 border-b border-slate-100">
                <tr class="text-slate-600 font-bold text-xs uppercase tracking-wider">
                    <th class="px-8 py-5">ID Pesanan</th>
                    <th class="px-8 py-5">Tanggal</th>
                    <th class="px-8 py-5">Status</th>
                    <th class="px-8 py-5 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($orders as $order)
                <tr class="hover:bg-gradient-to-r hover:from-orange-50/50 hover:to-transparent transition-colors group">
                    <td class="px-8 py-5 font-bold text-slate-900">#{{ $order->id }}</td>
                    <td class="px-8 py-5 text-slate-500">{{ $order->created_at->format('d M Y H:i') }}</td>
                    <td class="px-8 py-5">
                        @if(($order->status ?? 'menunggu') == 'selesai')
                            <span class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-lg">Selesai</span>
                        @elseif(($order->status ?? 'menunggu') == 'proses')
                            <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 text-xs font-bold rounded-lg">Proses</span>
                        @elseif(($order->status ?? 'menunggu') == 'batal')
                            <span class="inline-block px-3 py-1 bg-red-100 text-red-700 text-xs font-bold rounded-lg">Batal</span>
                        @else
                            <span class="inline-block px-3 py-1 bg-orange-100 text-orange-700 text-xs font-bold rounded-lg">Menunggu</span>
                        @endif
                    </td>
                    <td class="px-8 py-5 text-center">
                        <div class="flex items-center justify-center gap-2">
                            <a href="{{ route('admin.order.show', $order->id) }}" class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-8 py-10 text-center text-slate-500">Belum ada pesanan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
