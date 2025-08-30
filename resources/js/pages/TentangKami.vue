<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const mobileMenuOpen = ref(false);
</script>

<template>
    <Head title="Tentang Kami - Jasamarga Jogja Bawen" />

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
                        <Link href="/tentang-kami" class="text-blue-700 border-b-2 border-blue-700 px-3 py-2 font-medium">Tentang Kami</Link>
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
                        <Link href="/tentang-kami" class="block px-3 py-2 text-blue-700 font-medium bg-blue-50">Tentang Kami</Link>
                        <Link href="/berita-informasi" class="block px-3 py-2 text-gray-700 hover:text-blue-700 font-medium">Berita & Informasi</Link>
                        <Link href="/digital-arsip" class="block px-3 py-2 text-gray-700 hover:text-blue-700 font-medium">Digital Arsip</Link>
                        <Link href="/kontak" class="block px-3 py-2 text-gray-700 hover:text-blue-700 font-medium">Kontak</Link>
                    </div>
                </div>
            </div>
        </header>

        <!-- Breadcrumb -->
        <div class="bg-gray-100 py-4">
            <div class="max-w-6xl mx-auto px-4">
                <nav class="text-sm">
                    <Link href="/" class="text-blue-600 hover:text-blue-800">Beranda</Link>
                    <span class="mx-2 text-gray-500">></span>
                    <span class="text-gray-700">Tentang Kami</span>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <main>
            <!-- Hero Section -->
            <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
                <div class="max-w-6xl mx-auto px-4 text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Tentang Kami</h1>
                    <p class="text-xl max-w-2xl mx-auto">
                        Mengenal lebih dekat PT Jasamarga Jogja Bawen dan komitmen kami dalam membangun infrastruktur berkualitas
                    </p>
                </div>
            </section>

            <!-- Profil Perusahaan -->
            <section class="py-16">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-3xl font-bold text-blue-800 mb-6">Profil Perusahaan</h2>
                            <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                                PT Jasamarga Jogja Bawen (JJB) merupakan Badan Usaha Jalan Tol (BUJT) yang dibentuk oleh konsorsium BUMN pemenang lelang pembangunan Jalan Tol Yogyakarta-Bawen. Sebagai anak perusahaan PT Jasa Marga (Persero) Tbk, kami berkomitmen untuk memberikan pelayanan infrastruktur jalan tol terbaik.
                            </p>
                            <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                                Proyek jalan tol Yogyakarta-Bawen memiliki panjang total 75,12 km yang akan menghubungkan Kota Yogyakarta dengan Kabupaten Bawen, Jawa Tengah. Proyek ini merupakan bagian penting dari pengembangan infrastruktur nasional untuk mendukung konektivitas antar wilayah.
                            </p>
                            <Link href="/kontak" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                                Hubungi Kami
                            </Link>
                        </div>
                        <div class="bg-gray-200 h-96 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500 text-lg">Gambar Profil Perusahaan</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Visi & Misi -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-blue-800 mb-4">Visi & Misi</h2>
                        <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Visi -->
                        <div class="bg-white p-8 rounded-lg shadow-md">
                            <h3 class="text-2xl font-bold text-blue-800 mb-6">Visi</h3>
                            <div class="w-12 h-1 bg-yellow-500 mb-6"></div>
                            <p class="text-gray-600 text-lg leading-relaxed">
                                Menjadi perusahaan penyedia infrastruktur jalan tol terpercaya dan terdepan dalam mendukung konektivitas regional dengan standar pelayanan berkualitas tinggi dan berkelanjutan.
                            </p>
                        </div>

                        <!-- Misi -->
                        <div class="bg-white p-8 rounded-lg shadow-md">
                            <h3 class="text-2xl font-bold text-blue-800 mb-6">Misi</h3>
                            <div class="w-12 h-1 bg-yellow-500 mb-6"></div>
                            <ul class="text-gray-600 text-lg leading-relaxed space-y-3">
                                <li class="flex items-start">
                                    <span class="text-blue-600 mr-3 mt-1">•</span>
                                    Membangun dan mengoperasikan jalan tol dengan standar keselamatan dan kualitas tertinggi
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-600 mr-3 mt-1">•</span>
                                    Memberikan pelayanan prima kepada pengguna jalan tol
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-600 mr-3 mt-1">•</span>
                                    Mendukung pertumbuhan ekonomi regional melalui infrastruktur berkualitas
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-600 mr-3 mt-1">•</span>
                                    Menerapkan praktik bisnis yang berkelanjutan dan ramah lingkungan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Tata Nilai Perusahaan -->
            <section class="py-16">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-blue-800 mb-4">Tata Nilai Perusahaan</h2>
                        <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- AKHLAK Values -->
                        <div class="text-center bg-white p-6 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">A</span>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-3">Amanah</h3>
                            <p class="text-gray-600">Memegang teguh kepercayaan yang diberikan dengan penuh tanggung jawab</p>
                        </div>

                        <div class="text-center bg-white p-6 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">K</span>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-3">Kompeten</h3>
                            <p class="text-gray-600">Terus belajar dan mengembangkan kemampuan untuk memberikan hasil terbaik</p>
                        </div>

                        <div class="text-center bg-white p-6 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">H</span>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-3">Harmonis</h3>
                            <p class="text-gray-600">Saling menghargai dan bekerja sama dengan baik dalam tim</p>
                        </div>

                        <div class="text-center bg-white p-6 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">L</span>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-3">Loyal</h3>
                            <p class="text-gray-600">Berdedikasi penuh untuk kemajuan perusahaan dan bangsa</p>
                        </div>

                        <div class="text-center bg-white p-6 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">A</span>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-3">Adaptif</h3>
                            <p class="text-gray-600">Mampu beradaptasi dengan perubahan dan tantangan zaman</p>
                        </div>

                        <div class="text-center bg-white p-6 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-600 font-bold text-xl">K</span>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-3">Kolaboratif</h3>
                            <p class="text-gray-600">Bekerja sama secara sinergis untuk mencapai tujuan bersama</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Struktur Organisasi -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-blue-800 mb-4">Struktur Organisasi</h2>
                        <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="text-center mb-8">
                            <div class="bg-gray-200 h-64 rounded-lg flex items-center justify-center">
                                <span class="text-gray-500 text-lg">Bagan Struktur Organisasi</span>
                            </div>
                        </div>
                        <p class="text-gray-600 text-center">
                            Struktur organisasi PT Jasamarga Jogja Bawen dirancang untuk mendukung efektivitas operasional dan pencapaian visi misi perusahaan.
                        </p>
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
