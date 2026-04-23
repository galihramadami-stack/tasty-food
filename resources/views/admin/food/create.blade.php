@extends('layouts.admin')

@section('title', 'Tambah Menu Baru - Tasty Admin')

@section('content')
<div class="glass-card rounded-2xl overflow-hidden shadow-sm">
    <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-gradient-to-r from-slate-50/50 to-white">
        <div>
            <h3 class="text-lg font-black text-slate-900 tracking-tight">Tambah Menu Baru</h3>
            <p class="text-sm text-slate-500 mt-1">Tambahkan menu makanan baru ke dalam sistem</p>
        </div>
        <a href="{{ route('food.index') }}" class="px-5 py-2.5 bg-slate-100 text-slate-700 text-sm font-bold rounded-xl hover:bg-slate-200 transition-all flex items-center gap-2">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="p-8">
        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl">
                <div class="flex items-center gap-2 text-red-700 font-bold mb-2">
                    <i class="fas fa-exclamation-circle"></i> Terdapat Kesalahan:
                </div>
                <ul class="list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('food.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nama Menu -->
                <div class="space-y-2">
                    <label for="name" class="block text-sm font-bold text-slate-700">Nama Menu <span class="text-red-500">*</span></label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all outline-none"
                        placeholder="Contoh: Nasi Goreng Spesial">
                </div>

                <!-- Kategori -->
                <div class="space-y-2">
                    <label for="category" class="block text-sm font-bold text-slate-700">Kategori <span class="text-red-500">*</span></label>
                    <select id="category" name="category" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all outline-none bg-white">
                        <option value="" disabled selected>-- Pilih Kategori --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}" {{ old('category') == $category ? 'selected' : '' }}>{{ $category }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Harga -->
                <div class="space-y-2">
                    <label for="price" class="block text-sm font-bold text-slate-700">Harga <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="text-slate-500 font-bold">Rp</span>
                        </div>
                        <input type="text" id="price" name="price" value="{{ old('price') }}" required
                            class="w-full pl-12 pr-4 py-3 rounded-xl border border-slate-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all outline-none"
                            placeholder="Contoh: 25000 atau 25.000">
                    </div>
                </div>

                <!-- Gambar -->
                <div class="space-y-2">
                    <label for="image" class="block text-sm font-bold text-slate-700">Gambar Menu <span class="text-red-500">*</span></label>
                    <input type="file" id="image" name="image" required accept="image/jpeg,image/png,image/jpg,image/webp"
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all outline-none bg-white
                        file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-bold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100">
                    <p class="text-xs text-slate-500 mt-1">Format: JPG, JPEG, PNG, WEBP. Maks: 10MB.</p>
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="space-y-2">
                <label for="description" class="block text-sm font-bold text-slate-700">Deskripsi Menu</label>
                <textarea id="description" name="description" rows="4"
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all outline-none resize-y"
                    placeholder="Masukkan deskripsi atau detail bahan menu makanan di sini...">{{ old('description') }}</textarea>
            </div>

            <div class="pt-4 border-t border-slate-100 flex justify-end">
                <button type="submit" class="px-8 py-3 bg-gradient-to-r from-orange-500 to-orange-600 text-white font-bold rounded-xl hover:from-orange-600 hover:to-orange-700 transition-all shadow-md hover:shadow-lg shadow-orange-500/30 flex items-center gap-2">
                    <i class="fas fa-save"></i> Simpan Menu
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Format input harga saat diketik agar menggunakan titik
    const priceInput = document.getElementById('price');
    priceInput.addEventListener('keyup', function(e) {
        let value = this.value.replace(/[^,\d]/g, '');
        let split = value.split(',');
        let sisa = split[0].length % 3;
        let rupiah = split[0].substr(0, sisa);
        let ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            let separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        this.value = rupiah;
    });
</script>
@endsection