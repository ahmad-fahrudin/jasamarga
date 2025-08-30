<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import LandingLayout from '@/layouts/LandingLayout.vue';

// Press release / release-specific list
const beritaList = [
    {
        id: 1,
        judul: "Rilis: Perkembangan Pembangunan Tol Jogja-Bawen - Agustus 2025",
        ringkasan: "Laporan resmi perkembangan proyek tol Jogja-Bawen untuk publikasi bulanan yang merangkum progres pekerjaan, keselamatan, dan capaian mitigasi lingkungan.",
        tanggal: "25 Agustus 2025",
        kategori: "Rilis"
    },
    {
        id: 2,
        judul: "Rilis: Komitmen CSR untuk Pemberdayaan Ekonomi Lokal",
        ringkasan: "Dokumen rilis terkait program CSR perusahaan yang menampilkan capaian pelatihan UMKM dan rencana jangka menengah.",
        tanggal: "10 Agustus 2025",
        kategori: "Rilis"
    },
    {
        id: 3,
        judul: "Rilis Keamanan: Implementasi Smart Highway dan Dampaknya",
        ringkasan: "Rilis resmi tentang implementasi teknologi smart highway dan langkah-langkah peningkatan keselamatan pengguna jalan.",
        tanggal: "5 Agustus 2025",
        kategori: "Keamanan"
    },
    {
        id: 4,
        judul: "Rilis Humas: Kerja Sama dengan Fakultas Psikologi UGM",
        ringkasan: "Rilis publikasi kerja sama layanan kesehatan mental untuk karyawan, termasuk ruang lingkup program dan kontak humas.",
        tanggal: "1 September 2025",
        kategori: "Humas"
    },
    {
        id: 5,
        judul: "Rilis Teknis: Hasil Pra-kualifikasi dan Jadwal Evaluasi",
        ringkasan: "Rilis teknis yang memuat hasil pra-kualifikasi kontraktor dan jadwal evaluasi selanjutnya.",
        tanggal: "28 Agustus 2025",
        kategori: "Teknis"
    }
];
</script>

<template>
    <LandingLayout title="Rilis & Publikasi - Jasamarga Jogja Bawen" :showBreadcrumb="true" breadcrumbTitle="Rilis & Publikasi">
        <!-- Main Content -->
        <main>
            <!-- Rilis Utama -->
            <section class="py-12">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">Rilis Utama</h2>
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
                                    Unduh Rilis
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
                                    Unduh Rilis
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
                <div class="max-w-6xl mx-auto px-4">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">Rilis Terbaru</h2>
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
                                    Selengkapnya
                                    <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </main>
    </LandingLayout>
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
