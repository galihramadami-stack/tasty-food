@extends('layouts.admin')

@section('title', 'Detail Pesanan #' . $order->id . ' - Tasty Admin')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <a href="{{ route('admin.order.index') }}" class="text-slate-500 hover:text-orange-500 font-semibold text-sm transition-colors">
        <i class="fas fa-arrow-left mr-2"></i>Kembali ke Daftar Pesanan
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Order Details -->
    <div class="md:col-span-2 glass-card rounded-2xl overflow-hidden shadow-sm p-8">
        <h3 class="text-lg font-black text-slate-900 tracking-tight mb-6">Detail Pesanan #{{ $order->id }}</h3>
        
        <div class="space-y-4 mb-8">
            <div class="flex justify-between border-b border-slate-100 pb-4">
                <span class="text-slate-500">Tanggal Pesanan</span>
                <span class="font-bold text-slate-900">{{ $order->created_at->format('d M Y H:i') }}</span>
            </div>
            <div class="flex justify-between border-b border-slate-100 pb-4">
                <span class="text-slate-500">Status Saat Ini</span>
                <span class="font-bold text-slate-900 uppercase">{{ $order->status ?? 'Menunggu' }}</span>
            </div>
            <!-- Additional details like customer name, total, etc. can be placed here later -->
        </div>

        <h4 class="font-bold text-slate-900 mb-4">Item Pesanan</h4>
        <div class="bg-slate-50 rounded-xl p-4 text-center text-slate-500 text-sm border border-slate-200 border-dashed">
            Data item pesanan akan muncul di sini setelah struktur tabel dilengkapi.
        </div>
    </div>

    <!-- Update Status -->
    <div class="glass-card rounded-2xl overflow-hidden shadow-sm p-8 h-fit">
        <h3 class="text-lg font-black text-slate-900 tracking-tight mb-6">Update Status</h3>
        
        <form action="{{ route('admin.order.update-status', $order->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-sm font-bold text-slate-700 mb-2">Status Pesanan</label>
                <select name="status" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-orange-500/50">
                    <option value="menunggu" {{ ($order->status ?? '') == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                    <option value="proses" {{ ($order->status ?? '') == 'proses' ? 'selected' : '' }}>Diproses</option>
                    <option value="selesai" {{ ($order->status ?? '') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                    <option value="batal" {{ ($order->status ?? '') == 'batal' ? 'selected' : '' }}>Dibatalkan</option>
                </select>
            </div>
            
            <button type="submit" class="w-full px-5 py-3 bg-gradient-to-r from-orange-500 to-orange-600 text-white rounded-xl font-bold text-sm hover:shadow-lg hover:shadow-orange-500/30 transition-all">
                Simpan Perubahan
            </button>
        </form>
    </div>
</div>
@endsection
