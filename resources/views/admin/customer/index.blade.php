@extends('layouts.admin')

@section('title', 'Daftar Pelanggan - Tasty Admin')

@section('content')
<div class="glass-card rounded-2xl overflow-hidden shadow-sm">
    <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-gradient-to-r from-slate-50/50 to-white">
        <div>
            <h3 class="text-lg font-black text-slate-900 tracking-tight">Daftar Pelanggan</h3>
            <p class="text-sm text-slate-500 mt-1">Data pelanggan dari riwayat pesanan (Orders)</p>
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-slate-50/80 border-b border-slate-100">
                <tr class="text-slate-600 font-bold text-xs uppercase tracking-wider">
                    <th class="px-8 py-5">Nama Pelanggan</th>
                    <th class="px-8 py-5 text-center">Total Pesanan</th>
                    <th class="px-8 py-5">Total Pengeluaran</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($customers as $customer)
                <tr class="hover:bg-gradient-to-r hover:from-orange-50/50 hover:to-transparent transition-colors group">
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 font-bold uppercase">
                                {{ substr($customer->customer_name, 0, 1) }}
                            </div>
                            <span class="font-bold text-slate-900">{{ $customer->customer_name }}</span>
                        </div>
                    </td>
                    <td class="px-8 py-5 text-center">
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-50 text-blue-600 font-bold">
                            {{ $customer->total_orders }}
                        </span>
                    </td>
                    <td class="px-8 py-5 text-slate-700 font-bold">Rp {{ number_format($customer->total_spent, 0, ',', '.') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-8 py-10 text-center text-slate-500">Belum ada data pelanggan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="p-4 border-t border-slate-100">
        {{ $customers->links('pagination::tailwind') }}
    </div>
</div>
@endsection
