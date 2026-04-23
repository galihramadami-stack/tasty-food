<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tasty Admin - Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #f0f4f8 100%);
        }

        .sidebar-gradient {
            background: linear-gradient(180deg, #0f172a 0%, #1a1f35 50%, #0f172a 100%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .glass-card:hover {
            background: rgba(255, 255, 255, 1);
            border-color: rgba(249, 115, 22, 0.2);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-available {
            background: #dcfce7;
            color: #15803d;
        }

        .status-unavailable {
            background: #fee2e2;
            color: #991b1b;
        }

        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #f97316 0%, #ea580c 100%);
            border-radius: 10px;
        }

        .menu-item {
            transition: all 0.3s ease;
        }

        .menu-item:hover {
            background: rgba(247, 233, 233, 0.1);
            border-radius: 12px;
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .sidebar {
            box-shadow: 4px 0 20px rgba(206, 198, 198, 0.1);
        }
    </style>
    @stack('styles')
</head>

<body class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-72 sidebar-gradient h-screen sticky top-0 flex flex-col z-50 sidebar">
        <div class="p-8 flex items-center gap-3 border-b border-slate-700/50">
            <div
                class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg shadow-orange-500/40 transform hover:scale-110 transition-transform">
                <i class="fas fa-utensils text-white text-lg"></i>
            </div>
            <div>
                <span class="text-xl font-black text-white tracking-tight">Tasty<span
                        class="text-orange-400">Admin</span></span>
                <p class="text-[9px] text-slate-400 font-medium">Restaurant Management</p>
            </div>
        </div>

        <nav class="flex-1 px-4 space-y-1 py-6 overflow-y-auto">
            <p class="text-[9px] font-bold text-slate-600 uppercase tracking-[0.15em] px-4 mb-4">Main Menu</p>

            <a href="{{ route('admin.dashboard') }}"
                class="menu-item flex items-center px-4 py-3.5 {{ request()->routeIs('admin.dashboard') ? 'bg-orange-500/20 text-orange-400 border border-orange-500/30' : 'text-slate-300 hover:text-white hover:bg-white/5 border border-transparent' }} rounded-xl transition-all font-semibold text-sm group">
                <i class="fas fa-chart-line mr-3 text-base {{ request()->routeIs('admin.dashboard') ? '' : 'group-hover:text-orange-400' }}"></i> Dashboard
            </a>

            <a href="{{ route('food.index') }}"
                class="menu-item flex items-center px-4 py-3.5 {{ request()->routeIs('food.*') ? 'bg-orange-500/20 text-orange-400 border border-orange-500/30' : 'text-slate-300 hover:text-white hover:bg-white/5 border border-transparent' }} rounded-xl transition-all font-semibold text-sm group">
                <i class="fas fa-burger mr-3 text-base {{ request()->routeIs('food.*') ? '' : 'group-hover:text-orange-400' }}"></i> Daftar Menu
            </a>

            <a href="{{ route('admin.order.index') }}"
                class="menu-item flex items-center px-4 py-3.5 {{ request()->routeIs('admin.order.*') ? 'bg-orange-500/20 text-orange-400 border border-orange-500/30' : 'text-slate-300 hover:text-white hover:bg-white/5 border border-transparent' }} rounded-xl transition-all font-semibold text-sm group">
                <i class="fas fa-shopping-cart mr-3 text-base {{ request()->routeIs('admin.order.*') ? '' : 'group-hover:text-orange-400' }}"></i> Pesanan
            </a>

            <a href="{{ route('admin.customer.index') }}"
                class="menu-item flex items-center px-4 py-3.5 {{ request()->routeIs('admin.customer.*') ? 'bg-orange-500/20 text-orange-400 border border-orange-500/30' : 'text-slate-300 hover:text-white hover:bg-white/5 border border-transparent' }} rounded-xl transition-all font-semibold text-sm group">
                <i class="fas fa-users mr-3 text-base {{ request()->routeIs('admin.customer.*') ? '' : 'group-hover:text-orange-400' }}"></i> Pelanggan
            </a>

            <a href="{{ route('admin.report.index') }}"
                class="menu-item flex items-center px-4 py-3.5 {{ request()->routeIs('admin.report.*') ? 'bg-orange-500/20 text-orange-400 border border-orange-500/30' : 'text-slate-300 hover:text-white hover:bg-white/5 border border-transparent' }} rounded-xl transition-all font-semibold text-sm group">
                <i class="fas fa-chart-bar mr-3 text-base {{ request()->routeIs('admin.report.*') ? '' : 'group-hover:text-orange-400' }}"></i> Laporan
            </a>

            <a href="{{ route('admin.setting.index') }}"
                class="menu-item flex items-center px-4 py-3.5 {{ request()->routeIs('admin.setting.*') ? 'bg-orange-500/20 text-orange-400 border border-orange-500/30' : 'text-slate-300 hover:text-white hover:bg-white/5 border border-transparent' }} rounded-xl transition-all font-semibold text-sm group">
                <i class="fas fa-cog mr-3 text-base {{ request()->routeIs('admin.setting.*') ? '' : 'group-hover:text-orange-400' }}"></i> Pengaturan
            </a>
        </nav>

        <div class="p-6 border-t border-slate-700/50 space-y-3">
            <div class="bg-white/5 p-4 rounded-xl border border-slate-600/50 backdrop-blur">
                <p class="text-xs text-slate-400 mb-2">Status Server</p>
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                    <span class="text-sm font-semibold text-green-400">Operational</span>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-full flex items-center justify-center gap-2 px-4 py-3 bg-red-500/10 text-red-400 hover:bg-red-500 hover:text-white rounded-xl transition-all font-bold text-sm border border-red-500/20">
                    <i class="fas fa-sign-out-alt"></i> LOGOUT
                </button>
            </form>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 flex flex-col min-w-0">

        <!-- TOP NAV -->
        <nav
            class="sticky top-0 z-40 px-8 py-4 sidebar-gradient border-b border-slate-700/50 flex justify-between items-center shadow-lg">
            <div class="flex items-center gap-4">
                <div
                    class="flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full border border-white/10 backdrop-blur">
                    <div class="w-2.5 h-2.5 rounded-full bg-green-400 animate-pulse"></div>
                    <span class="text-xs font-bold text-green-400 uppercase tracking-wider">System Online</span>
                </div>
            </div>

            <div class="flex items-center gap-6">
                <div class="flex items-center gap-3">
                    <div class="text-right">
                        <p class="text-sm font-bold text-white">{{ auth()->user()->name ?? 'Admin' }}</p>
                        <p class="text-[10px] font-medium text-green-400 uppercase tracking-tighter">Super Admin</p>
                    </div>
                    <a href="{{ route('admin.setting.index') }}" class="relative group cursor-pointer hover:opacity-80 transition-opacity block">
                        @if(auth()->check() && auth()->user()->avatar)
                            <img src="{{ asset('storage/' . auth()->user()->avatar) }}" class="w-11 h-11 rounded-xl border-2 border-orange-500/50 shadow-lg object-cover bg-white group-hover:border-orange-400 transition-all">
                        @else
                            <div class="w-11 h-11 rounded-xl border-2 border-orange-500/50 shadow-lg flex items-center justify-center bg-orange-500 text-white font-bold text-xl group-hover:border-orange-400 transition-all">
                                {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
                            </div>
                        @endif
                        <div class="absolute -bottom-1 -right-1 w-3.5 h-3.5 bg-green-400 border-2 border-slate-800 rounded-full animate-pulse">
                        </div>
                    </a>
                </div>
            </div>
        </nav>

        <!-- CONTENT AREA -->
        <div class="p-8 overflow-y-auto flex-1 fade-in">
            @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-600 rounded-2xl font-bold flex items-center gap-3 animate-bounce">
                <i class="fa-solid fa-circle-check text-xl"></i> {{ session('success') }}
            </div>
            @endif
            @if(session('error'))
            <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-600 rounded-2xl font-bold flex items-center gap-3 animate-bounce">
                <i class="fa-solid fa-circle-xmark text-xl"></i> {{ session('error') }}
            </div>
            @endif

            @yield('content')
        </div>
    </main>

    @stack('scripts')
</body>

</html>
