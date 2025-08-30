<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const mobileMenuOpen = ref(false);
const selectedCategory = ref('Semua');

const categories = ['Semua', 'Laporan Keuangan', 'Dokumen Proyek', 'Sertifikat', 'Galeri Foto', 'Video'];

const documents = [
    {
        id: 1,
        nama: "Laporan Keuangan Triwulan II 2025",
        kategori: "Laporan Keuangan",
        tanggal: "30 Juni 2025",
        ukuran: "2.5 MB",
        tipe: "PDF"
    },
    {
        id: 2,
        nama: "Progress Report Pembangunan Tol Jogja-Bawen Juli 2025",
        kategori: "Dokumen Proyek",
        tanggal: "31 Juli 2025",
        ukuran: "15.2 MB",
        tipe: "PDF"
    },
    {
        id: 3,
        nama: "Sertifikat ISO 9001:2015 Quality Management",
        kategori: "Sertifikat",
        tanggal: "15 Januari 2025",
        ukuran: "1.8 MB",
        tipe: "PDF"
    },
    {
        id: 4,
        nama: "Dokumentasi Groundbreaking Ceremony",
        kategori: "Galeri Foto",
        tanggal: "10 Maret 2025",
        ukuran: "45.7 MB",
        tipe: "ZIP"
    },
    {
        id: 5,
        nama: "Video Profile PT Jasamarga Jogja Bawen 2025",
        kategori: "Video",
        tanggal: "20 Februari 2025",
        ukuran: "128.5 MB",
        tipe: "MP4"
    },
    {
        id: 6,
        nama: "Environmental Impact Assessment (AMDAL)",
        kategori: "Dokumen Proyek",
        tanggal: "5 April 2025",
        ukuran: "8.9 MB",
        tipe: "PDF"
    }
];

const filteredDocuments = computed(() => {
    if (selectedCategory.value === 'Semua') {
        return documents;
    }
    return documents.filter(doc => doc.kategori === selectedCategory.value);
});

const getFileIcon = (tipe: string) => {
    switch (tipe.toLowerCase()) {
        case 'pdf':
            return 'M12 2C13.1 2 14 2.9 14 4V20C14 21.1 13.1 22 12 22H6C4.9 22 4 21.1 4 20V4C4 2.9 4.9 2 6 2H12M13 3H6V20H13V3Z';
        case 'zip':
            return 'M14,17H12V19H14M10,17H8V19H10M14,13H12V15H14M10,13H8V15H10M14,9H12V11H14M10,9H8V11H10M4,3H20A2,2 0 0,1 22,5V19A2,2 0 0,1 20,21H4A2,2 0 0,1 2,19V5A2,2 0 0,1 4,3Z';
        case 'mp4':
            return 'M17,10.5V7A1,1 0 0,0 16,6H4A1,1 0 0,0 3,7V17A1,1 0 0,0 4,18H16A1,1 0 0,0 17,17V13.5L21,17.5V6.5L17,10.5Z';
        default:
            return 'M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z';
    }
};
</script>

