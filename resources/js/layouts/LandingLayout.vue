<script setup lang="ts">
import { Head, Link, usePage } from '@inertiajs/vue3';
import { ref, computed, reactive, onMounted, onBeforeUnmount } from 'vue';

// Add lucide imports
import {
	ChevronDown,
	ChevronRight,
	Search,
	Menu,
	Plus,
	Minus,
	Instagram,
	Twitter,
	Youtube,
	MapPin,
	Mail,
	Phone
} from 'lucide-vue-next';

interface Props {
    title?: string;
    showBreadcrumb?: boolean;
    breadcrumbTitle?: string;
}

const props = withDefaults(defineProps<Props>(), {
    title: 'Jasamarga Semarang-Batang',
    showBreadcrumb: false,
    breadcrumbTitle: ''
});

const mobileMenuOpen = ref(false);

// Header visibility on scroll (fade in/out)
const isHeaderVisible = ref(true);
let lastScrollY = 0;
const SCROLL_DELTA = 10; // minimum delta to trigger hide/show

const handleScroll = () => {
    const y = window.scrollY || window.pageYOffset || 0;
    // if small movement, ignore
    if (Math.abs(y - lastScrollY) < SCROLL_DELTA) return;

    // if scrolling down and past a small offset, hide header
    if (y > lastScrollY && y > 50) {
        isHeaderVisible.value = false;
    } else {
        // scrolling up -> show header
        isHeaderVisible.value = true;
    }

    lastScrollY = y;
};

onMounted(() => {
    // protect SSR: only run in browser
    lastScrollY = typeof window !== 'undefined' ? (window.scrollY || 0) : 0;
    window.addEventListener('scroll', handleScroll, { passive: true });
});

