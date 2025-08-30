<script setup lang="ts">
import { Head, Link, usePage } from '@inertiajs/vue3';
import { ref, computed, reactive } from 'vue';

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

// Navigation items with nested children for multi-level menu
interface NavItem {
    href?: string;
    label: string;
    children?: NavItem[];
}

const navigationItems: NavItem[] = [
    { href: '/', label: 'Beranda' },
    {
        label: 'Info Layanan',
        children: [
            { href: '/info-rest-area', label: 'Info Rest Area' },
            {
                label: 'Informasi Layanan Jalan Tol',
                children: [
                    { href: '/layanan-transaksi', label: 'Layanan Transaksi' },
                    { href: '/layanan-lalu-lintas', label: 'Layanan Lalu Lintas' }
                ]
            }
        ]
    },
    {
        label: 'Tentang Kami',
        children: [
            { href: '/tentang-kami', label: 'Profil Perusahaan' },
            { href: '/visi-misi', label: 'Visi & Misi' },
            { href: '/tata-nilai', label: 'Tata Nilai' },
            { href: '/struktur-organisasi', label: 'Struktur Organisasi' },
            { href: '/penghargaan', label: 'Penghargaan' },
            { href: '/kebijakan-mutuk3', label: 'Kebijakan Mutu & K3' }
        ]
    },
    {
        label: 'Berita & Informasi',
        children: [
            { href: '/berita', label: 'Berita' },
            { href: '/tender', label: 'Tender' },
            { href: '/release', label: 'Release' }
        ]
    },
    { href: '/kontak', label: 'Kontak' }
];

// Check if menu item is active
const isActiveRoute = (href?: string) => {
    if (!href) return false;
    if (href === '/') return currentRoute.value === '/';
    return currentRoute.value.startsWith(href);
};

// Dropdown state for desktop hover
const openDropdown = ref<string | null>(null); // top-level label
const openSubDropdown = ref<string | null>(null); // second-level label

// Hover close timers to avoid accidental closing when moving between elements
let closeTimerTop: ReturnType<typeof setTimeout> | null = null;
let closeTimerSub: ReturnType<typeof setTimeout> | null = null;
const clearCloseTimerTop = () => {
    if (closeTimerTop) {
        clearTimeout(closeTimerTop);
        closeTimerTop = null;
    }
};
const clearCloseTimerSub = () => {
    if (closeTimerSub) {
        clearTimeout(closeTimerSub);
        closeTimerSub = null;
    }
};
const scheduleCloseTop = (ms = 220) => {
    clearCloseTimerTop();
    closeTimerTop = setTimeout(() => {
        openDropdown.value = null;
        openSubDropdown.value = null;
    }, ms);
};
const scheduleCloseSub = (ms = 220) => {
    clearCloseTimerSub();
    closeTimerSub = setTimeout(() => {
        openSubDropdown.value = null;
    }, ms);
};

// Named handlers for mouse enter/leave to reduce gaps when moving between menu and dropdown
const handleTopEnter = (item: NavItem) => {
    clearCloseTimerTop();
    clearCloseTimerSub();
    if (item.children) openDropdown.value = item.label;
};
const handleTopLeave = () => {
    scheduleCloseTop();
};
const handleDropdownEnter = () => {
    clearCloseTimerTop();
    clearCloseTimerSub();
};
const handleDropdownLeave = () => {
    scheduleCloseTop();
};
const handleSubEnter = (child: NavItem) => {
    clearCloseTimerSub();
    if (child.children) openSubDropdown.value = child.label;
};
const handleSubLeave = () => {
    // schedule sub close only — keep top open briefly to allow moving back
    scheduleCloseSub();
};

// Mobile toggles (click to open)
const mobileSubOpen = reactive<Record<string, boolean>>({});
const toggleMobileSub = (label: string) => {
    mobileSubOpen[label] = !mobileSubOpen[label];
};
</script>

