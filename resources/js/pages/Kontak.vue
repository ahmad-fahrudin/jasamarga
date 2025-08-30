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
            <!-- Hero Section -->
            <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
                <div class="max-w-6xl mx-auto px-4 text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Hubungi Kami</h1>
                    <p class="text-xl max-w-2xl mx-auto">
                        Kami siap membantu dan menjawab pertanyaan Anda tentang PT Jasamarga Jogja Bawen
                    </p>
                </div>
            </section>

            <!-- Contact Information -->
            <section class="py-16">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="grid md:grid-cols-3 gap-8 mb-16">
                        <!-- Alamat -->
                        <div class="text-center bg-white p-8 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-4">Alamat Kantor</h3>
                            <p class="text-gray-600">
                                Jl. Sareh No.3, Kotabaru<br>
                                Kec. Gondokusuman<br>
                                Kota Yogyakarta<br>
                                Daerah Istimewa Yogyakarta 55224
                            </p>
                        </div>

                        <!-- Email -->
                        <div class="text-center bg-white p-8 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-4">Email</h3>
                            <p class="text-gray-600 mb-4">
                                Kirim email kepada kami untuk informasi lebih lanjut
                            </p>
                            <a href="mailto:jasamargajogjabawen@gmail.com" class="text-blue-600 hover:text-blue-800 font-medium">
                                jasamargajogjabawen@gmail.com
                            </a>
                        </div>

                        <!-- Telepon -->
                        <div class="text-center bg-white p-8 rounded-lg shadow-md">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-4">Telepon</h3>
                            <p class="text-gray-600 mb-4">
                                Hubungi kami langsung melalui telepon
                            </p>
                            <a href="tel:+62274123456" class="text-blue-600 hover:text-blue-800 font-medium">
                                +62 274 123 456
                            </a>
                            <p class="text-sm text-gray-500 mt-2">
                                Senin - Jumat: 08:00 - 17:00 WIB
                            </p>
                        </div>
                    </div>
                </div>
            </section>

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
                            <div class="bg-gray-200 h-80 rounded-lg flex items-center justify-center mb-6">
                                <div class="text-center">
                                    <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                    </svg>
                                    <p class="text-gray-500">Peta Lokasi Kantor</p>
                                    <p class="text-sm text-gray-400 mt-2">Google Maps Integration</p>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-2">Petunjuk Arah:</h3>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li>• Dari Bandara YIA: 45 menit perjalanan</li>
                                        <li>• Dari Stasiun Tugu: 15 menit perjalanan</li>
                                        <li>• Dari Malioboro: 10 menit perjalanan</li>
                                        <li>• Dekat dengan UGM dan UNY</li>
                                    </ul>
                                </div>

                                <a
                                    href="https://maps.google.com/?q=Jl.+Sareh+No.3,+Kotabaru,+Gondokusuman,+Yogyakarta"
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

            <!-- Social Media -->
            <section class="py-16 bg-blue-800 text-white">
                <div class="max-w-6xl mx-auto px-4 text-center">
                    <h2 class="text-3xl font-bold mb-4">Ikuti Media Sosial Kami</h2>
                    <p class="text-xl mb-8 max-w-2xl mx-auto">
                        Dapatkan update terbaru tentang progress proyek dan kegiatan perusahaan
                    </p>
                    <div class="flex justify-center space-x-6">
                        <a href="https://www.instagram.com/jasamargajogjabawen.official/" target="_blank" class="bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 p-4 rounded-full transition-all transform hover:scale-110">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.624 5.367 11.99 11.988 11.99s11.99-5.366 11.99-11.99C24.007 5.367 18.641.001 12.017.001zM8.449 16.988c-1.297 0-2.348-1.051-2.348-2.348 0-1.297 1.051-2.348 2.348-2.348 1.297 0 2.348 1.051 2.348 2.348 0 1.297-1.051 2.348-2.348 2.348zm7.718 0c-1.297 0-2.348-1.051-2.348-2.348 0-1.297 1.051-2.348 2.348-2.348 1.297 0 2.348 1.051 2.348 2.348 0 1.297-1.051 2.348-2.348 2.348z"></path>
                            </svg>
                        </a>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 p-4 rounded-full transition-all transform hover:scale-110">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                            </svg>
                        </a>
                        <a href="#" class="bg-blue-800 hover:bg-blue-900 p-4 rounded-full transition-all transform hover:scale-110">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                            </svg>
                        </a>
                        <a href="#" class="bg-red-600 hover:bg-red-700 p-4 rounded-full transition-all transform hover:scale-110">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </LandingLayout>
</template>
