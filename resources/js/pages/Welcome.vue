<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const mobileMenuOpen = ref(false);
</script>

<template>
    <Head title="Jasamarga Jogja Bawen - Beranda" />

    <div class="min-h-screen bg-white">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img src="/images/jasamarga-logo.png" alt="Jasamarga Logo" class="h-10 w-auto mr-3" />
                        <div class="text-xl font-bold text-blue-700">JASAMARGA</div>
                        <div class="text-sm text-gray-600 ml-1">JOGJA BAWEN</div>
                    </div>

                    <!-- Desktop Navigation -->
                    <nav class="hidden md:flex space-x-8">
                        <Link href="/" class="text-gray-700 hover:text-blue-700 px-3 py-2 font-medium">Beranda</Link>
                        <Link href="/tentang-kami" class="text-gray-700 hover:text-blue-700 px-3 py-2 font-medium">Tentang Kami</Link>
                        <Link href="/berita-informasi" class="text-gray-700 hover:text-blue-700 px-3 py-2 font-medium">Berita & Informasi</Link>
                        <Link href="/digital-arsip" class="text-gray-700 hover:text-blue-700 px-3 py-2 font-medium">Digital Arsip</Link>
                        <Link href="/kontak" class="text-gray-700 hover:text-blue-700 px-3 py-2 font-medium">Kontak</Link>
                    </nav>

                    <!-- Search Icon -->
                    <div class="hidden md:flex items-center">
                        <button class="text-gray-600 hover:text-blue-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-600 hover:text-blue-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Navigation -->
                <div v-show="mobileMenuOpen" class="md:hidden border-t">
                    <div class="py-2 space-y-1">
                        <Link href="/" class="block px-3 py-2 text-gray-700 hover:text-blue-700 font-medium">Beranda</Link>
                        <Link href="/tentang-kami" class="block px-3 py-2 text-gray-700 hover:text-blue-700 font-medium">Tentang Kami</Link>
                        <Link href="/berita-informasi" class="block px-3 py-2 text-gray-700 hover:text-blue-700 font-medium">Berita & Informasi</Link>
                        <Link href="/digital-arsip" class="block px-3 py-2 text-gray-700 hover:text-blue-700 font-medium">Digital Arsip</Link>
                        <Link href="/kontak" class="block px-3 py-2 text-gray-700 hover:text-blue-700 font-medium">Kontak</Link>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main>
            <!-- Hero Section -->
            <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
                <div class="max-w-6xl mx-auto px-4 text-center">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">PT Jasamarga Jogja Bawen</h1>
                    <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                        Menghubungkan Yogyakarta dan Bawen melalui infrastruktur jalan tol yang berkualitas tinggi
                    </p>
                    <button class="bg-yellow-500 hover:bg-yellow-400 text-blue-900 font-bold py-4 px-8 rounded-lg text-lg transition-colors">
                        Jelajahi Lebih Lanjut
                    </button>
                </div>
            </section>

            <!-- Tata Budaya Section -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-bold text-blue-800 mb-4">Tata Budaya</h2>
                        <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- BATIK -->
                        <div class="text-center bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-20 h-20 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L3 7l9 5 9-5-9-5zM3 17l9 5 9-5M3 12l9 5 9-5"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-4">BATIK (Bekerja dengan Baik, Teliti, dan Beretika)</h3>
                            <div class="w-12 h-1 bg-yellow-500 mx-auto mb-4"></div>
                            <p class="text-gray-600">
                                Briefing dan doa bersama yang dilakukan di kantor Sareh maupun kantor proyek setiap Senin pagi.
                            </p>
                        </div>

                        <!-- MONJALI -->
                        <div class="text-center bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-20 h-20 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
                                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>
                                    <path d="m9 14 2 2 4-4"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-4">MONJALI (Monitoring Kerja dan Evaluasi)</h3>
                            <div class="w-12 h-1 bg-yellow-500 mx-auto mb-4"></div>
                            <p class="text-gray-600">
                                Rapat yang akan dilakukan oleh setiap divisi untuk memonitor dan mengevaluasi kemajuan pekerjaan pada setiap minggunya, dilaksanakan rutin pada hari Selasa.
                            </p>
                        </div>

                        <!-- SEMAR -->
                        <div class="text-center bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-20 h-20 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="m22 11-3-3m0 0-3 3m3-3v8"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-4">SEMAR (Semangat Memahami Aturan)</h3>
                            <div class="w-12 h-1 bg-yellow-500 mx-auto mb-4"></div>
                            <p class="text-gray-600">
                                Sosialisasi tata nilai AKHLAK dan peraturan perusahaan terbaru dilakukan setiap 3 bulan sekali pada hari Rabu.
                            </p>
                        </div>
                    </div>

                    <!-- Second Row -->
                    <div class="grid md:grid-cols-2 gap-8 mt-12 max-w-4xl mx-auto">
                        <!-- GATHUK -->
                        <div class="text-center bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-20 h-20 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-4">GATHUK (Gathering dan Tukaran Pikiran)</h3>
                            <div class="w-12 h-1 bg-yellow-500 mx-auto mb-4"></div>
                            <p class="text-gray-600">
                                Kegiatan gathering dan sharing session antar divisi untuk mempererat hubungan kerja sama tim.
                            </p>
                        </div>

                        <!-- REWANG -->
                        <div class="text-center bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-20 h-20 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-4">REWANG (Saling Membantu)</h3>
                            <div class="w-12 h-1 bg-yellow-500 mx-auto mb-4"></div>
                            <p class="text-gray-600">
                                Budaya saling membantu dan gotong royong dalam menyelesaikan tugas dan tantangan bersama.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Informasi Proyek Section -->
            <section class="py-16 bg-white">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-bold text-blue-800 mb-4">Informasi Ruas Tol Jogja - Bawen</h2>
                        <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="text-5xl font-bold text-blue-800 mb-2">75,12</div>
                            <div class="text-xl text-gray-600">Kilometer</div>
                            <div class="text-sm text-gray-500 mt-2">Panjang Total Ruas</div>
                        </div>
                        <div class="text-center">
                            <div class="text-5xl font-bold text-green-600 mb-2">80,76%</div>
                            <div class="text-xl text-gray-600">Seksi 1</div>
                            <div class="text-sm text-gray-500 mt-2">Progress Konstruksi</div>
                        </div>
                        <div class="text-center">
                            <div class="text-5xl font-bold text-green-600 mb-2">76,74%</div>
                            <div class="text-xl text-gray-600">Seksi 6</div>
                            <div class="text-sm text-gray-500 mt-2">Progress Konstruksi</div>
                        </div>
                        <div class="text-center">
                            <div class="text-5xl font-bold text-orange-500 mb-2">6</div>
                            <div class="text-xl text-gray-600">Seksi</div>
                            <div class="text-sm text-gray-500 mt-2">Pembagian Konstruksi</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Berita & Informasi -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-bold text-blue-800 mb-4">Berita & Informasi Terkini</h2>
                        <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="h-48 bg-gray-300 flex items-center justify-center">
                                <span class="text-gray-500">Gambar Berita</span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3 text-gray-800">Kerja Sama dengan Fakultas Psikologi UGM</h3>
                                <p class="text-gray-600 mb-4">PT Jasamarga Jogja Bawen menjalin kerja sama dengan Fakultas Psikologi UGM untuk perkuat layanan kesehatan mental karyawan.</p>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Baca Selengkapnya →</a>
                            </div>
                        </article>

                        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="h-48 bg-gray-300 flex items-center justify-center">
                                <span class="text-gray-500">Gambar Berita</span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3 text-gray-800">Progress Pembangunan Tol Jogja-Bawen</h3>
                                <p class="text-gray-600 mb-4">Update terbaru mengenai kemajuan pembangunan jalan tol Yogyakarta-Bawen yang terus berlangsung sesuai jadwal.</p>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Baca Selengkapnya →</a>
                            </div>
                        </article>

                        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="h-48 bg-gray-300 flex items-center justify-center">
                                <span class="text-gray-500">Gambar Berita</span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3 text-gray-800">HUT ke-80 Republik Indonesia</h3>
                                <p class="text-gray-600 mb-4">Peringatan HUT ke-80 Republik Indonesia dengan berbagai kegiatan dan upacara kemerdekaan di lingkungan Jasamarga.</p>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Baca Selengkapnya →</a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="py-16 bg-blue-800 text-white">
                <div class="max-w-6xl mx-auto px-4 text-center">
                    <h2 class="text-3xl font-bold mb-4">Bergabunglah Dengan Kami</h2>
                    <p class="text-xl mb-8 max-w-2xl mx-auto">
                        Mari bersama-sama membangun infrastruktur yang berkualitas untuk kemajuan Indonesia
                    </p>
                    <div class="space-x-4">
                        <Link href="/kontak" class="bg-yellow-500 hover:bg-yellow-400 text-blue-900 font-bold py-3 px-8 rounded-lg transition-colors">
                            Hubungi Kami
                        </Link>
                        <Link href="/tentang-kami" class="border-2 border-white hover:bg-white hover:text-blue-800 text-white font-bold py-3 px-8 rounded-lg transition-colors">
                            Pelajari Lebih Lanjut
                        </Link>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12">
            <div class="max-w-6xl mx-auto px-4">
                <div class="grid md:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div>
                        <div class="flex items-center mb-4">
                            <img src="/images/jasamarga-logo.png" alt="Jasamarga Logo" class="h-8 w-auto mr-2" />
                            <div class="text-lg font-bold">JASAMARGA</div>
                        </div>
                        <p class="text-gray-400 mb-4">
                            PT Jasamarga Jogja Bawen (JJB) merupakan Badan Usaha Jalan Tol (BUJT) yang dibentuk oleh konsorsium BUMN pemenang lelang pembangunan Jalan Tol Yogyakarta-Bawen.
                        </p>
                    </div>

                    <!-- Tentang Kami -->
                    <div>
                        <h4 class="text-lg font-bold mb-4">Tentang Kami</h4>
                        <ul class="space-y-2">
                            <li><Link href="/profil-perusahaan" class="text-gray-400 hover:text-white">Profil Perusahaan</Link></li>
                            <li><Link href="/visi-misi" class="text-gray-400 hover:text-white">Visi & Misi</Link></li>
                            <li><Link href="/tata-nilai" class="text-gray-400 hover:text-white">Tata Nilai</Link></li>
                            <li><Link href="/disclaimer" class="text-gray-400 hover:text-white">Disclaimer</Link></li>
                        </ul>
                    </div>

                    <!-- Bantuan -->
                    <div>
                        <h4 class="text-lg font-bold mb-4">Bantuan</h4>
                        <ul class="space-y-2">
                            <li><a href="https://www.jasamarga.com/kalkulator-tarif-tol" class="text-gray-400 hover:text-white">Kalkulator Tarif Tol</a></li>
                            <li><Link href="/panduan" class="text-gray-400 hover:text-white">Panduan Pengguna</Link></li>
                            <li><Link href="/faq" class="text-gray-400 hover:text-white">FAQ</Link></li>
                        </ul>
                    </div>

                    <!-- Kontak -->
                    <div>
                        <h4 class="text-lg font-bold mb-4">Kontak Kami</h4>
                        <div class="space-y-3 text-gray-400">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                </svg>
                                <span>Jl. Sareh No.3, Kotabaru, Kec. Gondokusuman, Kota Yogyakarta, DIY 55224</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                                <a href="mailto:jasamargajogjabawen@gmail.com" class="hover:text-white">jasamargajogjabawen@gmail.com</a>
                            </div>
                            <div class="flex items-center space-x-4 mt-4">
                                <a href="https://www.instagram.com/jasamargajogjabawen.official/" target="_blank" class="hover:text-yellow-500">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.624 5.367 11.99 11.988 11.99s11.99-5.366 11.99-11.99C24.007 5.367 18.641.001 12.017.001zM8.449 16.988c-1.297 0-2.348-1.051-2.348-2.348 0-1.297 1.051-2.348 2.348-2.348 1.297 0 2.348 1.051 2.348 2.348 0 1.297-1.051 2.348-2.348 2.348zm7.718 0c-1.297 0-2.348-1.051-2.348-2.348 0-1.297 1.051-2.348 2.348-2.348 1.297 0 2.348 1.051 2.348 2.348 0 1.297-1.051 2.348-2.348 2.348z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                    <p>&copy; 2025 PT Jasamarga Jogja Bawen. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</template>

<style scoped>
/* Additional custom styles if needed */
</style>
