<script setup lang="ts">
import LandingLayout from '@/layouts/LandingLayout.vue';
</script>

<template>
    <LandingLayout title="Struktur Organisasi - Jasamarga Jogja Bawen" :showBreadcrumb="true" breadcrumbTitle="Struktur Organisasi">
        <main class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">STRUKTUR ORGANISASI</h1>
                <div class="h-0.5 w-24 bg-gray-300 mb-8"></div>

                <div class="prose max-w-none text-gray-700">
                    <!-- Place the organization chart image in public/images/struktur-organisasi.png -->
                    <img src="/images/struktur-organisasi.png" alt="Struktur Organisasi" />
                </div>
            </div>
        </main>
    </LandingLayout>
</template>

<style scoped>
.prose img { width: 100%; height: auto; border-radius: 6px; }
</style>
