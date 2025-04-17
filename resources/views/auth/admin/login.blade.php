<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Admin - {{ config('app.name', 'Portal Berita') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-gray-50 to-gray-100">
        <!-- Logo/Brand -->
        <div class="mb-8">
            <a href="{{ route('home') }}" class="text-3xl font-bold text-[#85c226]">
                {{ config('app.name', 'Portal Berita') }}
            </a>
        </div>

        <div class="w-full sm:max-w-md px-8 py-8 bg-white shadow-xl rounded-xl">
            <div class="mb-8 text-center">
                <h2 class="text-2xl font-bold text-gray-900">
                    Selamat Datang Kembali
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Silakan masuk untuk mengakses dashboard admin
                </p>
            </div>

            @if($errors->any())
                <div class="mb-6 p-4 rounded-lg bg-red-50 border border-red-200">
                    <div class="font-medium text-red-800">
                        {{ __('Ups! Ada yang salah.') }}
                    </div>

                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block font-medium text-base text-gray-700">
                        Alamat Email
                    </label>
                    <div class="mt-2 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                               class="pl-12 block w-full h-12 text-base rounded-lg border-gray-300 focus:border-[#85c226] focus:ring focus:ring-[#85c226] focus:ring-opacity-50 transition-colors duration-200"
                               placeholder="Masukkan email Anda">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block font-medium text-base text-gray-700">
                        Kata Sandi
                    </label>
                    <div class="mt-2 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input id="password" type="password" name="password" required
                               class="pl-12 block w-full h-12 text-base rounded-lg border-gray-300 focus:border-[#85c226] focus:ring focus:ring-[#85c226] focus:ring-opacity-50 transition-colors duration-200"
                               placeholder="Masukkan kata sandi">
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                               class="rounded border-gray-300 text-[#85c226] shadow-sm focus:border-[#85c226] focus:ring focus:ring-[#85c226] focus:ring-opacity-50">
                        <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                    </label>
                </div>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center items-center px-4 h-12 text-base bg-[#85c226] border border-transparent rounded-lg font-semibold text-white hover:bg-[#b4e454] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#85c226] transform transition-all duration-200 hover:scale-[1.02]">
                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                        </svg>
                        Masuk ke Dashboard
                    </button>
                </div>
            </form>

            <!-- Back to Home Link -->
            <div class="mt-6 text-center">
                <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-[#85c226] transition-colors duration-200">
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-8 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} {{ config('app.name', 'Portal Berita') }}. Hak Cipta Dilindungi.
        </div>
    </div>
</body>
</html>
