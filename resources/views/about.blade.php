@extends('layouts.app')

@section('title', 'Tentang Kami - ' . config('app.name'))

@section('content')
<div class="bg-white">
    <!-- Hero Section dengan Parallax Effect -->
    <div class="relative min-h-[500px] flex items-center bg-gradient-to-r from-[#85c226] to-[#b4e454] overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute inset-0 bg-[url('/images/pattern.png')] opacity-10 bg-repeat"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center text-white">
                <div class="flex justify-center mb-8">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo Portal Berita" class="w-32 h-32 object-contain rounded-full border-4 border-white shadow-lg">
                </div>
                <h1 class="text-5xl font-bold mb-6 animate-fade-in">Tentang Kami</h1>
                <p class="text-xl opacity-90 leading-relaxed mb-8">
                    Portal Berita adalah sumber berita terpercaya yang berkomitmen untuk menyajikan informasi akurat, 
                    berimbang, dan mendalam kepada pembaca kami.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="#visi-misi" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-6 py-3 rounded-lg transition duration-300 backdrop-blur-sm">
                        Pelajari Lebih Lanjut
                    </a>
                    <a href="#contact" class="bg-white text-[#85c226] hover:bg-opacity-90 px-6 py-3 rounded-lg transition duration-300">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="fill-current text-white" viewBox="0 0 1440 100" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,50 C150,100 350,0 500,50 C650,100 850,0 1000,50 C1150,100 1350,0 1440,50 L1440,100 L0,100 Z"></path>
            </svg>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="bg-gray-50 rounded-xl p-6 text-center transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-[#85c226] mb-2">10+</div>
                    <div class="text-gray-600">Tahun Pengalaman</div>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 text-center transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-[#85c226] mb-2">1M+</div>
                    <div class="text-gray-600">Pembaca Aktif</div>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 text-center transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-[#85c226] mb-2">50+</div>
                    <div class="text-gray-600">Jurnalis Profesional</div>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 text-center transform hover:scale-105 transition duration-300">
                    <div class="text-4xl font-bold text-[#85c226] mb-2">24/7</div>
                    <div class="text-gray-600">Peliputan Berita</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision & Mission dengan Card Design -->
    <div id="visi-misi" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Visi & Misi</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                            <div class="flex items-center justify-center w-20 h-20 bg-[#85c226] bg-opacity-10 rounded-full mx-auto mb-6">
                                <svg class="w-10 h-10 text-[#85c226]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-semibold text-gray-900 mb-6">Visi</h3>
                            <p class="text-gray-600 leading-relaxed text-lg">
                                ASRAMA MAHASISWA PEMDA PUNCAK JAYA (AMPPJ)
                                YAYASAN PUTRA PUTRI PUNCAK JAYA
                                Alamat: Sekretariat lama pasar baru Youtefa asrama kunomek putra
                            </p>
                        </div>
                        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                            <div class="flex items-center justify-center w-20 h-20 bg-[#85c226] bg-opacity-10 rounded-full mx-auto mb-6">
                                <svg class="w-10 h-10 text-[#85c226]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-semibold text-gray-900 mb-6">Misi</h3>
                            <ul class="text-gray-600 space-y-4">
                                @foreach(['PROGRAM KERJA BPP PENGURUS TAHUN 2024-2026', 'Setiap tahun kami akan adakan kegiatan Natal asrama satu tahun sekali', 'Setiap tahun kami akan adakan kegiatan perkenalan dalam satu tahun sekali', 'Setiap tahun akan adakan seminar'] as $item)
                                <li class="flex items-center text-lg">
                                    <svg class="w-6 h-6 text-[#85c226] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>{{ $item }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Milestones dengan Timeline Design -->
    <div class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold text-gray-900 text-center mb-12">Perjalanan Kami</h2>
                <div class="relative">
                    <!-- Timeline Line -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-[#85c226] to-[#b4e454]"></div>
                    
                    <div class="space-y-16">
                        @foreach($milestones as $index => $milestone)
                        <div class="relative">
                            <!-- Timeline Dot -->
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-[#85c226] rounded-full border-4 border-white shadow-lg"></div>
                            
                            <!-- Content -->
                            <div class="flex items-center justify-between">
                                @if($index % 2 == 0)
                                <!-- Konten Kiri -->
                                <div class="w-5/12 text-right pr-8">
                                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                                        <span class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#85c226] to-[#b4e454] text-white rounded-full text-lg font-semibold mb-4">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                            {{ $milestone['year'] }}
                                        </span>
                                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">{{ $milestone['title'] }}</h3>
                                        <p class="text-gray-600 text-lg">{{ $milestone['description'] }}</p>
                                    </div>
                                </div>
                                <div class="w-5/12"></div> <!-- Spacer untuk sisi kanan -->
                                @else
                                <!-- Konten Kanan -->
                                <div class="w-5/12"></div> <!-- Spacer untuk sisi kiri -->
                                <div class="w-5/12 text-left pl-8">
                                    <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                                        <span class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#85c226] to-[#b4e454] text-white rounded-full text-lg font-semibold mb-4">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                            {{ $milestone['year'] }}
                                        </span>
                                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">{{ $milestone['title'] }}</h3>
                                        <p class="text-gray-600 text-lg">{{ $milestone['description'] }}</p>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section dengan Card Hover Effects -->
    <div class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Badan Pengurus Asrama Putra Kinaonak</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach($team as $member)
                    <div class="group">
                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300 transform group-hover:-translate-y-2">
                            <div class="relative w-48 h-48 mx-auto mb-6">
                                <div class="absolute inset-0 bg-gradient-to-br from-[#85c226] to-[#b4e454] rounded-full opacity-10 group-hover:opacity-20 transition duration-300"></div>
                                <img src="{{ asset('images/team/Sek.jpg') }}" 
                                     alt="{{ $member['name'] }}" 
                                     class="w-full h-full object-cover rounded-full border-4 border-white shadow-lg">
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $member['name'] }}</h3>
                            <p class="text-[#85c226] font-medium mb-3">{{ $member['position'] }}</p>
                            <p class="text-gray-600 text-sm leading-relaxed">{{ $member['description'] }}</p>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <div class="flex justify-center space-x-4">
                                    <a href="#" class="text-gray-400 hover:text-[#85c226] transition duration-300">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-[#85c226] transition duration-300">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section dengan Interactive Elements -->
    <div id="contact" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Hubungi Kami</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300">
                        <div class="w-12 h-12 bg-[#85c226] bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-[#85c226]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 text-center">Telepon</h3>
                        <p class="text-gray-600 text-center">(+62) 852 5422 1251</p>
                        <a href="tel:0211234567" class="mt-4 block text-center text-sm text-[#85c226] hover:text-[#b4e454] transition duration-300">
                            Hubungi Sekarang
                        </a>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300">
                        <div class="w-12 h-12 bg-[#85c226] bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-[#85c226]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 text-center">Email</h3>
                        <p class="text-gray-600 text-center">kinaonak@gmail.com</p>
                        <a href="mailto:info@portalberita.com" class="mt-4 block text-center text-sm text-[#85c226] hover:text-[#b4e454] transition duration-300">
                            Kirim Email
                        </a>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300">
                        <div class="w-12 h-12 bg-[#85c226] bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-[#85c226]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 text-center">Alamat</h3>
                        <p class="text-gray-600 text-center">Jl. Media Raya No. 123<br> Provinsi Papua</p>
                        <a href="https://maps.app.goo.gl/VXz9XeMjWmenqjTeA" target="_blank" class="mt-4 block text-center text-sm text-[#85c226] hover:text-[#b4e454] transition duration-300">
                            Lihat di Peta
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan CSS untuk animasi -->
<style>
    @keyframes fade-in {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fade-in 1s ease-out;
    }
</style>
@endsection 