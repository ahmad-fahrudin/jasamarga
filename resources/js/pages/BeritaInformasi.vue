<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const mobileMenuOpen = ref(false);

const beritaList = [
    {
        id: 1,
        judul: "Kerja Sama dengan Fakultas Psikologi UGM untuk Perkuat Layanan Kesehatan Mental Karyawan",
        ringkasan: "PT Jasamarga Jogja Bawen menjalin kerja sama dengan Fakultas Psikologi UGM untuk perkuat layanan kesehatan mental karyawan sebagai bagian dari komitmen perusahaan terhadap kesejahteraan SDM.",
        tanggal: "25 Agustus 2025",
        kategori: "Kerja Sama"
    },
    {
        id: 2,
        judul: "Progress Pembangunan Tol Jogja-Bawen Capai 78% pada Bulan Agustus 2025",
        ringkasan: "Pembangunan jalan tol Yogyakarta-Bawen terus menunjukkan kemajuan signifikan dengan progres konstruksi Seksi 1 mencapai 80.76% dan Seksi 6 sebesar 76.74%.",
        tanggal: "20 Agustus 2025",
        kategori: "Progress Proyek"
    },
    {
        id: 3,
        judul: "Peringatan HUT ke-80 Republik Indonesia dengan Upacara Kemerdekaan",
        ringkasan: "Seluruh karyawan PT Jasamarga Jogja Bawen memperingati HUT ke-80 Republik Indonesia dengan menggelar upacara bendera dan berbagai kegiatan kemerdekaan.",
        tanggal: "17 Agustus 2025",
        kategori: "Event"
    },
    {
        id: 4,
        judul: "Implementasi Teknologi Smart Highway untuk Keamanan Pengguna Jalan",
        ringkasan: "Penerapan teknologi smart highway pada ruas tol Jogja-Bawen untuk meningkatkan keamanan dan kenyamanan pengguna jalan dengan sistem monitoring terpadu.",
        tanggal: "10 Agustus 2025",
        kategori: "Teknologi"
    },
    {
        id: 5,
        judul: "Program CSR Pemberdayaan Masyarakat Sekitar Proyek Tol",
        ringkasan: "PT Jasamarga Jogja Bawen meluncurkan program CSR untuk pemberdayaan masyarakat sekitar proyek melalui pelatihan keterampilan dan pengembangan UMKM.",
        tanggal: "5 Agustus 2025",
        kategori: "CSR"
    },
    {
        id: 6,
        judul: "Sosialisasi Keselamatan Kerja untuk Kontraktor dan Pekerja Proyek",
        ringkasan: "Kegiatan sosialisasi dan pelatihan keselamatan kerja (K3) dilaksanakan untuk seluruh kontraktor dan pekerja proyek guna meminimalisir risiko kecelakaan kerja.",
        tanggal: "1 Agustus 2025",
        kategori: "Keselamatan"
    }
];
</script>

