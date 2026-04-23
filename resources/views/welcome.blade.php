<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food | Kelezatan di Setiap Gigitan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            scroll-behavior: smooth;
        }

        .gradient-text {
            background: linear-gradient(135deg, #f97316 0%, #fb923c 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #f97316 0%, #fb923c 100%);
        }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(249, 115, 22, 0.15);
        }

        .nav-link {
            position: relative;
            overflow: hidden;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #f97316, #fb923c);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .btn-primary {
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(31, 41, 55, 0.3);
        }

        .btn-secondary {
            transition: all 0.3s ease;
            position: relative;
        }

        .btn-secondary:hover {
            background: linear-gradient(135deg, #f97316 0%, #fb923c 100%);
            color: white;
            border-color: transparent;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(249, 115, 22, 0.2);
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            font-weight: bold;
            font-size: 28px;
            background: linear-gradient(135deg, rgba(249, 115, 22, 0.1), rgba(251, 146, 60, 0.1));
            transition: all 0.3s ease;
        }

        .feature-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.8));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
            background: linear-gradient(135deg, #f97316, #fb923c);
            color: white;
        }

        .section-title {
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #f97316, #fb923c);
            border-radius: 2px;
        }

        .image-frame {
            position: relative;
            display: inline-block;
        }

        .image-frame::before {
            content: '';
            position: absolute;
            top: -10px;
            right: -10px;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #f97316, #fb923c);
            border-radius: 40px;
            z-index: -1;
            opacity: 0.3;
            animation: pulse-ring 2s ease-in-out infinite;
        }

        @keyframes pulse-ring {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.3;
            }

            50% {
                transform: scale(1.05);
                opacity: 0.5;
            }
        }

        .hero-text {
            animation: slideInUp 0.8s ease-out;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .badge {
            background: linear-gradient(135deg, rgba(249, 115, 22, 0.1), rgba(251, 146, 60, 0.1));
            border: 1px solid rgba(249, 115, 22, 0.3);
            color: #b45309;
        }
    </style>
</head>

<body class="bg-white text-gray-900">

    <!-- Navbar -->
    <nav class="flex items-center justify-between px-10 py-6 bg-orange-100/80 backdrop-blur-md sticky top-0 z-50 shadow-sm">
        <div class="flex items-center space-x-2 text-2xl font-bold">
            <i class="fas fa-utensils text-orange-500"></i>
            <span>Tasty<span class="text-gray-800">Food</span></span>
        </div>

        <div class="hidden md:flex space-x-10 font-medium">
            <a href="/home" class="nav-link text-gray-700 hover:text-orange-500">Home</a>
            <a href="/tentang" class="nav-link text-gray-700 hover:text-orange-500">Tentang Kami</a>
            <a href="/berita" class="nav-link text-gray-700 hover:text-orange-500">Berita</a>
            <a href="/galeri" class="nav-link text-gray-700 hover:text-orange-500">Galeri</a>
        </div>

        <div>
            @if (Route::has('login'))
            @auth
            <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-600">Selamat datang, {{ auth()->user()->name }}</span>
                <a href="{{ url('/admin') }}"
                    class="px-6 py-2.5 bg-gray-100 rounded-full font-semibold hover:bg-gray-200 transition flex items-center space-x-2">
                    <i class="fas fa-chart-line"></i>
                    <span>Dashboard</span>
                </a>
            </div>
            @else
            <a href="{{ route('login') }}"
                class="px-6 py-2.5 gradient-bg text-white rounded-full font-semibold shadow-lg shadow-orange-200 hover:shadow-xl transition flex items-center space-x-2 inline-flex">
                <i class="fas fa-sign-in-alt"></i>
                <span>Masuk</span>
            </a>
            @endauth
            @endif
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home"
        class="relative px-10 py-24 md:py-32 flex flex-col md:flex-row items-center justify-between overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-orange-100 rounded-full -z-10 opacity-40 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-50 rounded-full -z-10 opacity-40 blur-3xl"></div>

        <!-- Left Content -->
        <div class="md:w-1/2 z-10">
            <div class="hero-text">
                <div class="badge px-4 py-2 rounded-full text-sm font-bold uppercase tracking-wider inline-block">
                    <i class="fas fa-star text-orange-500 mr-2"></i>Restoran Terbaik di Bandung
                </div>

                <h1 class="text-5xl md:text-7xl font-bold mt-8 leading-tight">
                    Kelezatan <br>
                    <span class="gradient-text">Autentik</span> <br>
                    Tiada Duanya.
                </h1>

                <p class="text-gray-500 mt-8 text-lg max-w-lg leading-relaxed">
                    Nikmati perpaduan bumbu rahasia dan bahan segar pilihan yang akan memanjakan lidah Anda. Setiap
                    hidangan dibuat dengan cinta dan dedikasi.
                </p>

                <div class="mt-12 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <button class="btn-primary px-8 py-4 text-white rounded-2xl font-bold shadow-xl">
                        <i class="fas fa-book mr-2"></i>Lihat Menu
                    </button>
                    <button class="btn-secondary px-8 py-4 border-2 border-gray-300 rounded-2xl font-bold">
                        <i class="fas fa-phone mr-2"></i>Hubungi Kami
                    </button>
                </div>

                <!-- Stats -->
                <div class="mt-16 flex space-x-8">
                    <div>
                        <div class="text-3xl font-bold gradient-text">500+</div>
                        <p class="text-gray-500 text-sm">Hidangan Lezat</p>
                    </div>
                    <div>
                        <div class="text-3xl font-bold gradient-text">50K+</div>
                        <p class="text-gray-500 text-sm">Pelanggan Puas</p>
                    </div>
                    <div>
                        <div class="text-3xl font-bold gradient-text">4.9★</div>
                        <p class="text-gray-500 text-sm">Rating</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Image -->
        <div class="md:w-1/2 mt-16 md:mt-0 relative flex justify-center">
            <div class="image-frame">
                <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&q=80&w=800"
                    alt="Makanan Lezat"
                    class="rounded-[40px] shadow-2xl hover:shadow-3xl transition-all duration-500 object-cover w-full h-[450px] md:h-[550px]">
            </div>

            <!-- Floating Card -->
            <div class="floating absolute bottom-8 -left-8 bg-white rounded-2xl p-4 shadow-xl hidden md:block">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center text-white">
                        <i class="fas fa-fire"></i>
                    </div>
                    <div>
                        <p class="font-bold text-sm">Trending Now</p>
                        <p class="text-xs text-gray-500">Spicy Delicacy</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="about" class="px-10 py-20 md:py-32 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    <span class="section-title">Mengapa Memilih Kami?</span>
                </h2>
                <p class="text-gray-500 text-lg max-w-2xl mx-auto">
                    Kami berkomitmen untuk memberikan pengalaman kuliner terbaik dengan kualitas premium dan pelayanan
                    yang ramah.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card p-8 rounded-3xl card-hover">
                    <div class="feature-icon bg-orange-50 text-orange-500 mb-6">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Bahan Segar</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Kami hanya menggunakan bahan-bahan lokal berkualitas premium yang diambil langsung dari petani
                        pilihan setiap hari.
                    </p>
                    <div class="mt-6 flex items-center text-orange-500 font-semibold">
                        <span>Pelajari lebih lanjut</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card p-8 rounded-3xl card-hover">
                    <div class="feature-icon bg-blue-50 text-blue-500 mb-6">
                       👩‍🍳
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Koki Profesional</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Hidangan disiapkan oleh koki berpengalaman dengan standar kebersihan internasional dan teknik
                        memasak terkini.
                    </p>
                    <div class="mt-6 flex items-center text-blue-500 font-semibold">
                        <span>Pelajari lebih lanjut</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card p-8 rounded-3xl card-hover">
                    <div class="feature-icon bg-emerald-50 text-emerald-500 mb-6">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Harga Terjangkau</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Menikmati makanan mewah tidak harus mahal. Kami memberikan harga terbaik dan value yang luar
                        biasa untuk Anda.
                    </p>
                    <div class="mt-6 flex items-center text-emerald-500 font-semibold">
                        <span>Pelajari lebih lanjut</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative px-10 py-20 md:py-32 gradient-bg overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-40 h-40 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-40 h-40 bg-white rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-4xl mx-auto text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Siap Merasakan Cita Rasa Istimewa?
            </h2>
            <p class="text-orange-100 text-lg mb-10">
                Jangan lewatkan kesempatan untuk mencicipi hidangan favorit Anda. Pesan sekarang dan nikmati pengalaman
                kuliner yang tak terlupakan!
            </p>
            <button
                class="px-8 py-4 bg-white text-orange-600 rounded-2xl font-bold hover:bg-orange-50 transition shadow-xl">
                <i class="fas fa-shopping-cart mr-2"></i>Pesan Sekarang
            </button>
        </div>
    </section>

</body>

</html>