<script setup lang="ts">
import LandingLayout from '@/layouts/LandingLayout.vue';
</script>

<template>
    <LandingLayout title="Layanan Transaksi - Jasamarga Jogja Bawen" :showBreadcrumb="true" breadcrumbTitle="Layanan Transaksi">
        <main class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">LAYANAN TRANSAKSI</h1>
                <div class="h-0.5 w-24 bg-gray-300 mb-8"></div>

                <div class="prose max-w-none text-gray-700">
                    <p>
                        Sistem transaksi yang diberlakukan pada Jalan Tol Batang-Semarang adalah sistem transaksi tertutup dengan pemberlakuan tarif integrasi dari Gerbang Tol Palimanan sampai dengan Gerbang Tol Kalingkung atau biasa disebut dengan Sistem Pengoperasian Cluster II. Jalan Tol Batang-Semarang merupakan ruas jalan tol terakhir di Cluster II (dari arah Jakarta) dengan barrier gate terletak di Gerbang Tol Kalingkung (KM 414). Pengoperasian Jalan Tol Batang-Semarang telah mengimplementasi pembayaran nontunai yang diintegrasikan dengan kartu pembayaran elektronik. Ruas Batang – Semarang memiliki 5 (lima) Gerbang Tol sebagai akses keluar masuk jalan tol, yaitu
                    </p>

                    <ul>
                        <li>Gerbang Tol Palimanan</li>
                        <li>Gerbang Tol Kandang</li>
                        <li>Gerbang Tol XYZ</li>
                        <li>Gerbang Tol ABC</li>
                        <li>Gerbang Tol Kalingkung (KM 414)</li>
                    </ul>

                    <p>
                        Selain itu, layanan transaksi meliputi informasi tarif, cara pembayaran nontunai (kartu elektronik dan QRIS jika tersedia), serta panduan bagi pengguna jalan tol terkait prosedur masuk-keluar pada gerbang tol dan integrasi tarif.
                    </p>

                    <figure>
                        <img src="/images/jasamarga-jumbotron3.jpg" alt="Layanan Transaksi" />
                        <figcaption>Contoh ilustrasi layanan transaksi dan fasilitas pembayaran nontunai.</figcaption>
                    </figure>

                    <h2>Informasi Tarif</h2>
                    <p>
                        Tarif ditentukan berdasarkan golongan kendaraan dan jarak tempuh. Untuk estimasi tarif, silakan gunakan Kalkulator Tarif Tol resmi atau hubungi layanan pelanggan.
                    </p>

                    <h2>Cara Pembayaran</h2>
                    <ul>
                        <li>Kartu pembayaran elektronik (e-toll / uang elektronik)</li>
                        <li>QRIS (jika tersedia pada gerbang tertentu)</li>
                        <li>Pembayaran melalui layanan resmi mitra yang bekerja sama</li>
                    </ul>

                    <h2>Tips Pengguna</h2>
                    <ul>
                        <li>Pastikan saldo kartu elektronik mencukupi sebelum memasuki tol.</li>
                        <li>Gunakan jalur pembayaran nontunai yang sesuai.</li>
                        <li>Hubungi petugas gerbang jika terjadi masalah pemotongan saldo.</li>
                    </ul>
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
