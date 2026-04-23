@extends('layouts.admin')

@section('title', 'Pengaturan - Tasty Admin')

@section('content')
<div class="mb-8">
    <h2 class="text-2xl font-black text-slate-900 tracking-tight">Pengaturan Profil</h2>
    <p class="text-slate-500 text-sm mt-1">Perbarui informasi dasar dan keamanan akun Anda.</p>
</div>

<div class="glass-card rounded-2xl border border-slate-200 p-8 max-w-3xl">
    <form action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <h3 class="text-lg font-bold text-slate-900 mb-4 border-b border-slate-100 pb-2">Informasi Akun</h3>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Foto Profil (opsional)</label>
                    <div class="flex items-center gap-4">
                        @if($user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="w-16 h-16 rounded-xl object-cover shadow-sm">
                        @else
                            <div class="w-16 h-16 bg-orange-100 text-orange-600 flex items-center justify-center rounded-xl font-bold text-2xl">
                                {{ substr($user->name, 0, 1) }}
                            </div>
                        @endif
                        <input type="file" name="avatar" accept="image/png, image/jpeg, image/jpg" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:outline-none focus:ring-2 focus:ring-orange-500/50 focus:border-orange-500 transition-all">
                    </div>
                    @error('avatar') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:outline-none focus:ring-2 focus:ring-orange-500/50 focus:border-orange-500 transition-all" required>
                    @error('name') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Email Akun</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:outline-none focus:ring-2 focus:ring-orange-500/50 focus:border-orange-500 transition-all" required>
                    @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h3 class="text-lg font-bold text-slate-900 mb-4 border-b border-slate-100 pb-2 mt-8">Ubah Password <span class="text-xs font-normal text-slate-400 ml-2">(opsional)</span></h3>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Password Saat Ini</label>
                    <input type="password" name="current_password" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:outline-none focus:ring-2 focus:ring-orange-500/50 focus:border-orange-500 transition-all">
                    @error('current_password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Password Baru</label>
                    <input type="password" name="new_password" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:outline-none focus:ring-2 focus:ring-orange-500/50 focus:border-orange-500 transition-all">
                    @error('new_password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Konfirmasi Password Baru</label>
                    <input type="password" name="new_password_confirmation" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:outline-none focus:ring-2 focus:ring-orange-500/50 focus:border-orange-500 transition-all">
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-3">
            <button type="reset" class="px-6 py-3 rounded-xl border border-slate-200 text-slate-600 font-bold hover:bg-slate-50 transition-colors">Batal</button>
            <button type="submit" class="px-6 py-3 bg-gradient-to-r from-orange-500 to-orange-600 text-white font-bold rounded-xl shadow-lg shadow-orange-500/30 hover:shadow-orange-500/50 transition-all transform hover:-translate-y-0.5">
                <i class="fas fa-save mr-2"></i> Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
