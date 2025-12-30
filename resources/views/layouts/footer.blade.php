<footer class="bg-black border-t border-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Tentang Kami -->
            <div>
                <h3 class="text-white text-lg font-semibold mb-4">
                    Tentang Kami
                </h3>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    PORTAL BERITA KOMUNITAS MAHASISWA PELAJAR PUNCAK JAYA (KMPPJ)<br>
                    Alamat: Sekretariat Jl. Pasar Baru Youtefa, Asrama Kinomek Putra
                </p>

                <!-- Sosial Media -->
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-500 hover:text-[#0492c2]">
                        <!-- Facebook -->
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12S0 5.446 0 12.073c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>

                    <!-- Twitter -->
                    <a href="#" class="text-gray-500 hover:text-[#85c226]">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="#"
                        class="text-gray-400 hover:text-[#c26304] transition">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            fill="currentColor"
                            viewBox="0 0 24 24">

                            <path d="M7.75 2h8.5C19.42 2 22 4.58 22 7.75v8.5
                            C22 19.42 19.42 22 16.25 22h-8.5
                            C4.58 22 2 19.42 2 16.25v-8.5
                            C2 4.58 4.58 2 7.75 2z" />

                            <path d="M12 7a5 5 0 100 10 5 5 0 000-10zm0 8.2
                            a3.2 3.2 0 110-6.4 3.2 3.2 0 010 6.4z"
                                fill="#000" />

                            <circle cx="17.5" cy="6.5" r="1.2" fill="#000" />

                        </svg>
                    </a>
                    <!-- Youtue -->
                    <a href="#"
                class="text-gray-400 hover:text-[#c20430] transition">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="currentColor"
                        viewBox="0 0 24 24">

                        <!-- YouTube body -->
                        <path d="M23.498 6.186a2.978 2.978 0 00-2.096-2.11
                                C19.545 3.5 12 3.5 12 3.5s-7.545 0-9.402.576
                                A2.978 2.978 0 00.502 6.186
                                31.234 31.234 0 000 12
                                a31.234 31.234 0 00.502 5.814
                                2.978 2.978 0 002.096 2.11
                                C4.455 20.5 12 20.5 12 20.5s7.545 0 9.402-.576
                                a2.978 2.978 0 002.096-2.11
                                A31.234 31.234 0 0024 12
                                a31.234 31.234 0 00-.502-5.814z"/>

                        <!-- Play icon -->
                        <path d="M9.75 15.02V8.98L15.5 12z"
              fill="#000"/>

    </svg>
</a>

                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-white text-lg font-semibold mb-4">
                    Quick Links
                </h3>
                <nav class="flex flex-col space-y-3">
                    <a href="{{ route('home') }}" class="text-gray-400 hover:text-[#85c226]">Home</a>
                    <a href="{{ route('articles.index') }}" class="text-gray-400 hover:text-[#85c226]">Articles</a>
                    <a href="#" class="text-gray-400 hover:text-[#85c226]">Categories</a>
                </nav>
            </div>

            <!-- Kontak -->
            <div>
                <h3 class="text-white text-lg font-semibold mb-4">
                    Contact Info
                </h3>
                <div class="space-y-3 text-gray-400">
                    <p>📧 kmppj@gmail.com</p>
                    <p>📞 +62 852 5422 1251</p>
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="mt-12 pt-6 border-t border-gray-800">
            <p class="text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} NITCODE COMMUNITY. All rights reserved.
            </p>
        </div>

    </div>
</footer>