<template>
    <Head title="Berita & Informasi - Jasamarga Jogja Bawen" />

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
                        <Link href="/berita-informasi" class="text-blue-700 border-b-2 border-blue-700 px-3 py-2 font-medium">Berita & Informasi</Link>
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
                        <Link href="/berita-informasi" class="block px-3 py-2 text-blue-700 font-medium bg-blue-50">Berita & Informasi</Link>
                        <Link href="/digital-arsip" class="block px-3 py-2 text-gray-700 hover:text-blue-700 font-medium">Digital Arsip</Link>
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
                    <span class="text-gray-700">Berita & Informasi</span>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <main>
            <!-- Hero Section -->
            <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
                <div class="container mx-auto px-4 text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Berita & Informasi</h1>
                    <p class="text-xl max-w-2xl mx-auto">
                        Ikuti perkembangan terkini seputar proyek dan kegiatan PT Jasamarga Jogja Bawen
                    </p>
                </div>
            </section>

            <!-- Filter Section -->
            <section class="py-8 bg-gray-50">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap gap-4 justify-center">
                        <button class="bg-blue-600 text-white px-6 py-2 rounded-full font-medium hover:bg-blue-700 transition-colors">
                            Semua
                        </button>
                        <button class="bg-white text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-100 border transition-colors">
                            Progress Proyek
                        </button>
                        <button class="bg-white text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-100 border transition-colors">
                            Kerja Sama
                        </button>
                        <button class="bg-white text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-100 border transition-colors">
                            Event
                        </button>
                        <button class="bg-white text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-100 border transition-colors">
                            CSR
                        </button>
                    </div>
                </div>
            </section>

            <!-- Berita Utama -->
            <section class="py-12">
                <div class="container mx-auto px-4">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">Berita Utama</h2>
                        <div class="w-16 h-1 bg-yellow-500"></div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Featured News -->
                        <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="h-64 bg-gray-300 flex items-center justify-center">
                                <span class="text-gray-500 text-lg">Gambar Berita Utama</span>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full font-medium">Progress Proyek</span>
                                    <span class="text-gray-500 text-sm ml-3">20 Agustus 2025</span>
                                </div>
                                <h3 class="text-xl font-bold mb-3 text-gray-800">
                                    Progress Pembangunan Tol Jogja-Bawen Capai 78% pada Bulan Agustus 2025
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    Pembangunan jalan tol Yogyakarta-Bawen terus menunjukkan kemajuan signifikan dengan progres konstruksi Seksi 1 mencapai 80.76% dan Seksi 6 sebesar 76.74%. Progres pembebasan lahan juga menunjukkan hasil positif...
                                </p>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>

                        <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="h-64 bg-gray-300 flex items-center justify-center">
                                <span class="text-gray-500 text-lg">Gambar Berita Utama</span>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full font-medium">Kerja Sama</span>
                                    <span class="text-gray-500 text-sm ml-3">25 Agustus 2025</span>
                                </div>
                                <h3 class="text-xl font-bold mb-3 text-gray-800">
                                    Kerja Sama dengan Fakultas Psikologi UGM untuk Perkuat Layanan Kesehatan Mental
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    PT Jasamarga Jogja Bawen menjalin kerja sama dengan Fakultas Psikologi UGM untuk perkuat layanan kesehatan mental karyawan sebagai bagian dari komitmen perusahaan terhadap kesejahteraan SDM...
                                </p>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Berita Terbaru -->
            <section class="py-12 bg-gray-50">
                <div class="container mx-auto px-4">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">Berita Terbaru</h2>
                        <div class="w-16 h-1 bg-yellow-500"></div>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <article
                            v-for="berita in beritaList"
                            :key="berita.id"
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow"
                        >
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500">Gambar Berita</span>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <span
                                        :class="{
                                            'bg-blue-100 text-blue-800': berita.kategori === 'Progress Proyek',
                                            'bg-green-100 text-green-800': berita.kategori === 'Kerja Sama',
                                            'bg-red-100 text-red-800': berita.kategori === 'Event',
                                            'bg-purple-100 text-purple-800': berita.kategori === 'Teknologi',
                                            'bg-orange-100 text-orange-800': berita.kategori === 'CSR',
                                            'bg-yellow-100 text-yellow-800': berita.kategori === 'Keselamatan'
                                        }"
                                        class="text-xs px-3 py-1 rounded-full font-medium"
                                    >
                                        {{ berita.kategori }}
                                    </span>
                                    <span class="text-gray-500 text-sm ml-3">{{ berita.tanggal }}</span>
                                </div>
                                <h3 class="text-lg font-bold mb-3 text-gray-800 line-clamp-2">
                                    {{ berita.judul }}
                                </h3>
                                <p class="text-gray-600 mb-4 text-sm line-clamp-3">
                                    {{ berita.ringkasan }}
                                </p>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm flex items-center">
                                    Baca Selengkapnya
                                    <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    </div>

                    <!-- Load More Button -->
                    <div class="text-center mt-12">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition-colors">
                            Muat Lebih Banyak
                        </button>
                    </div>
                </div>
            </section>

            <!-- Newsletter Subscription -->
            <section class="py-16 bg-blue-800 text-white">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-3xl font-bold mb-4">Berlangganan Newsletter</h2>
                    <p class="text-xl mb-8 max-w-2xl mx-auto">
                        Dapatkan berita dan informasi terbaru langsung di email Anda
                    </p>
                    <div class="max-w-md mx-auto flex gap-4">
                        <input
                            type="email"
                            placeholder="Masukkan email Anda"
                            class="flex-1 px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                        />
                        <button class="bg-yellow-500 hover:bg-yellow-400 text-blue-900 font-bold px-6 py-3 rounded-lg transition-colors">
                            Berlangganan
                        </button>
                    </div>
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

.line-clamp-3 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    line-clamp: 3;
}
</style>
