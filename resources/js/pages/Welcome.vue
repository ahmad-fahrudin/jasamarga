<script setup lang="ts">

import { Link } from '@inertiajs/vue3';
import LandingLayout from '@/layouts/LandingLayout.vue';
import HeroSection from '@/components/HeroSection.vue';
</script>

<template>
    <LandingLayout title="Jasamarga Jogja Bawen - Beranda">
        <!-- Hero Section -->
        <HeroSection
            title="PT Jasamarga Jogja Bawen"
            background-class="bg-gradient-to-r from-blue-600 to-blue-800"
        >
            <template #content>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                    Menghubungkan Yogyakarta dan Bawen melalui infrastruktur jalan tol yang berkualitas tinggi
                </p>
            </template>
            <template #actions>
                <button class="bg-yellow-500 hover:bg-yellow-400 text-blue-900 font-bold py-4 px-8 rounded-lg text-lg transition-colors">
                    Jelajahi Lebih Lanjut
                </button>
            </template>
        </HeroSection>

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
    </LandingLayout>
</template>

<style scoped>
/* Additional custom styles if needed */
</style>
