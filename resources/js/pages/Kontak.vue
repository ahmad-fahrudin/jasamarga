<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import LandingLayout from '@/layouts/LandingLayout.vue';

const formData = ref({
    nama: '',
    email: '',
    subjek: '',
    pesan: ''
});

const submitForm = () => {
    // Handle form submission
    console.log('Form submitted:', formData.value);
    // Reset form
    formData.value = {
        nama: '',
        email: '',
        subjek: '',
        pesan: ''
    };
    alert('Pesan Anda telah terkirim! Kami akan merespon dalam 1-2 hari kerja.');
};
</script>

<template>
    <LandingLayout title="Kontak - Jasamarga Jogja Bawen" :showBreadcrumb="true" breadcrumbTitle="Kontak">
        <!-- Main Content -->
        <main>
            <!-- Contact Form & Map -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="grid lg:grid-cols-2 gap-12">
                        <!-- Contact Form -->
                        <div class="bg-white p-8 rounded-lg shadow-md">
                            <h2 class="text-2xl font-bold text-blue-800 mb-6">Kirim Pesan</h2>
                            <form @submit.prevent="submitForm" class="space-y-6">
                                <div>
                                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap *</label>
                                    <input
                                        type="text"
                                        id="nama"
                                        v-model="formData.nama"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="Masukkan nama lengkap Anda"
                                    />
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                                    <input
                                        type="email"
                                        id="email"
                                        v-model="formData.email"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="Masukkan alamat email Anda"
                                    />
                                </div>

                                <div>
                                    <label for="subjek" class="block text-sm font-medium text-gray-700 mb-2">Subjek *</label>
                                    <input
                                        type="text"
                                        id="subjek"
                                        v-model="formData.subjek"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="Masukkan subjek pesan"
                                    />
                                </div>

                                <div>
                                    <label for="pesan" class="block text-sm font-medium text-gray-700 mb-2">Pesan *</label>
                                    <textarea
                                        id="pesan"
                                        v-model="formData.pesan"
                                        required
                                        rows="6"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                                        placeholder="Tuliskan pesan Anda di sini..."
                                    ></textarea>
                                </div>

                                <button
                                    type="submit"
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors"
                                >
                                    Kirim Pesan
                                </button>
                            </form>
                        </div>

                        <!-- Map -->
                        <div class="bg-white p-8 rounded-lg shadow-md">
                            <h2 class="text-2xl font-bold text-blue-800 mb-6">Lokasi Kami</h2>
                            <div class="mb-6">
                                <!-- Embedded Google Map centered on Semarang, Indonesia -->
                                <div class="w-full h-80 rounded-lg overflow-hidden shadow-sm">
                                    <iframe
                                        title="Peta Semarang"
                                        class="w-full h-full border-0"
                                        loading="lazy"
                                        allowfullscreen
                                        src="https://www.google.com/maps?q=Semarang,Indonesia&z=12&output=embed"
                                    ></iframe>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-2">Petunjuk Arah:</h3>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li>• Dari Bandara Internasional Ahmad Yani: ±20 menit perjalanan</li>
                                        <li>• Dari Stasiun Tawang: ±15 menit perjalanan</li>
                                        <li>• Dari Simpang Lima: ±10 menit perjalanan</li>
                                        <li>• Dekat dengan Kawasan Kota Lama Semarang</li>
                                    </ul>
                                </div>

                                <a
                                    href="https://maps.google.com/?q=Semarang,Indonesia"
                                    target="_blank"
                                    class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium"
                                >
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                    </svg>
                                    Buka di Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="py-16">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-blue-800 mb-4">Pertanyaan yang Sering Diajukan</h2>
                        <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
                    </div>

                    <div class="max-w-4xl mx-auto space-y-6">
                        <div class="bg-white rounded-lg shadow-md">
                            <div class="p-6 border-b border-gray-200">
                                <h3 class="text-lg font-semibold text-gray-800">Kapan jalan tol Jogja-Bawen akan beroperasi?</h3>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600">Pembangunan jalan tol Yogyakarta-Bawen sedang dalam tahap konstruksi dengan target penyelesaian sesuai rencana yang telah ditetapkan. Update progres dapat dilihat di halaman berita kami.</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-md">
                            <div class="p-6 border-b border-gray-200">
                                <h3 class="text-lg font-semibold text-gray-800">Bagaimana cara mengakses dokumen proyek?</h3>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600">Dokumen-dokumen proyek yang bersifat publik dapat diakses melalui halaman Digital Arsip. Untuk dokumen yang memerlukan akses khusus, silakan hubungi tim kami.</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-md">
                            <div class="p-6 border-b border-gray-200">
                                <h3 class="text-lg font-semibold text-gray-800">Apakah ada program CSR untuk masyarakat sekitar?</h3>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600">Ya, PT Jasamarga Jogja Bawen memiliki berbagai program CSR untuk pemberdayaan masyarakat sekitar proyek. Informasi lengkap dapat dilihat di bagian berita dan informasi kami.</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-md">
                            <div class="p-6 border-b border-gray-200">
                                <h3 class="text-lg font-semibold text-gray-800">Bagaimana cara melamar kerja di PT Jasamarga Jogja Bawen?</h3>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600">Informasi lowongan kerja akan diumumkan melalui website resmi dan media sosial kami. Anda juga dapat mengirimkan CV dan surat lamaran ke email resmi perusahaan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </LandingLayout>
</template>
