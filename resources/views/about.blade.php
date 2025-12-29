@extends('layouts.app')

@section('title', 'Tentang Kami - ' . config('app.name'))

@section('content')
<div class="bg-primary">
    <!-- Hero Section dengan Parallax Effect -->
    <div class="relative min-h-[500px] flex items-center bg-gradient-to-r from-[#15bd77] to-[#383131] overflow-hidden">
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
    <!-- STURUKTUR ORGANISASI -->
    <section class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">
        Struktur Organisasi KMPPJ
    </h2>
    <p class="text-center mb-2">Struktur Organisasi Komunitas Mahasiswa dan Pelajar Puncak Jaya (KMPPJ) Kota Studi Jayapura disusun secara
         sistematis dan hierarkis untuk menjamin efektivitas koordinasi, pelaksanaan program, serta pengambilan keputusan organisasi. 
         Struktur ini terdiri dari Ketua, Wakil Ketua, Sekretaris, Bendahara, serta bidang-bidang kerja sesuai kebutuhan organisasi,
          yang masing-masing memiliki tugas dan tanggung jawab jelas. Seluruh unsur dalam struktur organisasi bekerja secara kolektif dan 
          berlandaskan prinsip kebersamaan, transparansi, dan tanggung jawab demi mewujudkan visi dan misi KMPPJ sebagai 
        wadah pengembangan sumber daya mahasiswa dan pelajar asal Kabupaten Puncak Jaya di Kota Studi Jayapura, Papua.</p>
        <br>
    <div class="flex justify-center">
        <div class="cursor-pointer bg-white rounded-2xl shadow-lg overflow-hidden">
            <img src="images/sekeret/4.jpg"
                 alt="Struktur Organisasi KMPPJ"
                 onclick="openModal(this.src, this.alt)"
                 class="max-w-full h-auto object-contain hover:scale-105 transition duration-300">
        </div>
    </div>
