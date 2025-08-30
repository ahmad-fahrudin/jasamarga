<script setup lang="ts">
import LandingLayout from '@/layouts/LandingLayout.vue';

const awards = [
  '/images/penghargaan.png',
  '/images/penghargaan2.png',
  '/images/penghargaan3.png',
  '/images/penghargaan4.png',
  '/images/penghargaan5.png'
];
</script>

<template>
  <LandingLayout title="Penghargaan - Jasamarga Jogja Bawen" :showBreadcrumb="true" breadcrumbTitle="Penghargaan">
    <main class="py-16 bg-white">
      <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">PENGHARGAAN</h1>
        <div class="h-0.5 w-24 bg-gray-300 mb-8"></div>

        <div class="grid grid-cols-1 gap-6">
          <div v-for="src in awards" :key="src" class="prose">
            <img :src="src" :alt="src" class="w-full h-auto rounded-md shadow-sm" />
          </div>
        </div>
      </div>
    </main>
  </LandingLayout>
</template>

<style scoped>
.prose img { width: 100%; height: auto; }
</style>
