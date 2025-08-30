<script setup lang="ts">
import { ref } from 'vue';
import LandingLayout from '@/layouts/LandingLayout.vue';
import HeroSection from '@/components/HeroSection.vue';

// Remote images from the official site so the local welcome matches jjb.co.id
const heroImages = ref<string[]>(['/images/jasamarga-jumbotron.jpg', '/images/jasamarga-jumbotron2.jpg', '/images/jasamarga-jumbotron3.jpg', '/images/jasamarga-jumbotron4.jpg']);

const aboutCards = ref([
    {
        title: 'Tentang Kami',
        image: 'https://jjb.co.id/wp-content/uploads/2024/12/1-3-350x250.jpg',
        href: 'https://jjb.co.id/profil-perusahaan/'
    },
    {
        title: 'Visi & Misi',
        image: 'https://jjb.co.id/wp-content/uploads/2024/12/2-3-350x250.jpg',
        href: 'https://jjb.co.id/visi-dan-misi/'
    },
    {
        title: 'Tata Nilai',
        image: 'https://jjb.co.id/wp-content/uploads/2024/12/3-2-350x250.jpg',
        href: 'https://jjb.co.id/tata-nilai/'
    }
]);

const galleryImages = ref<string[]>([
    'https://jjb.co.id/wp-content/uploads/2025/08/JJB_Gallery_1-900x640.jpg',
    'https://jjb.co.id/wp-content/uploads/2025/08/JJB_Gallery_7-900x640.png',
    'https://jjb.co.id/wp-content/uploads/2025/08/JJB_Gallery_2-900x640.jpg',
    'https://jjb.co.id/wp-content/uploads/2025/08/JJB_Gallery_3-900x640.jpg'
]);
</script>

<template>
    <LandingLayout title="Jasamarga Jogja Bawen - Beranda">
        <!-- Hero Section: image-only slideshow -->
        <HeroSection :images="heroImages" :interval="6000" />

        <main class="container mx-auto px-4 py-12">
            <!-- Profil Perusahaan cards -->
            <section class="mb-12">
                <h2 class="text-2xl font-semibold mb-6">Profil Perusahaan</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <a v-for="card in aboutCards" :key="card.title" :href="card.href" class="block border rounded overflow-hidden hover:shadow-lg transition">
                        <img :src="card.image" :alt="card.title" class="w-full h-40 object-cover" />
                        <div class="p-4">
                            <h3 class="font-medium">{{ card.title }}</h3>
                            <p class="text-sm text-gray-600">Selengkapnya &rarr;</p>
                        </div>
                    </a>
                </div>
            </section>

            <!-- Informasi Ruas Tol -->
            <section class="mb-12">
                <h2 class="text-2xl font-semibold mb-4">Informasi Ruas Tol Jogja - Bawen</h2>
                <div class="bg-white border rounded p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-4xl font-bold">75,12 Km</p>
                            <p class="text-sm text-gray-600">Panjang Ruas</p>
                        </div>
                        <div class="w-1/2">
                            <label class="text-sm text-gray-600">Progress Konstruksi Seksi 1</label>
                            <div class="w-full bg-gray-200 rounded-full h-3 mt-2 overflow-hidden">
                                <div class="bg-green-600 h-3" style="width:80.76%"></div>
                            </div>
                            <label class="text-sm text-gray-600 mt-3 block">Progress Pembebasan Lahan Seksi 1</label>
                            <div class="w-full bg-gray-200 rounded-full h-3 mt-2 overflow-hidden">
                                <div class="bg-blue-600 h-3" style="width:96.65%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery -->
            <section class="mb-12">
                <h2 class="text-2xl font-semibold mb-6">Galeri</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <a v-for="(img, i) in galleryImages" :key="i" :href="img" target="_blank" class="block overflow-hidden rounded border hover:shadow">
                        <img :src="img" class="w-full h-48 object-cover" />
                    </a>
                </div>
            </section>

            <!-- Instagram follow -->
            <section class="mb-12">
                <h2 class="text-2xl font-semibold mb-4">Ikuti Kami di Instagram</h2>
                <div class="flex items-center gap-4">
                    <a href="https://www.instagram.com/jasamargajogjabawen.official/" target="_blank" class="px-4 py-2 bg-pink-500 text-white rounded">@jasamargajogjabawen.official</a>
                    <p class="text-sm text-gray-600">Update foto &amp; kegiatan perusahaan di Instagram.</p>
                </div>
            </section>
        </main>
    </LandingLayout>
</template>

<style scoped>
/* Minimal styling to match the general look of the source site. Uses existing Tailwind utility classes if present. */
.container { max-width: 1100px; color: #000; }
main, h1, h2, h3, h4, p, a, label, div { color: #000 !important; }
</style>
