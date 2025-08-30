<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import LandingLayout from '@/layouts/LandingLayout.vue';
</script>

<template>
    <LandingLayout title="Tentang Kami - Jasamarga Jogja Bawen" :showBreadcrumb="true" breadcrumbTitle="Tentang Kami">
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
    </LandingLayout>
</template>
