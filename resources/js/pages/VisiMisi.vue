<script setup lang="ts">
import LandingLayout from '@/layouts/LandingLayout.vue';
</script>

<template>
    <LandingLayout title="Visi & Misi - Jasamarga Jogja Bawen" :showBreadcrumb="true" breadcrumbTitle="Visi & Misi">
        <main class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">VISI MISI</h1>
                <div class="h-0.5 w-24 bg-gray-300 mb-8"></div>

                <div class="prose max-w-none text-gray-700">
                    <div class="flex flex-col items-center space-y-6">
                        <!-- Visi badge -->
                        <div class="flex flex-col items-center">
                            <div class="w-28 h-28 md:w-32 md:h-32 rounded-full bg-blue-800 text-white flex items-center justify-center border-4 border-yellow-400 text-xl md:text-2xl font-bold shadow-md">
                                Visi
                            </div>

                            <p class="text-center mt-6 mx-auto max-w-xl">
                                Menjadi perusahaan penyedia jasa jalan tol yang beroperasi secara efektif dan efisien melalui penggunaan sistem dan teknologi yang modern dalam rangka mendukung kemajuan perekonomian di Pulau Jawa
                            </p>
                        </div>

                        <!-- Misi badge and list -->
                        <div class="flex flex-col items-center w-full">
                            <div class="w-28 h-28 md:w-32 md:h-32 rounded-full bg-blue-800 text-white flex items-center justify-center border-4 border-yellow-400 text-xl md:text-2xl font-bold shadow-md">
                                Misi
                            </div>

                            <ol class="mt-6 list-decimal list-inside space-y-3 max-w-2xl text-gray-700">
                                <li>Memperlancar moda transportasi dan logistik di Pulau Jawa</li>
                                <li>Menggunakan Sumber Daya manusia yang unggul dan handal</li>
                                <li>Menerapkan teknologi pengoperasian jalan tol yang modern</li>
                                <li>Mengembangkan potensi perekonomian di wilayah sekitar jalan tol</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </LandingLayout>
</template>

<style scoped>
.prose img { width: 100%; height: auto; border-radius: 6px; }
/* smaller vertical spacing for list on narrow screens */
@media (max-width: 640px) {
  .prose ol { padding-left: 1rem; }
}
</style>
