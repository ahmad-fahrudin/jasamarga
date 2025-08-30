<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import LandingLayout from '@/layouts/LandingLayout.vue';

// Tender-specific list (judul, ringkasan, dan tanggal berfungsi sebagai deadline/pengumuman)
const beritaList = [
    {
        id: 1,
        judul: "Tender Konstruksi Ruas A - Pembangunan Jembatan",
        ringkasan: "Pengadaan pekerjaan konstruksi untuk pembangunan jembatan pada Seksi A. Dokumen tender tersedia untuk diunduh dan klarifikasi teknis.",
        tanggal: "Deadline: 15 September 2025",
        kategori: "Tender"
    },
    {
        id: 2,
        judul: "Pengadaan Material Jalan - Lot 3",
        ringkasan: "Pengadaan material agregat dan aspal untuk kebutuhan pembangunan Seksi 2. Penawaran akan ditutup sesuai tanggal batas.",
        tanggal: "Deadline: 1 September 2025",
        kategori: "Pengumuman"
    },
    {
        id: 3,
        judul: "Tender Jasa Konsultansi - Manajemen Proyek",
        ringkasan: "Pencarian konsultan manajemen proyek untuk supervisi konstruksi dan pengendalian mutu selama fase pelaksanaan.",
        tanggal: "Deadline: 30 September 2025",
        kategori: "Tender"
    },
    {
        id: 4,
        judul: "Penawaran Rehabilitasi Rest Area",
        ringkasan: "Pengadaan jasa rehabilitasi fasilitas rest area sepanjang tol—including renovasi fasilitas umum dan keamanan.",
        tanggal: "Deadline: 20 September 2025",
        kategori: "Tender"
    },
    {
        id: 5,
        judul: "Pengumuman Hasil Pra-kualifikasi",
        ringkasan: "Daftar peserta yang lolos pra-kualifikasi untuk beberapa paket pekerjaan telah dipublikasikan. Silakan cek dokumen resmi untuk detail.",
        tanggal: "Pengumuman: 25 Agustus 2025",
        kategori: "Pengumuman"
    },
    {
        id: 6,
        judul: "Sosialisasi Proses Pengadaan",
        ringkasan: "Sesi sosialisasi dan klarifikasi dokumen tender bagi calon peserta. Informasi pendaftaran tersedia di portal pengadaan.",
        tanggal: "Tanggal: 5 September 2025",
        kategori: "Sosialisasi"
    }
];
</script>

<template>
    <LandingLayout title="Tender & Pengadaan - Jasamarga Jogja Bawen" :showBreadcrumb="true" breadcrumbTitle="Tender & Pengadaan">
        <!-- Main Content -->
        <main>
            <!-- Tender Utama -->
            <section class="py-12">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">Tender Utama</h2>
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
                                    Lihat Detail
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
                                    Lihat Detail
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
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">Tender Terbaru</h2>
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
                                    Lihat Detail
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
