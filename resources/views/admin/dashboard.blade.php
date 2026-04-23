<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Admin - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            color: #0f172a;
        }

        .sidebar-gradient {
            background: linear-gradient(180deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .glass-card:hover {
            background: rgba(255, 255, 255, 0.85);
            border-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .stat-card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .stat-card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-available {
            background: rgba(220, 252, 231, 0.8);
            color: #15803d;
            border: 1px solid rgba(74, 222, 128, 0.3);
        }

        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(203, 213, 225, 0.5);
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(249, 115, 22, 0.5);
        }

        .menu-item {
            transition: all 0.3s ease;
        }

        .menu-item:hover {
            background: rgba(255, 255, 255, 0.05);
            transform: translateX(4px);
        }

        .chart-container {
            position: relative;
            height: 320px;
            width: 100%;
        }

        .fade-in {
            animation: fadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            opacity: 0;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Delays for staggered animation */
        .delay-100 { animation-delay: 100ms; }
        .delay-200 { animation-delay: 200ms; }
        .delay-300 { animation-delay: 300ms; }
        
        /* Text Gradients */
        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="flex min-h-screen overflow-hidden">

    <!-- SIDEBAR -->
    <aside class="w-[280px] sidebar-gradient h-screen flex flex-col z-50 shadow-[4px_0_24px_rgba(0,0,0,0.15)] relative">
        <!-- Sidebar subtle glow -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 right-0 w-64 h-64 bg-orange-500/10 rounded-full blur-[80px]"></div>
        </div>
        
        <div class="p-8 flex items-center gap-4 border-b border-white/5 relative z-10">
            <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-2xl flex items-center justify-center shadow-[0_0_20px_rgba(249,115,22,0.4)] transform hover:scale-110 transition-transform">
                <i class="fas fa-utensils text-white text-xl"></i>
            </div>
            <div>
                <span class="text-2xl font-black text-white tracking-tight">Tasty<span class="text-orange-500">Admin</span></span>
                <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest mt-0.5">Management</p>
            </div>
        </div>

        <nav class="flex-1 px-4 space-y-2 py-8 overflow-y-auto relative z-10">
            <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] px-4 mb-4">Main Menu</p>

            <a href="{{ route('admin.dashboard') }}"
                class="flex items-center px-4 py-3.5 bg-gradient-to-r from-orange-500/20 to-transparent text-orange-400 rounded-2xl border border-orange-500/30 transition-all font-bold text-sm shadow-[inset_4px_0_0_#f97316]">
                <i class="fas fa-chart-pie mr-4 text-lg"></i> Dashboard
                <span class="ml-auto text-[9px] bg-orange-500 text-white font-black px-2.5 py-1 rounded-full uppercase tracking-wider shadow-[0_0_10px_rgba(249,115,22,0.5)]">Active</span>
            </a>

            <a href="{{ route('food.index') }}"
                class="menu-item flex items-center px-4 py-3.5 text-slate-300 hover:text-white rounded-2xl font-semibold text-sm group">
                <i class="fas fa-burger mr-4 text-lg text-slate-500 group-hover:text-orange-400 transition-colors"></i> Daftar Menu
            </a>

            <a href="{{ route('admin.order.index') }}"
                class="menu-item flex items-center px-4 py-3.5 text-slate-300 hover:text-white rounded-2xl font-semibold text-sm group">
                <i class="fas fa-shopping-bag mr-4 text-lg text-slate-500 group-hover:text-orange-400 transition-colors"></i> Pesanan
                @if(isset($pendingOrdersCount) && $pendingOrdersCount > 0)
                <span class="ml-auto text-[10px] bg-red-500 text-white font-bold px-2 py-0.5 rounded-full shadow-[0_0_10px_rgba(239,68,68,0.5)] animate-pulse">{{ $pendingOrdersCount }}</span>
                @endif
            </a>

            <a href="{{ route('admin.customer.index') }}"
                class="menu-item flex items-center px-4 py-3.5 text-slate-300 hover:text-white rounded-2xl font-semibold text-sm group">
                <i class="fas fa-users mr-4 text-lg text-slate-500 group-hover:text-orange-400 transition-colors"></i> Pelanggan
            </a>

            <a href="{{ route('admin.report.index') }}"
                class="menu-item flex items-center px-4 py-3.5 text-slate-300 hover:text-white rounded-2xl font-semibold text-sm group">
                <i class="fas fa-chart-line mr-4 text-lg text-slate-500 group-hover:text-orange-400 transition-colors"></i> Laporan
            </a>

            <div class="h-px bg-white/5 my-4 mx-4"></div>

            <a href="{{ route('admin.setting.index') }}"
                class="menu-item flex items-center px-4 py-3.5 text-slate-300 hover:text-white rounded-2xl font-semibold text-sm group">
                <i class="fas fa-cog mr-4 text-lg text-slate-500 group-hover:text-slate-300 transition-colors"></i> Pengaturan
            </a>
        </nav>

        <div class="p-6 border-t border-white/5 relative z-10">
            <div class="bg-slate-800/50 p-4 rounded-2xl border border-white/5 backdrop-blur-md mb-4">
                <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest mb-2">Status Server</p>
                <div class="flex items-center gap-3">
                    <div class="relative">
                        <div class="w-2.5 h-2.5 rounded-full bg-emerald-400"></div>
                        <div class="absolute inset-0 rounded-full bg-emerald-400 animate-ping opacity-75"></div>
                    </div>
                    <span class="text-xs font-black text-emerald-400 tracking-wider">ONLINE</span>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-full flex items-center justify-center gap-2 px-4 py-3.5 bg-rose-500/10 text-rose-400 hover:bg-rose-500 hover:text-white rounded-2xl transition-all font-bold text-sm border border-rose-500/20 group">
                    <i class="fas fa-power-off group-hover:rotate-180 transition-transform duration-500"></i> KELUAR
                </button>
            </form>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 flex flex-col min-w-0 h-screen overflow-hidden bg-transparent relative">
        
        <!-- Ambient Background Glows -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
            <div class="absolute top-[-10%] right-[-5%] w-[40rem] h-[40rem] bg-orange-400/10 rounded-full blur-[100px] animate-[pulse_8s_ease-in-out_infinite]"></div>
            <div class="absolute bottom-[-10%] left-[-10%] w-[40rem] h-[40rem] bg-blue-500/5 rounded-full blur-[120px] animate-[pulse_10s_ease-in-out_infinite]"></div>
        </div>

        <!-- TOP NAV -->
        <nav class="sticky top-0 z-40 px-8 py-5 bg-white/40 backdrop-blur-xl border-b border-white/50 flex justify-between items-center shadow-sm">
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-2 px-4 py-2 bg-white/60 rounded-full border border-white shadow-sm">
                    <div class="w-2 h-2 rounded-full bg-emerald-500 shadow-[0_0_8px_rgba(16,185,129,0.8)]"></div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest">Dashboard System</span>
                </div>
                <div class="text-xs text-slate-500 font-medium">Terakhir update: <span class="text-slate-800 font-bold">Baru saja</span></div>
            </div>

            <div class="flex items-center gap-6">
                <div class="hidden md:flex items-center gap-2">
                    <button class="w-10 h-10 flex items-center justify-center rounded-xl text-slate-400 hover:text-slate-700 hover:bg-white/60 transition-all relative">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute top-2 right-2 w-2 h-2 bg-rose-500 rounded-full shadow-[0_0_5px_rgba(244,63,94,0.8)]"></span>
                    </button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-xl text-slate-400 hover:text-slate-700 hover:bg-white/60 transition-all">
                        <i class="fas fa-envelope text-lg"></i>
                    </button>
                </div>
                <div class="h-8 w-px bg-slate-200"></div>
                <div class="flex items-center gap-4">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-black text-slate-800">{{ auth()->check() ? auth()->user()->name : 'Admin' }}</p>
                        <p class="text-[10px] font-bold text-orange-500 uppercase tracking-widest">Super Admin</p>
                    </div>
                    <a href="{{ route('admin.setting.index') }}" class="relative group block cursor-pointer">
                        <div class="w-12 h-12 rounded-2xl border-2 border-white shadow-md overflow-hidden transform group-hover:scale-105 transition-all">
                            @if(auth()->check() && auth()->user()->avatar)
                                <img src="{{ asset('storage/' . auth()->user()->avatar) }}" class="w-full h-full object-cover">
                            @else
                                <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->check() ? auth()->user()->name : 'Admin') }}&background=f97316&color=fff&font-weight=bold" class="w-full h-full object-cover">
                            @endif
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-emerald-400 border-2 border-white rounded-full"></div>
                    </a>
                </div>
            </div>
        </nav>

        <!-- CONTENT AREA -->
        <div class="p-8 lg:p-10 overflow-y-auto flex-1 relative z-10 scroll-smooth">
            
            <!-- HEADER -->
            <header class="mb-10 fade-in flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <h1 class="text-4xl lg:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-slate-900 to-slate-600 tracking-tight mb-2">Dashboard Overview <span class="inline-block animate-bounce origin-bottom">👋</span></h1>
                    <p class="text-slate-500 font-medium text-sm">Ringkasan performa bisnis restoran Anda hari ini.</p>
                </div>
                <div class="flex gap-3">
                    <button class="px-5 py-3 glass-card text-slate-700 rounded-xl font-bold text-sm hover:text-orange-600 hover:-translate-y-1 transition-all flex items-center gap-2">
                        <i class="fas fa-file-export"></i> Export Data
                    </button>
                    <a href="{{ route('food.create') }}" class="px-6 py-3 bg-gradient-to-r from-orange-500 to-orange-600 text-white rounded-xl font-black text-sm shadow-[0_8px_20px_rgba(249,115,22,0.3)] hover:shadow-[0_8px_25px_rgba(249,115,22,0.5)] hover:-translate-y-1 transition-all flex items-center gap-2">
                        <i class="fas fa-plus-circle text-lg"></i> Tambah Menu
                    </a>
                </div>
            </header>

            <!-- STATS GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10 fade-in delay-100">
                
                <!-- Total Products -->
                <div class="relative p-8 rounded-[2rem] bg-white/60 backdrop-blur-xl border border-white shadow-sm stat-card-hover group overflow-hidden">
                    <div class="absolute -right-6 -top-6 w-32 h-32 bg-blue-500/10 rounded-full blur-2xl group-hover:bg-blue-500/20 transition-all duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white shadow-lg shadow-blue-500/30 transform group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
                                <i class="fas fa-box-open text-2xl"></i>
                            </div>
                            <span class="inline-flex items-center gap-1 text-[10px] font-black uppercase tracking-widest text-emerald-600 bg-emerald-100/80 px-3 py-1.5 rounded-xl border border-emerald-200">
                                <i class="fas fa-arrow-trend-up"></i> 12%
                            </span>
                        </div>
                        <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest mb-1">Total Menu</p>
                        <h2 class="text-4xl font-black text-slate-800 tracking-tight">{{ $totalMenu }}</h2>
                        <div class="mt-5 pt-4 border-t border-slate-200/50">
                            <p class="text-slate-500 text-xs font-medium"><span class="text-blue-600 font-bold bg-blue-50 px-2 py-0.5 rounded-lg border border-blue-100">+{{ $newMenuThisMonth }} baru</span> bulan ini</p>
                        </div>
                    </div>
                </div>

                <!-- Total Revenue -->
                <div class="relative p-8 rounded-[2rem] bg-white/60 backdrop-blur-xl border border-white shadow-sm stat-card-hover group overflow-hidden">
                    <div class="absolute -right-6 -top-6 w-32 h-32 bg-emerald-500/10 rounded-full blur-2xl group-hover:bg-emerald-500/20 transition-all duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white shadow-lg shadow-emerald-500/30 transform group-hover:scale-110 group-hover:-rotate-6 transition-transform duration-300">
                                <i class="fas fa-wallet text-2xl"></i>
                            </div>
                            <span class="inline-flex items-center gap-1 text-[10px] font-black uppercase tracking-widest text-emerald-600 bg-emerald-100/80 px-3 py-1.5 rounded-xl border border-emerald-200">
                                <i class="fas fa-arrow-trend-up"></i> 24%
                            </span>
                        </div>
                        <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest mb-1">Pendapatan</p>
                        <h2 class="text-3xl lg:text-4xl font-black text-slate-800 tracking-tight truncate" title="Rp {{ number_format($totalRevenue, 0, ',', '.') }}">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</h2>
                        <div class="mt-5 pt-4 border-t border-slate-200/50">
                            <p class="text-slate-500 text-xs font-medium">Dari <span class="text-emerald-600 font-bold">{{ $completedOrdersCount }} pesanan</span> sukses</p>
                        </div>
                    </div>
                </div>

                <!-- Orders Today -->
                <div class="relative p-8 rounded-[2rem] bg-white/60 backdrop-blur-xl border border-white shadow-sm stat-card-hover group overflow-hidden">
                    <div class="absolute -right-6 -top-6 w-32 h-32 bg-purple-500/10 rounded-full blur-2xl group-hover:bg-purple-500/20 transition-all duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center text-white shadow-lg shadow-purple-500/30 transform group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-cart-shopping text-2xl"></i>
                            </div>
                            <span class="inline-flex items-center gap-1 text-[10px] font-black uppercase tracking-widest text-rose-600 bg-rose-100/80 px-3 py-1.5 rounded-xl border border-rose-200">
                                <i class="fas fa-arrow-trend-down"></i> 5%
                            </span>
                        </div>
                        <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest mb-1">Pesanan Hari Ini</p>
                        <h2 class="text-4xl font-black text-slate-800 tracking-tight">{{ $ordersToday }}</h2>
                        <div class="mt-5 pt-4 border-t border-slate-200/50">
                            <p class="text-slate-500 text-xs font-medium"><span class="text-rose-500 font-bold bg-rose-50 px-2 py-0.5 rounded-lg border border-rose-100">{{ $pendingOrders }} pending</span> diproses</p>
                        </div>
                    </div>
                </div>

                <!-- Customer Satisfaction -->
                <div class="relative p-8 rounded-[2rem] bg-white/60 backdrop-blur-xl border border-white shadow-sm stat-card-hover group overflow-hidden">
                    <div class="absolute -right-6 -top-6 w-32 h-32 bg-orange-500/10 rounded-full blur-2xl group-hover:bg-orange-500/20 transition-all duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-orange-400 to-orange-500 flex items-center justify-center text-white shadow-lg shadow-orange-500/30 transform group-hover:scale-110 group-hover:rotate-12 transition-transform duration-300">
                                <i class="fas fa-star text-2xl"></i>
                            </div>
                            <span class="inline-flex items-center gap-1 text-[10px] font-black uppercase tracking-widest text-emerald-600 bg-emerald-100/80 px-3 py-1.5 rounded-xl border border-emerald-200">
                                <i class="fas fa-arrow-trend-up"></i> 8%
                            </span>
                        </div>
                        <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest mb-1">Rating Kepuasan</p>
                        <div class="flex items-baseline gap-1">
                            <h2 class="text-4xl font-black text-slate-800 tracking-tight">{{ number_format($rating, 1) }}</h2>
                            <span class="text-slate-400 font-bold">/ 5.0</span>
                        </div>
                        <div class="mt-5 pt-4 border-t border-slate-200/50">
                            <p class="text-slate-500 text-xs font-medium">Berdasarkan <span class="text-orange-600 font-bold">{{ $totalReviews }} ulasan</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CHARTS ROW -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10 fade-in delay-200">
                <!-- Sales Chart -->
                <div class="lg:col-span-2 glass-card p-8 rounded-[2rem]">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
                        <div>
                            <h3 class="text-xl font-black text-slate-800">Tren Penjualan Mingguan</h3>
                            <p class="text-sm font-medium text-slate-500 mt-1">Analisis pendapatan 7 hari terakhir</p>
                        </div>
                        <select class="px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-xs font-bold uppercase tracking-wider text-slate-600 focus:outline-none focus:ring-2 focus:ring-orange-500/50 shadow-sm cursor-pointer hover:bg-slate-50 transition-colors">
                            <option>Minggu Ini</option>
                            <option>Bulan Ini</option>
                            <option>Tahun Ini</option>
                        </select>
                    </div>
                    <div class="chart-container">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>

                <!-- Top Categories -->
                <div class="glass-card p-8 rounded-[2rem] flex flex-col">
                    <h3 class="text-xl font-black text-slate-800 mb-2">Kategori Terlaris</h3>
                    <p class="text-sm font-medium text-slate-500 mb-8">Distribusi menu yang paling diminati</p>
                    
                    <div class="space-y-4 flex-1">
                        @foreach($categories as $index => $category)
                            @php
                                $colors = ['orange', 'blue', 'emerald', 'purple'];
                                $icons = ['burger', 'ice-cream', 'mug-hot', 'pizza-slice'];
                                $color = $colors[$index % count($colors)];
                                $icon = $icons[$index % count($icons)];
                                $percentage = $totalFoodForPercentage > 0 ? round(($category->total / $totalFoodForPercentage) * 100) : 0;
                            @endphp
                            <div class="group flex items-center justify-between p-4 bg-white/50 hover:bg-white border border-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1 cursor-default relative overflow-hidden">
                                <!-- Subtle progress background -->
                                <div class="absolute left-0 top-0 h-full bg-{{$color}}-50/50 -z-10 transition-all duration-500" style="width: {{ $percentage }}%"></div>
                                
                                <div class="flex items-center gap-4 relative z-10">
                                    <div class="w-12 h-12 rounded-xl bg-{{$color}}-100 text-{{$color}}-600 flex items-center justify-center shadow-inner group-hover:scale-110 transition-transform">
                                        <i class="fas fa-{{$icon}} text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="font-black text-slate-800">{{ ucfirst($category->category) }}</p>
                                        <p class="text-xs font-semibold text-slate-500 mt-0.5">{{ $category->total }} Variasi Menu</p>
                                    </div>
                                </div>
                                <div class="text-right relative z-10">
                                    <span class="text-lg font-black text-{{$color}}-600 block">{{ $percentage }}%</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- POPULAR MENU TABLE -->
            <div class="glass-card rounded-[2.5rem] overflow-hidden shadow-lg border border-white fade-in delay-300">
                <div class="p-8 border-b border-white/50 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white/40">
                    <div>
                        <h3 class="text-xl font-black text-slate-800">Menu Terpopuler 🔥</h3>
                        <p class="text-sm font-medium text-slate-500 mt-1">Daftar hidangan dengan penjualan tertinggi</p>
                    </div>
                    <a href="{{ route('food.index') }}" class="px-5 py-2.5 bg-slate-800 text-white text-[11px] font-black rounded-xl hover:bg-orange-600 transition-all shadow-md hover:shadow-lg hover:shadow-orange-500/30 uppercase tracking-widest inline-flex items-center gap-2">
                        <span>Lihat Semua</span> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="overflow-x-auto p-4">
                    <table class="w-full text-sm text-left border-separate border-spacing-y-2">
                        <thead>
                            <tr class="text-slate-500 font-bold text-[10px] uppercase tracking-widest">
                                <th class="px-6 py-4 font-black">Detail Menu</th>
                                <th class="px-6 py-4 font-black">Kategori</th>
                                <th class="px-6 py-4 font-black">Harga Jual</th>
                                <th class="px-6 py-4 font-black">Total Terjual</th>
                                <th class="px-6 py-4 font-black">Status</th>
                                <th class="px-6 py-4 text-center font-black">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($popularMenus as $index => $menu)
                                <tr class="bg-white/40 hover:bg-white/80 transition-colors group shadow-sm rounded-2xl overflow-hidden">
                                    <td class="px-6 py-4 rounded-l-2xl">
                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 rounded-xl overflow-hidden shadow-inner border border-white">
                                                @if($menu->image)
                                                    <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                                @else
                                                    <div class="w-full h-full bg-slate-100 flex items-center justify-center">
                                                        <i class="fas fa-utensils text-slate-400"></i>
                                                    </div>
                                                @endif
                                            </div>
                                            <span class="font-black text-slate-800 text-base">{{ $menu->name }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-block px-3 py-1.5 bg-slate-100 text-slate-600 text-[10px] font-black uppercase tracking-widest rounded-lg border border-slate-200">
                                            {{ ucfirst($menu->category) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-black text-slate-800">Rp {{ number_format($menu->price, 0, ',', '.') }}</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-baseline gap-1">
                                            <span class="font-black text-orange-600 text-lg">{{ $menu->sold }}</span>
                                            <span class="text-slate-500 text-[10px] font-bold uppercase">Porsi</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
                                            <span class="text-[10px] font-black text-emerald-600 uppercase tracking-widest">Tersedia</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center rounded-r-2xl">
                                        <div class="flex items-center justify-center gap-2 opacity-50 group-hover:opacity-100 transition-opacity">
                                            <a href="{{ route('food.show', $menu->id) }}" class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-400 hover:text-blue-600 hover:bg-blue-50 transition-colors shadow-sm bg-white">
                                                <i class="fas fa-eye text-sm"></i>
                                            </a>
                                            <a href="{{ route('food.edit', $menu->id) }}" class="w-8 h-8 rounded-lg flex items-center justify-center text-slate-400 hover:text-orange-600 hover:bg-orange-50 transition-colors shadow-sm bg-white">
                                                <i class="fas fa-pen text-sm"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-12 text-center">
                                        <div class="flex flex-col items-center justify-center text-slate-400">
                                            <i class="fas fa-inbox text-4xl mb-3 opacity-50"></i>
                                            <p class="font-bold">Belum ada data menu</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Footer -->
            <footer class="mt-12 mb-4 text-center">
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">© {{ date('Y') }} TastyAdmin. All rights reserved.</p>
            </footer>
        </div>
    </main>

    <script>
        // Sales Chart with improved styling
        const ctx = document.getElementById('salesChart').getContext('2d');
        const gradient = ctx.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, 'rgba(249, 115, 22, 0.4)');
        gradient.addColorStop(0.5, 'rgba(249, 115, 22, 0.1)');
        gradient.addColorStop(1, 'rgba(249, 115, 22, 0)');

        Chart.defaults.font.family = "'Plus Jakarta Sans', sans-serif";
        Chart.defaults.color = '#94a3b8';

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode(array_reverse($salesLabels)) !!},
                datasets: [{
                    label: 'Pendapatan',
                    data: {!! json_encode(array_reverse($salesData)) !!},
                    borderColor: '#f97316',
                    backgroundColor: gradient,
                    borderWidth: 4,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#ffffff',
                    pointBorderColor: '#f97316',
                    pointBorderWidth: 3,
                    pointRadius: 6,
                    pointHoverRadius: 8,
                    pointHoverBorderWidth: 4,
                    pointHoverBackgroundColor: '#f97316'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(15, 23, 42, 0.9)',
                        titleFont: { size: 13, weight: 'bold' },
                        bodyFont: { size: 14, weight: 'bold' },
                        padding: 12,
                        cornerRadius: 12,
                        displayColors: false,
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) { label += ': '; }
                                if (context.parsed.y !== null) {
                                    label += 'Rp ' + new Intl.NumberFormat('id-ID').format(context.parsed.y);
                                }
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        border: { display: false },
                        ticks: {
                            font: { weight: 'bold', size: 11 },
                            callback: function(value) {
                                return 'Rp ' + (value/1000) + 'k';
                            },
                            padding: 10
                        },
                        grid: {
                            color: 'rgba(0, 0, 0, 0.04)',
                            drawBorder: false,
                        }
                    },
                    x: {
                        border: { display: false },
                        ticks: {
                            font: { weight: 'bold', size: 11 },
                            padding: 10
                        },
                        grid: {
                            display: false,
                            drawBorder: false
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>