onBeforeUnmount(() => {
    if (typeof window !== 'undefined') window.removeEventListener('scroll', handleScroll);
});

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
    <header
        :class="[
            'bg-white shadow-sm border-b border-gray-300 fixed top-0 left-0 right-0 z-50 transition-all duration-300 ease-in-out',
            isHeaderVisible ? 'translate-y-0 opacity-100' : '-translate-y-full opacity-0'
        ]"
    >
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center h-16 justify-between">
                    <!-- Logo (left) -->
                    <div class="flex-shrink-0">
                        <Link href="/" class="flex items-center">
                            <img src="/images/jasamarga-logo.png" alt="Jasamarga Logo" class="h-12 w-auto mr-3 relative -top-1" />
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
                                        <!-- replaced SVG with lucide -->
                                        <ChevronDown class="w-4 h-4 ml-1" />
                                    </button>

                                    <!-- Top-level dropdown (animated) -->
                                    <Transition name="fade-slide">
                                    <div
                                        v-if="openDropdown === item.label"
                                        class="absolute left-0 mt-2 w-56 bg-white border shadow-lg z-50"
                                        @mouseenter="handleDropdownEnter"
                                        @mouseleave="handleDropdownLeave"
                                    >
                                        <ul>
                                            <li
                                                v-for="child in item.children"
                                                :key="child.label"
                                                class="relative px-4 py-2 hover:bg-gray-50 flex justify-between items-center"
                                                @mouseenter="() => handleSubEnter(child)"
                                                @mouseleave="() => handleSubLeave()"
                                            >
                                                <template v-if="child.children">
                                                    <div class="flex items-center justify-between w-full">
                                                        <span class="text-gray-700">{{ child.label }}</span>
                                                        <!-- replaced SVG with lucide -->
                                                        <ChevronRight class="w-3 h-3 text-gray-400" />
                                                    </div>

                                                    <!-- Second-level dropdown (animated) -->
                                                    <Transition name="fade-slide-sub">
                                                    <div
                                                        v-if="openSubDropdown === child.label"
                                                        class="absolute left-full top-2 ml-1 w-56 bg-white border shadow-lg z-50"
                                                        @mouseenter="handleDropdownEnter"
                                                        @mouseleave="handleDropdownLeave"
                                                    >
                                                        <ul>
                                                            <li v-for="sub in child.children" :key="sub.label" class="px-4 py-2 hover:bg-gray-50">
                                                                <Link :href="sub.href" class="text-gray-700">{{ sub.label }}</Link>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </Transition>
                                                </template>
                                                <template v-else>
                                                    <Link :href="child.href" class="text-gray-700">{{ child.label }}</Link>
                                                </template>
                                            </li>
                                        </ul>
                                    </div>
                                    </Transition>
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
                            <!-- replaced SVG with lucide Search -->
                            <button class="text-gray-600 hover:text-blue-700">
                                <Search class="w-5 h-5" />
                            </button>
                        </div>

                        <!-- Mobile menu button -->
                        <div class="md:hidden">
                            <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-600 hover:text-blue-700">
                                <Menu class="w-6 h-6" />
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile Navigation -->
                <Transition name="mobile-slide">
                <div v-if="mobileMenuOpen" class="md:hidden border-t">
                    <div class="py-2">
                        <ul class="space-y-1">
                            <li v-for="item in navigationItems" :key="item.label" class="">
                                <div v-if="item.children" class="flex items-center justify-between px-4 py-2">
                                    <span class="font-medium text-gray-700">{{ item.label }}</span>
                                    <button @click="toggleMobileSub(item.label)" class="text-gray-600">
                                        <!-- replaced plus/minus with lucide Plus/Minus -->
                                        <template v-if="!mobileSubOpen[item.label]">
                                            <Plus class="w-5 h-5" />
                                        </template>
                                        <template v-else>
                                            <Minus class="w-5 h-5" />
                                        </template>
                                    </button>
                                </div>

                                <div v-if="item.children && mobileSubOpen[item.label]" class="pl-4">
                                    <ul class="space-y-1">
                                        <li v-for="child in item.children" :key="child.label">
                                            <div v-if="child.children" class="flex items-center justify-between px-4 py-2">
                                                <Link :href="child.href || '#'" class="text-gray-700">{{ child.label }}</Link>
                                                <button @click="toggleMobileSub(child.label)" class="text-gray-600">
                                                    <!-- replaced plus/minus with lucide Plus/Minus -->
                                                    <template v-if="!mobileSubOpen[child.label]">
                                                        <Plus class="w-4 h-4" />
                                                    </template>
                                                    <template v-else>
                                                        <Minus class="w-4 h-4" />
                                                    </template>
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
                </Transition>
            </div>
        </header>

    <!-- Main Content Slot -->
    <main class="pt-16">
            <slot />
        </main>

    <!-- Footer -->
    <footer class="bg-blue-950 text-white py-12">
            <div class="max-w-6xl mx-auto px-4">
                <div class="grid md:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div>
                        <div class="flex items-center mb-4">
                            <img src="/images/jasamarga-footer.png" alt="Jasamarga Logo" class="h-14 w-auto mr-2 relative -top-2" />
                        </div>
                        <p class="text-gray-400 mb-4">
                            PT Jasamarga Semarang-Batang (JSB) merupakan Badan Usaha Jalan Tol (BUJT) yang mengelola dan mendukung pengoperasian Jalan Tol Semarang-Batang.
                        </p>
                        <div class="flex items-center space-x-4 mt-4">
                            <!-- replaced social SVGs with lucide brand icons -->
                            <a href="https://www.instagram.com/jasamarga/" target="_blank" class="text-gray-400 hover:text-yellow-500 transition-colors">
                                <Instagram class="w-6 h-6" />
                            </a>
                            <a href="#" class="text-gray-400 hover:text-yellow-500 transition-colors">
                                <Twitter class="w-6 h-6" />
                            </a>
                            <a href="#" class="text-gray-400 hover:text-yellow-500 transition-colors">
                                <Youtube class="w-6 h-6" />
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
                        </ul>
                    </div>

                    <!-- Bantuan -->
                    <div>
                        <h4 class="text-lg font-bold mb-4">Bantuan</h4>
                        <ul class="space-y-2">
                            <li><a href="https://www.jasamarga.com/kalkulator-tarif-tol" target="_blank" class="text-gray-400 hover:text-white transition-colors">Kalkulator Tarif Tol</a></li>
                        </ul>
                    </div>

                    <!-- Kontak -->
                    <div>
                        <h4 class="text-lg font-bold mb-4">Kontak Kami</h4>
                        <div class="space-y-3 text-gray-400">
                            <div class="flex items-start">
                                <!-- replaced location SVG with lucide MapPin -->
                                <MapPin class="w-5 h-5 mr-2 mt-1 flex-shrink-0" />
                                <span class="text-sm">Kawasan Jalan Tol Semarang-Batang, Semarang, Jawa Tengah</span>
                            </div>
                            <div class="flex items-center">
                                <!-- replaced mail SVG with lucide Mail -->
                                <Mail class="w-5 h-5 mr-2 flex-shrink-0" />
                                <a href="mailto:jasamargasemarangbatang@gmail.com" class="text-sm hover:text-white transition-colors">jasamargasemarangbatang@gmail.com</a>
                            </div>
                            <div class="flex items-center">
                                <!-- replaced phone SVG with lucide Phone -->
                                <Phone class="w-5 h-5 mr-2 flex-shrink-0" />
                                <span class="text-sm">(0274) 123-4567</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-blue-800 mt-8 pt-8 text-center text-gray-400">
                    <p>&copy; 2025 PT Jasamarga Semarang-Batang. All rights reserved.</p>
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

/* Top-level dropdown: fade + slide down */
.fade-slide-enter-from,
.fade-slide-leave-to {
    opacity: 0;
    transform: translateY(-6px);
}
.fade-slide-enter-active,
.fade-slide-leave-active {
    transition: opacity 180ms ease, transform 180ms ease;
}
.fade-slide-enter-to,
.fade-slide-leave-from {
    opacity: 1;
    transform: translateY(0);
}

/* Sub-dropdown: fade + slide right */
.fade-slide-sub-enter-from,
.fade-slide-sub-leave-to {
    opacity: 0;
    transform: translateX(-6px);
}
.fade-slide-sub-enter-active,
.fade-slide-sub-leave-active {
    transition: opacity 160ms ease, transform 160ms ease;
}
.fade-slide-sub-enter-to,
.fade-slide-sub-leave-from {
    opacity: 1;
    transform: translateX(0);
}

/* Mobile menu: slide down */
.mobile-slide-enter-from,
.mobile-slide-leave-to {
    opacity: 0;
    transform: translateY(-8px);
}
.mobile-slide-enter-active,
.mobile-slide-leave-active {
    transition: opacity 200ms ease, transform 200ms ease;
}
.mobile-slide-enter-to,
.mobile-slide-leave-from {
    opacity: 1;
    transform: translateY(0);
}
</style>
