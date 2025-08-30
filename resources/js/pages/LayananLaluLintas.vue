<script setup lang="ts">
import LandingLayout from '@/layouts/LandingLayout.vue';
</script>

<template>
    <LandingLayout title="Layanan Lalu Lintas - Jasamarga Jogja Bawen" :showBreadcrumb="true" breadcrumbTitle="Layanan Lalu Lintas">
        <main class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">LAYANAN LALU LINTAS</h1>
                <div class="h-0.5 w-24 bg-gray-300 mb-8"></div>

                <div class="prose max-w-none text-gray-700">
                    <p>
                        Pengoperasian ruas Tol Batang – Semarang di kelola PT Jasamarga Tollroad Operator (JMTO) secara keseluruhan salah satunya pelayanan lalu lintas, agar terpenuhinya Standar Pelayanan Minimal (SPM) sesuai yang disyaratkan oleh Pemerintah. Jumlah armada dalam menjalankan kegiatan operasional jalan tol adalah sebagai berikut :
                    </p>

                    <ul>
                        <li>Patroli Jalan Raya (PJR) untuk penanganan kejadian dan bantuan pengguna jalan.</li>
                        <li>Unit Pembersihan untuk menjaga kebersihan jalur dan fasilitas.</li>
                        <li>Unit Perawatan untuk perbaikan kecil dan pemeliharaan rutin.</li>
                        <li>Unit Pengaturan Lalu Lintas pada saat titik kemacetan atau kejadian.</li>
                    </ul>

                    <p>
                        Layanan lalu lintas juga mencakup koordinasi dengan pihak berwenang, pengaturan rambu sementara saat pekerjaan, serta pemberian informasi kepada pengguna jalan melalui media dan petugas di lapangan.
                    </p>

                    <figure>
                        <img src="/images/jasamarga-jumbotron4.jpg" alt="Layanan Lalu Lintas" />
                        <figcaption>Ilustrasi armada operasional dan pengaturan lalu lintas.</figcaption>
                    </figure>

                    <h2>Pelaporan</h2>
                    <p>
                        Jika menemukan kondisi darurat atau gangguan lalu lintas, silakan menghubungi layanan darurat dan layanan pelanggan yang tercantum di halaman kontak.
                    </p>
                </div>
            </div>
        </main>
    </LandingLayout>
</template>

<style scoped>
.prose img {
    width: 100%;
    height: auto;
    border-radius: 6px;
}
</style>
