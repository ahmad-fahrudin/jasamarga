<script setup lang="ts">
import LandingLayout from '@/layouts/LandingLayout.vue';
</script>

<template>
    <LandingLayout title="Tata Nilai - Jasamarga Jogja Bawen" :showBreadcrumb="true" breadcrumbTitle="Tata Nilai">
        <main class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">TATA NILAI</h1>
                <div class="h-0.5 w-24 bg-gray-300 mb-8"></div>

                <div class="prose max-w-none text-gray-700 space-y-8">
                    <img src="/images/tata-nilai.png" alt="Tata Nilai 1" />
                    <img src="/images/tata-nilai2.png" alt="Tata Nilai 2" />
                    <img src="/images/tata-nilai3.png" alt="Tata Nilai 3" />
                </div>
            </div>
        </main>
    </LandingLayout>
</template>

<style scoped>
.prose img { width: 100%; height: auto; border-radius: 6px; }
/* smaller vertical spacing for narrow screens */
@media (max-width: 640px) {
  .prose { padding-left: 0; padding-right: 0; }
}
</style>
