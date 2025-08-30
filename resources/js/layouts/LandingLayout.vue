<script setup lang="ts">
import { Head, Link, usePage } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

interface Props {
    title?: string;
    showBreadcrumb?: boolean;
    breadcrumbTitle?: string;
}

const props = withDefaults(defineProps<Props>(), {
    title: 'Jasamarga Jogja Bawen',
    showBreadcrumb: false,
    breadcrumbTitle: ''
});

const mobileMenuOpen = ref(false);

// Get current route to highlight active menu
const page = usePage();
const currentRoute = computed(() => page.url);

// Navigation items
const navigationItems = [
    { href: '/', label: 'Beranda' },
    { href: '/tentang-kami', label: 'Tentang Kami' },
    { href: '/berita-informasi', label: 'Berita & Informasi' },
    { href: '/digital-arsip', label: 'Digital Arsip' },
    { href: '/kontak', label: 'Kontak' }
];

// Check if menu item is active
const isActiveRoute = (href: string) => {
    if (href === '/') {
        return currentRoute.value === '/';
    }
    return currentRoute.value.startsWith(href);
};
</script>

<template>
    <Head :title="title" />

    <div class="min-h-screen bg-white">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo -->
                    <Link href="/" class="flex items-center">
                        <img src="/images/jasamarga-logo.png" alt="Jasamarga Logo" class="h-10 w-auto mr-3" />
                    </Link>

                    <!-- Desktop Navigation + Search (grouped right) -->
                    <div class="hidden md:flex items-center space-x-3">
                        <nav class="flex space-x-4">
                            <Link
                                v-for="item in navigationItems"
                                :key="item.href"
                                :href="item.href"
                                :class="[
                                    'px-2 py-2 font-medium transition-colors',
                                    isActiveRoute(item.href)
                                        ? 'text-blue-700 border-b-2 border-blue-700'
                                        : 'text-gray-700 hover:text-blue-700'
                                ]"
                            >
                                {{ item.label }}
                            </Link>
                        </nav>

                        <div class="flex items-center">
                            <button class="text-gray-600 hover:text-blue-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-600 hover:text-blue-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Navigation -->
                <div v-show="mobileMenuOpen" class="md:hidden border-t">
                    <div class="py-2 space-y-1">
                        <Link
                            v-for="item in navigationItems"
                            :key="item.href"
                            :href="item.href"
                            :class="[
                                'block px-2 py-2 font-medium transition-colors',
                                isActiveRoute(item.href)
                                    ? 'text-blue-700 bg-blue-50'
                                    : 'text-gray-700 hover:text-blue-700'
                            ]"
                            @click="mobileMenuOpen = false"
                        >
                            {{ item.label }}
                        </Link>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Slot -->
        <main>
            <slot />
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12">
            <div class="max-w-6xl mx-auto px-4">
                <div class="grid md:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div>
                        <div class="flex items-center mb-4">
                            <img src="/images/jasamarga-logo.png" alt="Jasamarga Logo" class="h-8 w-auto mr-2" />
                        </div>
                        <p class="text-gray-400 mb-4">
                            PT Jasamarga Jogja Bawen (JJB) merupakan Badan Usaha Jalan Tol (BUJT) yang dibentuk oleh konsorsium BUMN pemenang lelang pembangunan Jalan Tol Yogyakarta-Bawen.
                        </p>
                        <div class="flex items-center space-x-4 mt-4">
                            <a href="https://www.instagram.com/jasamargajogjabawen.official/" target="_blank" class="text-gray-400 hover:text-yellow-500 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.624 5.367 11.99 11.988 11.99s11.99-5.366 11.99-11.99C24.007 5.367 18.641.001 12.017.001zM8.449 16.988c-1.297 0-2.348-1.051-2.348-2.348 0-1.297 1.051-2.348 2.348-2.348 1.297 0 2.348 1.051 2.348 2.348 0 1.297-1.051 2.348-2.348 2.348zm7.718 0c-1.297 0-2.348-1.051-2.348-2.348 0-1.297 1.051-2.348 2.348-2.348 1.297 0 2.348 1.051 2.348 2.348 0 1.297-1.051 2.348-2.348 2.348z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-yellow-500 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-yellow-500 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Tentang Kami -->
                    <div>
                        <h4 class="text-lg font-bold mb-4">Tentang Kami</h4>
                        <ul class="space-y-2">
                            <li><Link href="/tentang-kami" class="text-gray-400 hover:text-white transition-colors">Profil Perusahaan</Link></li>
                            <li><Link href="/tentang-kami#visi-misi" class="text-gray-400 hover:text-white transition-colors">Visi & Misi</Link></li>
                            <li><Link href="/tentang-kami#tata-nilai" class="text-gray-400 hover:text-white transition-colors">Tata Nilai</Link></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Disclaimer</a></li>
                        </ul>
                    </div>

                    <!-- Bantuan -->
                    <div>
                        <h4 class="text-lg font-bold mb-4">Bantuan</h4>
                        <ul class="space-y-2">
                            <li><a href="https://www.jasamarga.com/kalkulator-tarif-tol" target="_blank" class="text-gray-400 hover:text-white transition-colors">Kalkulator Tarif Tol</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Panduan Pengguna</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                        </ul>
                    </div>

                    <!-- Kontak -->
                    <div>
                        <h4 class="text-lg font-bold mb-4">Kontak Kami</h4>
                        <div class="space-y-3 text-gray-400">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                </svg>
                                <span class="text-sm">Jl. Sareh No.3, Kotabaru, Kec. Gondokusuman, Kota Yogyakarta, DIY 55224</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                                <a href="mailto:jasamargajogjabawen@gmail.com" class="text-sm hover:text-white transition-colors">jasamargajogjabawen@gmail.com</a>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                                <span class="text-sm">(0274) 123-4567</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                    <p>&copy; 2025 PT Jasamarga Jogja Bawen. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</template>

<style scoped>
/* Custom styles for transitions */
.transition-colors {
    transition: color 0.2s ease-in-out;
}
</style>