<template>
    <Head title="Digital Arsip - Jasamarga Jogja Bawen" />

    <div class="min-h-screen bg-white">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b">
            <div class="container mx-auto px-4">
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
                        <Link href="/digital-arsip" class="text-blue-700 border-b-2 border-blue-700 px-3 py-2 font-medium">Digital Arsip</Link>
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
                        <Link href="/digital-arsip" class="block px-3 py-2 text-blue-700 font-medium bg-blue-50">Digital Arsip</Link>
                        <Link href="/kontak" class="block px-3 py-2 text-gray-700 hover:text-blue-700 font-medium">Kontak</Link>
                    </div>
                </div>
            </div>
        </header>

        <!-- Breadcrumb -->
        <div class="bg-gray-100 py-4">
            <div class="container mx-auto px-4">
                <nav class="text-sm">
                    <Link href="/" class="text-blue-600 hover:text-blue-800">Beranda</Link>
                    <span class="mx-2 text-gray-500">></span>
                    <span class="text-gray-700">Digital Arsip</span>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <main>
            <!-- Hero Section -->
            <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
                <div class="container mx-auto px-4 text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Digital Arsip</h1>
                    <p class="text-xl max-w-2xl mx-auto">
                        Akses koleksi dokumen, laporan, dan media digital PT Jasamarga Jogja Bawen
                    </p>
                </div>
            </section>

            <!-- Search & Filter Section -->
            <section class="py-8 bg-gray-50">
                <div class="container mx-auto px-4">
                    <!-- Search Bar -->
                    <div class="max-w-2xl mx-auto mb-8">
                        <div class="relative">
                            <input
                                type="text"
                                placeholder="Cari dokumen, laporan, atau media..."
                                class="w-full px-4 py-3 pl-12 pr-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Category Filter -->
                    <div class="flex flex-wrap gap-4 justify-center">
                        <button
                            v-for="category in categories"
                            :key="category"
                            @click="selectedCategory = category"
                            :class="[
                                'px-6 py-2 rounded-full font-medium transition-colors',
                                selectedCategory === category
                                    ? 'bg-blue-600 text-white'
                                    : 'bg-white text-gray-700 hover:bg-gray-100 border'
                            ]"
                        >
                            {{ category }}
                        </button>
                    </div>
                </div>
            </section>

            <!-- Documents Grid -->
            <section class="py-12">
                <div class="container mx-auto px-4">
                    <div class="mb-8 flex justify-between items-center">
                        <div>
                            <h2 class="text-2xl font-bold text-blue-800 mb-2">Dokumen Tersedia</h2>
                            <p class="text-gray-600">{{ filteredDocuments.length }} dokumen ditemukan</p>
                        </div>

                        <!-- Sort Options -->
                        <div class="hidden md:flex items-center space-x-4">
                            <span class="text-gray-600">Urutkan:</span>
                            <select class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>Terbaru</option>
                                <option>Nama A-Z</option>
                                <option>Nama Z-A</option>
                                <option>Ukuran</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div
                            v-for="document in filteredDocuments"
                            :key="document.id"
                            class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow p-6"
                        >
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path :d="getFileIcon(document.tipe)"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <span
                                            :class="{
                                                'bg-blue-100 text-blue-800': document.kategori === 'Laporan Keuangan',
                                                'bg-green-100 text-green-800': document.kategori === 'Dokumen Proyek',
                                                'bg-purple-100 text-purple-800': document.kategori === 'Sertifikat',
                                                'bg-orange-100 text-orange-800': document.kategori === 'Galeri Foto',
                                                'bg-red-100 text-red-800': document.kategori === 'Video'
                                            }"
                                            class="text-xs px-2 py-1 rounded-full font-medium"
                                        >
                                            {{ document.kategori }}
                                        </span>
                                    </div>
                                </div>
                                <button class="text-gray-400 hover:text-gray-600">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                                    </svg>
                                </button>
                            </div>

                            <h3 class="text-lg font-semibold text-gray-800 mb-2 line-clamp-2">
                                {{ document.nama }}
                            </h3>

                            <div class="text-sm text-gray-500 space-y-1 mb-4">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/>
                                    </svg>
                                    {{ document.tanggal }}
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                        </svg>
                                        {{ document.ukuran }}
                                    </div>
                                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs font-medium">
                                        {{ document.tipe }}
                                    </span>
                                </div>
                            </div>

                            <div class="flex space-x-3">
                                <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg text-sm font-medium transition-colors">
                                    <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M5 20h14v-2H5v2zM19 9h-4V3H9v6H5l7 7 7-7z"/>
                                    </svg>
                                    Download
                                </button>
                                <button class="px-4 py-2 border border-gray-300 hover:bg-gray-50 text-gray-700 rounded-lg text-sm font-medium transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center mt-12">
                        <nav class="flex space-x-2">
                            <button class="px-3 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 text-gray-700">
                                Sebelumnya
                            </button>
                            <button class="px-3 py-2 bg-blue-600 text-white rounded-lg">1</button>
                            <button class="px-3 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 text-gray-700">2</button>
                            <button class="px-3 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 text-gray-700">3</button>
                            <button class="px-3 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 text-gray-700">
                                Selanjutnya
                            </button>
                        </nav>
                    </div>
                </div>
            </section>

            <!-- Upload Section (Admin Only) -->
            <section class="py-16 bg-gray-50">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-3xl font-bold text-blue-800 mb-4">Akses Terbatas</h2>
                    <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                        Beberapa dokumen memerlukan akses khusus. Silakan hubungi administrator untuk informasi lebih lanjut.
                    </p>
                    <Link href="/kontak" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition-colors">
                        Hubungi Administrator
                    </Link>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12">
            <div class="container mx-auto px-4">
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
.line-clamp-2 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    line-clamp: 2;
}
</style>
