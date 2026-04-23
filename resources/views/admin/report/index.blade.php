@extends('layouts.admin')

@section('title', 'Laporan - Tasty Admin')

@section('content')
<div class="mb-8">
    <h2 class="text-2xl font-black text-slate-900 tracking-tight">Ringkasan Laporan</h2>
    <p class="text-slate-500 text-sm mt-1">Metrik kinerja dan penjualan restoran Anda.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Pendapatan -->
    <div class="glass-card p-6 rounded-2xl flex items-center gap-4 border border-slate-200">
        <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center text-green-600 text-2xl">
            <i class="fas fa-money-bill-wave"></i>
        </div>
        <div>
            <p class="text-sm text-slate-500 font-bold uppercase">Total Pendapatan</p>
            <h3 class="text-2xl font-black text-slate-900 mt-1">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</h3>
        </div>
    </div>

    <!-- Total Pesanan -->
    <div class="glass-card p-6 rounded-2xl flex items-center gap-4 border border-slate-200">
        <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-2xl">
            <i class="fas fa-shopping-bag"></i>
        </div>
        <div>
            <p class="text-sm text-slate-500 font-bold uppercase">Total Pesanan</p>
            <h3 class="text-2xl font-black text-slate-900 mt-1">{{ $totalOrders }}</h3>
        </div>
    </div>

    <!-- Pesanan Selesai -->
    <div class="glass-card p-6 rounded-2xl flex items-center gap-4 border border-slate-200">
        <div class="w-14 h-14 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 text-2xl">
            <i class="fas fa-check-circle"></i>
        </div>
        <div>
            <p class="text-sm text-slate-500 font-bold uppercase">Pesanan Selesai</p>
            <h3 class="text-2xl font-black text-slate-900 mt-1">{{ $completedOrders }}</h3>
        </div>
    </div>

    <!-- Pesanan Menunggu -->
    <div class="glass-card p-6 rounded-2xl flex items-center gap-4 border border-slate-200">
        <div class="w-14 h-14 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 text-2xl">
            <i class="fas fa-clock"></i>
        </div>
        <div>
            <p class="text-sm text-slate-500 font-bold uppercase">Pesanan Menunggu</p>
            <h3 class="text-2xl font-black text-slate-900 mt-1">{{ $pendingOrders }}</h3>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Top 5 Menu Populer -->
    <div class="glass-card rounded-2xl border border-slate-200 p-6">
        <h3 class="text-lg font-black text-slate-900 mb-4 border-b border-slate-100 pb-2"><i class="fas fa-star text-orange-400 mr-2"></i> 5 Menu Terlaris</h3>
        <ul class="space-y-4">
            @forelse($topFoods as $food)
            <li class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    @if($food->image)
                        <img src="{{ asset('storage/' . $food->image) }}" class="w-12 h-12 object-cover rounded-lg shadow-sm" alt="{{ $food->name }}">
                    @else
                        <div class="w-12 h-12 bg-slate-100 rounded-lg flex items-center justify-center text-slate-400"><i class="fas fa-utensils"></i></div>
                    @endif
                    <div>
                        <p class="font-bold text-slate-900 text-sm">{{ $food->name }}</p>
                        <p class="text-xs text-slate-500">Rp {{ number_format($food->price, 0, ',', '.') }}</p>
                    </div>
                </div>
                <div class="text-right">
                    <span class="inline-block bg-orange-100 text-orange-700 text-xs font-bold px-2 py-1 rounded-md">{{ $food->sold }} terjual</span>
                </div>
            </li>
            @empty
            <p class="text-sm text-slate-500 text-center py-4">Belum ada menu yang terjual.</p>
            @endforelse
        </ul>
    </div>

    <!-- 10 Pesanan Terakhir -->
    <div class="glass-card rounded-2xl border border-slate-200 p-6">
        <h3 class="text-lg font-black text-slate-900 mb-4 border-b border-slate-100 pb-2"><i class="fas fa-history text-blue-400 mr-2"></i> 10 Pesanan Terakhir</h3>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="text-xs text-slate-500 uppercase bg-slate-50">
                    <tr>
                        <th class="px-4 py-2">Pelanggan</th>
                        <th class="px-4 py-2">Total</th>
                        <th class="px-4 py-2">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($recentOrders as $order)
                    <tr class="hover:bg-slate-50">
                        <td class="px-4 py-3 font-medium text-slate-900">{{ $order->customer_name }}</td>
                        <td class="px-4 py-3 font-bold text-slate-700">Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                        <td class="px-4 py-3">
                            @if($order->status == 'selesai')
                                <span class="bg-green-100 text-green-700 text-[10px] font-bold px-2 py-1 rounded-md uppercase">Selesai</span>
                            @elseif($order->status == 'menunggu')
                                <span class="bg-orange-100 text-orange-700 text-[10px] font-bold px-2 py-1 rounded-md uppercase">Menunggu</span>
                            @else
                                <span class="bg-slate-100 text-slate-700 text-[10px] font-bold px-2 py-1 rounded-md uppercase">{{ $order->status }}</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center py-4 text-slate-500">Belum ada pesanan masuk.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
