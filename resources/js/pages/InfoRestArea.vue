<script setup lang="ts">
import LandingLayout from '@/layouts/LandingLayout.vue';
</script>

<template>
    <LandingLayout title="Info Rest Area - Jasamarga Jogja Bawen" :showBreadcrumb="true" breadcrumbTitle="Info Rest Area">
        <main class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">INFO REST AREA</h1>
                <div class="h-0.5 w-24 bg-gray-300 mb-8"></div>

                <div class="prose max-w-none text-gray-700">
                    <p>
                        Jalan Tol Batang-Semarang juga menyediakan fasilitas pendukung pengoperasian berupa rest area atau tempat istirahat dan pelayanan. Ketersediaan rest area tersebut merupakan kewajiban bagi BUJT untuk meningkatkan keamanan dan kenyamanan bagi pengguna jalan tol. Rest area pada Jalan Tol Batang-Semarang terdapat di 4 (empat) lokasi yang terdiri dari rest area tipe A dan tipe B, yaitu:
                    </p>

                    <p>
                        Rest area tipe A adalah tempat istirahat yang dilengkapi dengan fasilitas dan pelayanan yang lengkap seperti Stasiun Pengisian Bahan Bakar Umum (SPBU), masjid, bengkel, retail, dan toilet, sedangkan rest area tipe B hanya terdapat fasilitas seperti toilet, mushola dan retail. Untuk pengelolaan rest area KM 379, KM 389, dan KM 391, di kelola PT Jasamarga Related Business (PT JMRB), sedangkan untuk pengelolaan rest area KM 360, di kelola PT Jasamarga Restarea Batang (PT JRB).
                    </p>

                    <figure>
                        <img src="/images/jasamarga-jumbotron2.jpg" alt="Rest Area" />
                        <figcaption>Contoh fasilitas rest area dan area parkir.</figcaption>
                    </figure>

                    <h2>Lokasi Rest Area</h2>
                    <ul>
                        <li>KM 360 - Pengelola: PT Jasamarga Restarea Batang (PT JRB)</li>
                        <li>KM 379 - Pengelola: PT Jasamarga Related Business (PT JMRB)</li>
                        <li>KM 389 - Pengelola: PT Jasamarga Related Business (PT JMRB)</li>
                        <li>KM 391 - Pengelola: PT Jasamarga Related Business (PT JMRB)</li>
                    </ul>

                    <h2>Fasilitas</h2>
                    <ul>
                        <li>Toilet umum</li>
                        <li>Mushola</li>
                        <li>Restoran / retail</li>
                        <li>Area parkir luas</li>
                        <li>SPBU (pada tipe A)</li>
                    </ul>

                    <p>
                        Untuk informasi lebih lanjut mengenai fasilitas dan layanan rest area, silakan hubungi pusat layanan pelanggan atau kunjungi situs resmi Jasamarga.
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