</section>


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
                            “Mewujudkan KMPPJ sebagai wadah persatuan, pembinaan, dan pengembangan potensi mahasiswa Puncak Jaya yang berintegritas, dan berdaya saing.”
                            </p>
                        </div>
                        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                            <div class="flex items-center justify-center w-20 h-20 bg-[#85c226] bg-opacity-10 rounded-full mx-auto mb-6">
                                <svg class="w-10 h-10 text-[#85c226]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-semibold text-gray-900 mb-6 ">Misi</h3>
                            <ul class="text-gray-600 space-y-4">
                                @foreach(['PROGRAM KERJA BADAN PENGURUS TAHUN 2025-2026', 'Mendorong kaderisasi dan melatih kepemimpinan untuk menciptakan generasi muda Puncak Jaya yang aktif dan kritis.', 'Menjalin mitra kerja dengan organisasi tetangga sesuai AD/ART KMPPJ demi kemajuan bersama.'] as $item)
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

    <section class="max-w-6xl mx-auto px-4 py-12 space-y-12">

  <!-- TUJUAN PORTAL -->
  <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">
      TUJUAN PORTAL KMPPJ
    </h2>
    <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
      Portal KMPPJ Kota Studi Jayapura bertujuan sebagai media resmi informasi dan komunikasi organisasi yang berfungsi untuk menyampaikan seluruh aktivitas, program kerja, serta kebijakan Badan Pengurus KMPPJ secara transparan dan akuntabel. Portal ini menjadi sarana dokumentasi kegiatan, publikasi agenda organisasi, penguatan identitas kelembagaan, serta wadah interaksi dan partisipasi anggota dalam mendukung pengembangan potensi mahasiswa dan pelajar Puncak Jaya. Selain itu, portal KMPPJ diharapkan mampu meningkatkan citra positif organisasi, memperluas jaringan kemitraan, serta menjadi pusat informasi yang mudah diakses oleh anggota, alumni, dan masyarakat luas.
    </p>
  </div>

  <!-- TUJUAN VISI -->
  <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-center text-green-600 mb-6">
      TUJUAN VISI KMPPJ
    </h2>
    <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
      Tujuan visi KMPPJ adalah membentuk organisasi mahasiswa yang solid, bersatu, dan berintegritas sebagai rumah besar mahasiswa dan pelajar Puncak Jaya di Kota Studi Jayapura. Visi ini diarahkan untuk menciptakan sumber daya manusia yang unggul, berdaya saing, serta memiliki karakter kepemimpinan yang mampu berkontribusi secara nyata bagi daerah, bangsa, dan gereja. KMPPJ diharapkan menjadi wadah pembinaan yang berkelanjutan dalam pengembangan intelektual, moral, sosial, dan spiritual anggotanya.
    </p>
  </div>

  <!-- TUJUAN MISI -->
  <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-center text-purple-600 mb-8">
      TUJUAN MISI KMPPJ
    </h2>

    <div class="space-y-6">

      <!-- MISI 1 -->
      <div class="border-l-4 border-purple-500 pl-4">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">
          1. Penguatan Kaderisasi dan Kepemimpinan
        </h3>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
          Misi ini bertujuan membentuk kader-kader KMPPJ yang memiliki jiwa kepemimpinan, wawasan kebangsaan, serta kemampuan berpikir kritis dan solutif. Melalui pelatihan, diskusi, dan pembinaan berkelanjutan, KMPPJ menyiapkan generasi muda Puncak Jaya yang aktif berorganisasi, berani menyampaikan aspirasi, dan siap menjadi agen perubahan di lingkungan kampus maupun masyarakat.
        </p>
      </div>

      <!-- MISI 2 -->
      <div class="border-l-4 border-purple-500 pl-4">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">
          2. Pengembangan Jejaring dan Kemitraan
        </h3>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
          Misi ini bertujuan membangun hubungan kerja sama yang harmonis dan saling menguatkan dengan organisasi mahasiswa lain, lembaga kemasyarakatan, pemerintah, dan mitra strategis sesuai AD/ART KMPPJ. Kemitraan ini diarahkan untuk meningkatkan kapasitas organisasi, memperluas ruang gerak program kerja, serta mendorong kolaborasi positif demi kemajuan bersama dan kesejahteraan mahasiswa Puncak Jaya.
        </p>
      </div>

    </div>
  </div>

  <section
    class="relative py-24 bg-cover bg-center"
    style="background-image: url('images/bg-kmppj.jpg');">

    <!-- Overlay Gradient Luar -->
    <div class="absolute inset-0 bg-gradient-to-b
                from-black/90 via-black/80 to-black/95">
    </div>

    <!-- Shadow Frame -->
    <div class="relative max-w-7xl mx-auto px-4">

        <!-- Heading -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-wide">
                BADAN PENGURUS KMPPJ
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-[#c20430] to-black mx-auto mt-4 rounded-full"></div>
            <p class="text-gray-300 mt-5 text-lg">
                Kota Studi Jayapura – Papua
            </p>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12">

            <!-- Card -->
            <div class="group relative rounded-2xl overflow-hidden
                        shadow-[0_25px_60px_rgba(0,0,0,0.8)]
                        hover:shadow-red-900/40 transition duration-500">

                <img src="images/team1/ketua.jpeg"
                     alt="Ketua KMPPJ"
                     class="w-full h-80 object-cover
                            group-hover:scale-110 transition duration-700 ease-out">

                <!-- Overlay Card -->
                <div class="absolute inset-0 bg-gradient-to-t
                            from-black/90 via-black/50 to-transparent
                            opacity-0 group-hover:opacity-100 transition duration-500">
                </div>

                <!-- Text -->
                <div class="absolute bottom-0 w-full p-6 text-center
                            translate-y-6 group-hover:translate-y-0
                            transition duration-500">
                    <h3 class="text-xl font-semibold text-white">
                        Demison Wonda
                    </h3>
                    <p class="text-sm text-[#c20430] mt-1 tracking-wide">
                        Ketua Umum KMPPJ
                    </p>
                </div>
            </div>

            <!-- Duplikat card (tinggal ganti data) -->
            <!-- Wakil -->
            <div class="group relative rounded-2xl overflow-hidden
                        shadow-[0_25px_60px_rgba(0,0,0,0.8)]
                        hover:shadow-red-900/40 transition duration-500">

                <img src="images/team1/wakil.jpeg"
                     alt="Wakil Ketua KMPPJ"
                     class="w-full h-80 object-cover
                            group-hover:scale-110 transition duration-700 ease-out">

                <div class="absolute inset-0 bg-gradient-to-t
                            from-black/90 via-black/50 to-transparent
                            opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="absolute bottom-0 w-full p-6 text-center
                            translate-y-6 group-hover:translate-y-0
                            transition duration-500">
                    <h3 class="text-xl font-semibold text-white">
                        Yani Wanimbo
                    </h3>
                    <p class="text-sm text-[#c20430] mt-1 tracking-wide">
                        Wakil Ketua KMPPJ
                    </p>
                </div>
            </div>

            <!-- Sekretaris -->
            <div class="group relative rounded-2xl overflow-hidden
                        shadow-[0_25px_60px_rgba(0,0,0,0.8)]
                        hover:shadow-red-900/40 transition duration-500">

                <img src="images/team1/sek.jpg"
                     alt="Sekretaris KMPPJ"
                     class="w-full h-80 object-cover
                            group-hover:scale-110 transition duration-700 ease-out">

                <div class="absolute inset-0 bg-gradient-to-t
                            from-black/90 via-black/50 to-transparent
                            opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="absolute bottom-0 w-full p-6 text-center
                            translate-y-6 group-hover:translate-y-0
                            transition duration-500">
                    <h3 class="text-xl font-semibold text-white">
                        Siron Telenggen
                    </h3>
                    <p class="text-sm text-[#c20430] mt-1 tracking-wide">
                        Sekretaris I KMPPJ
                    </p>
                </div>
            </div>

            <!-- Bendahara -->
            <div class="group relative rounded-2xl overflow-hidden
                        shadow-[0_25px_60px_rgba(0,0,0,0.8)]
                        hover:shadow-red-900/40 transition duration-500">

                <img src="images/sekeret/5.jpg"
                     alt="Bendahara KMPPJ"
                     class="w-full h-80 object-cover
                            group-hover:scale-110 transition duration-700 ease-out">

                <div class="absolute inset-0 bg-gradient-to-t
                            from-black/90 via-black/50 to-transparent
                            opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="absolute bottom-0 w-full p-6 text-center
                            translate-y-6 group-hover:translate-y-0
                            transition duration-500">
                    <h3 class="text-xl font-semibold text-white">
                        Nama Bendahara
                    </h3>
                    <p class="text-sm text-[#c20430] mt-1 tracking-wide">
                        Bendahara
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>



    <section class="max-w-7xl mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center mb-10">
        SEKERETARIAT KMPPJ - KOTA STUDI JAYAPURA
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        <div class="group overflow-hidden rounded-xl shadow-lg cursor-pointer">
            <img src="images/sekeret/1.jpg"
                 alt="Rapat internal pengurus KMPPJ dalam rangka evaluasi dan perencanaan program kerja."
                 data-deskripsi="Gedung Sekretariat KMPPJ Kota Studi Jayapura sebagai pusat administrasi dan koordinasi organisasi."
                 onclick="openModal(this)"
                 class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-300">
                 
        </div>

        <div class="group overflow-hidden rounded-xl shadow-lg cursor-pointer">
            <img src="images/sekeret/2.jpg"
                 alt="Kegiatan Rapat"
                 data-deskripsi=""
                 onclick="openModal(this)"
        
                 class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-300">
        </div>

        <div class="group overflow-hidden rounded-xl shadow-lg cursor-pointer">
            <img src="images/sekeret/3.jpg"
                 alt="Aktivitas Sekretariat"
                 data-deskripsi="Aktivitas harian pengurus KMPPJ dalam pelayanan dan pengelolaan administrasi."
                 onclick="openModal(this)"
                 class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-300">
        </div>

        <div class="group overflow-hidden rounded-xl shadow-lg cursor-pointer">
            <img src="images/sekeret/5.jpg"
                 alt="Dokumentasi KMPPJ"
                 data-deskripsi="Dokumentasi kegiatan kebersamaan dan pelayanan mahasiswa KMPPJ."
                 onclick="openModal(this)"
                 class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-300">
        </div>

    </div>
</section>



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
                        <p class="text-gray-600 text-center">kmppj@gmail.com</p>
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
                        <p class="text-gray-600 text-center">Jl. Pasar Baru Joutefa<br> Provinsi Papua</p>
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