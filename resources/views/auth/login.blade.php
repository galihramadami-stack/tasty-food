<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tasty Food</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #fff7ed 0%, #ffedd5 50%, #fed7aa 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Glassmorphism */
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            border: 1.5px solid rgba(255, 255, 255, 0.5);
            box-shadow:
                0 8px 32px 0 rgba(31, 38, 135, 0.1),
                inset 0 1px 1px 0 rgba(255, 255, 255, 0.5);
        }

        /* Input Styling */
        .input-field {
            border: 2px solid #f3f4f6;
            background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .input-field:focus {
            border-color: #f97316;
            background: #fff;
            box-shadow:
                0 0 0 4px rgba(249, 115, 22, 0.15),
                inset 0 1px 2px rgba(0, 0, 0, 0.05);
            transform: translateY(-1px);
        }

        .input-field::placeholder {
            color: #d1d5db;
            font-weight: 500;
        }

        /* Button Styling */
        .btn-primary {
            background: linear-gradient(135deg, #fb923c 0%, #f97316 100%);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 25px -5px rgba(249, 115, 22, 0.3);
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
            transform: translateY(-3px);
            box-shadow: 0 15px 35px -5px rgba(249, 115, 22, 0.4);
            filter: brightness(1.05);
        }

        .btn-primary:active {
            transform: translateY(-1px);
        }

        /* Secondary Button */
        .btn-secondary {
            background: #f5f5f5;
            color: #6b7280;
            border: 2px solid #e5e7eb;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-secondary:hover {
            background: #fff;
            color: #374151;
            border-color: #f97316;
            transform: translateY(-2px);
            box-shadow: 0 8px 16px -2px rgba(249, 115, 22, 0.1);
        }

        /* Error Alert */
        .error-alert {
            background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
            border-left: 4px solid #dc2626;
            animation: slideDown 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Floating Elements */
        .floating-blob {
            position: fixed;
            z-index: -1;
            filter: blur(80px);
            opacity: 0.4;
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .blob-1 {
            top: -50px;
            left: -50px;
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, #fb923c, #f97316);
            animation-delay: 0s;
        }

        .blob-2 {
            bottom: -100px;
            right: -100px;
            width: 350px;
            height: 350px;
            background: linear-gradient(135deg, #fed7aa, #fb923c);
            animation-delay: 2s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0);
            }

            33% {
                transform: translate(30px, -30px);
            }

            66% {
                transform: translate(-20px, 20px);
            }
        }

        /* Icon Styling */
        .icon-wrapper {
            transition: all 0.3s ease;
            color: #9ca3af;
        }

        .input-field:focus~.icon-wrapper,
        .group:focus-within .icon-wrapper {
            color: #f97316;
            transform: scale(1.1);
        }

        /* Checkbox Custom */
        input[type="checkbox"] {
            appearance: none;
            -webkit-appearance: none;
            width: 18px;
            height: 18px;
            border: 2px solid #d1d5db;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s ease;
            background: white;
        }

        input[type="checkbox"]:hover {
            border-color: #f97316;
        }

        input[type="checkbox"]:checked {
            background: linear-gradient(135deg, #fb923c 0%, #f97316 100%);
            border-color: #f97316;
        }

        input[type="checkbox"]:checked::after {
            content: '✓';
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            ;
            font-size: 12px;
            font-weight: bold;
        }

        /* Loading State */
        .btn-primary:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        /* Tooltip */
        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 200px;
            background-color: #1f2937;
            color: #fff;
            text-align: center;
            border-radius: 8px;
            padding: 8px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -100px;
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 12px;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #1f2937 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        /* Fade In Animation */
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

        .animate-fade-in {
            animation: fadeIn 0.6s ease-out;
        }

        /* Link Hover */
        .link-hover {
            position: relative;
            text-decoration: none;
            color: #f97316;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .link-hover::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background: linear-gradient(90deg, #f97316, #fb923c);
            transition: width 0.3s ease;
        }

        .link-hover:hover::after {
            width: 100%;
        }

        /* Success Feedback */
        .success-feedback {
            display: none;
            animation: slideUp 0.3s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 640px) {
            .glass-card {
                border-radius: 2rem;
            }

            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body class="flex items-center justify-center p-4">

    <!-- Floating Blobs -->
    <div class="floating-blob blob-1"></div>
    <div class="floating-blob blob-2"></div>

    <!-- Main Container -->
    <div class="w-full max-w-[480px] animate-fade-in">

        <!-- Logo & Header -->
        <div class="text-center mb-10">
            <div
                class="inline-flex items-center justify-center w-24 h-24 bg-white rounded-3xl shadow-2xl shadow-orange-100 mb-6 border-2 border-orange-50 hover:shadow-orange-200 transition-all duration-300">
                <i class="fas fa-utensils text-5xl text-orange-500"></i>
            </div>
            <h1 class="text-5xl font-extrabold text-gray-900 tracking-tight">
                Tasty<span class="text-orange-500">Food</span>
            </h1>
            <p class="text-gray-500 mt-3 font-medium text-lg">Masuk ke Dashboard Admin Anda</p>
        </div>

        <!-- Main Card -->
        <div class="glass-card rounded-3xl p-10 shadow-2xl">

            <!-- Error Messages -->
            @if ($errors->any())
            <div class="error-alert p-4 mb-8 rounded-xl border-l-4 border-red-600">
                <div class="flex items-start">
                    <i class="fas fa-exclamation-circle text-red-600 text-lg mt-1 mr-3 flex-shrink-0"></i>
                    <div>
                        <p class="text-red-700 font-bold text-sm">Oops! Ada kesalahan</p>
                        <ul class="text-red-600 text-xs mt-2 space-y-1">
                            @foreach ($errors->all() as $error)
                            <li class="flex items-center">
                                <i class="fas fa-times-circle mr-2"></i>{{ $error }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endif

            <!-- Login Form -->
           <form action="{{ route('login.submit') }}" method="POST" class="space-y-5">
            @csrf
        
            <!-- Email Field -->
            <div class="group">
                <label class="block text-sm font-bold text-gray-700 mb-2.5 ml-1">
                    <i class="fas fa-envelope text-orange-500 mr-1.5"></i>Email Address
                </label>
                <div class="relative">
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="input-field w-full pl-12 pr-4 py-3.5 rounded-xl focus:outline-none text-gray-800 text-base"
                        placeholder="admin@tastyfood.com" required autocomplete="email">
                </div>
                @error('email')
                <p class="text-red-500 text-xs mt-2 ml-1">{{ $message }}</p>
                @enderror
            </div>
        
            <!-- Password Field -->
            <div class="group">
                <label class="block text-sm font-bold text-gray-700 mb-2.5 ml-1">
                    <i class="fas fa-lock text-orange-500 mr-1.5"></i>Password
                </label>
                <div class="relative">
                    <input type="password" name="password" id="password"
                        class="input-field w-full pl-12 pr-12 py-3.5 rounded-xl focus:outline-none text-gray-800 text-base"
                        placeholder="••••••••" required autocomplete="current-password">
                    <button type="button" onclick="togglePassword()"
                        class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-orange-500 transition-colors">
                        <i id="eye-icon" class="fas fa-eye-slash"></i>
                    </button>
                </div>
                @error('password')
                <p class="text-red-500 text-xs mt-2 ml-1">{{ $message }}</p>
                @enderror
            </div>
        
            <!-- Remember Me -->
            <div class="flex items-center px-1 py-2">
                <input type="checkbox" name="remember" id="remember" class="cursor-pointer">
                <label for="remember" class="ml-2.5 text-sm text-gray-600 font-medium cursor-pointer">
                    Ingat saya di perangkat ini
                </label>
            </div>
        
            <!-- Submit Button -->
            <button type="submit" class="btn-primary w-full text-white font-bold py-4 px-6 rounded-xl shadow-lg transition-all">
                <i class="fas fa-sign-in-alt mr-2"></i>Masuk ke Dashboard
            </button>
        </form>

            <!-- Divider -->
            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-3 bg-white text-gray-400 font-medium">atau</span>
                </div>
            </div>
           

        <!-- Footer -->
        <div class="mt-10 text-center">
            <p class="text-gray-400 text-xs font-medium">
                &copy; 2026 <span class="font-bold text-gray-600">Tasty Food</span> • All Rights Reserved
            </p>
            <div class="mt-4 flex justify-center gap-4 text-xs">
                <a href="#" class="text-gray-400 hover:text-orange-500 transition-colors">Privacy Policy</a>
                <span class="text-gray-300">•</span>
                <a href="#" class="text-gray-400 hover:text-orange-500 transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }
    </script>

</body>

</html>