<template>
    <Head :title="title" />

    <div class="min-h-screen bg-white">
    <!-- Header (fixed on scroll) -->
    <header class="bg-white shadow-sm border-b fixed top-0 left-0 right-0 z-50">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center h-16">
                    <!-- Logo (left) -->
                    <div class="flex-shrink-0">
                        <Link href="/" class="flex items-center">
                            <img src="/images/jasamarga-logo.png" alt="Jasamarga Logo" class="h-10 w-auto mr-3" />
                        </Link>
                    </div>

                    <!-- Centered Navigation (desktop) -->
                    <div class="hidden md:flex flex-1 justify-center">
                        <nav class="flex space-x-4 relative items-center">
                            <div
                                v-for="item in navigationItems"
                                :key="item.label"
                                class="relative"
                                @mouseenter="() => handleTopEnter(item)"
                                @mouseleave="() => handleTopLeave()"
                            >
                                <template v-if="item.children">
                                    <button
                                        class="px-2 py-2 font-medium transition-colors text-gray-700 hover:text-blue-700 flex items-center"
                                        :class="isActiveRoute(item.href) ? 'text-blue-700 border-b-2 border-blue-700' : ''"
                                    >
                                        {{ item.label }}
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>

                                    <!-- Top-level dropdown -->
                                    <div
                                        v-show="openDropdown === item.label"
                                        class="absolute left-0 mt-2 w-56 bg-white border shadow-lg z-50"
                                        @mouseenter="handleDropdownEnter"
                                        @mouseleave="handleDropdownLeave"
                                    >
                                        <ul>
                                            <li
                                                v-for="child in item.children"
                                                :key="child.label"
                                                class="px-4 py-2 hover:bg-gray-50 flex justify-between items-center"
                                                @mouseenter="() => handleSubEnter(child)"
                                                @mouseleave="() => handleSubLeave()"
                                            >
                                                <template v-if="child.children">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span class="text-gray-700">{{ child.label }}</span>
                                                        <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                        </svg>
                                                    </div>

                                                    <!-- Second-level dropdown -->
                                                    <div
                                                        v-show="openSubDropdown === child.label"
                                                        class="absolute left-full top-0 ml-1 w-56 bg-white border shadow-lg z-50"
                                                        @mouseenter="handleDropdownEnter"
                                                        @mouseleave="handleDropdownLeave"
                                                    >
                                                        <ul>
                                                            <li v-for="sub in child.children" :key="sub.label" class="px-4 py-2 hover:bg-gray-50">
                                                                <Link :href="sub.href" class="text-gray-700">{{ sub.label }}</Link>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </template>
                                                <template v-else>
                                                    <Link :href="child.href" class="text-gray-700">{{ child.label }}</Link>
                                                </template>
                                            </li>
                                        </ul>
                                    </div>
                                </template>

                                <template v-else>
                                    <Link
                                        :href="item.href"
                                        class="px-2 py-2 font-medium transition-colors"
                                        :class="isActiveRoute(item.href) ? 'text-blue-700 border-b-2 border-blue-700' : 'text-gray-700 hover:text-blue-700'"
                                    >
                                        {{ item.label }}
                                    </Link>
                                </template>
                            </div>
                        </nav>
                    </div>

                    <!-- Right actions (desktop) + Mobile menu button -->
                    <div class="flex items-center space-x-3">
                        <div class="hidden md:flex items-center">
                            <button class="text-gray-600 hover:text-blue-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
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
                </div>

                <!-- Mobile Navigation -->
                <div v-show="mobileMenuOpen" class="md:hidden border-t">
                    <div class="py-2">
                        <ul class="space-y-1">
                            <li v-for="item in navigationItems" :key="item.label" class="">
                                <div v-if="item.children" class="flex items-center justify-between px-4 py-2">
                                    <span class="font-medium text-gray-700">{{ item.label }}</span>
                                    <button @click="toggleMobileSub(item.label)" class="text-gray-600">
                                        <svg v-if="!mobileSubOpen[item.label]" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                        <svg v-else class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                        </svg>
                                    </button>
                                </div>

                                <div v-if="item.children && mobileSubOpen[item.label]" class="pl-4">
                                    <ul class="space-y-1">
                                        <li v-for="child in item.children" :key="child.label">
                                            <div v-if="child.children" class="flex items-center justify-between px-4 py-2">
                                                <Link :href="child.href || '#'" class="text-gray-700">{{ child.label }}</Link>
                                                <button @click="toggleMobileSub(child.label)" class="text-gray-600">
                                                    <svg v-if="!mobileSubOpen[child.label]" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                    </svg>
                                                    <svg v-else class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <div v-if="child.children && mobileSubOpen[child.label]" class="pl-4">
                                                <ul>
                                                    <li v-for="sub in child.children" :key="sub.label" class="px-4 py-2">
                                                        <Link :href="sub.href" @click="mobileMenuOpen = false" class="text-gray-700">{{ sub.label }}</Link>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div v-else-if="!child.children" class="px-4 py-2">
                                                <Link :href="child.href" @click="mobileMenuOpen = false" class="text-gray-700">{{ child.label }}</Link>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div v-else-if="!item.children" class="px-4 py-2">
                                    <Link :href="item.href" @click="mobileMenuOpen = false" class="text-gray-700">{{ item.label }}</Link>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

    <!-- Main Content Slot -->
    <!-- add top padding equal to header height (h-16) so content isn't hidden behind fixed header -->
    <main class="pt-16">
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
