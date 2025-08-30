<script setup lang="ts">
import { ref, onMounted, onUnmounted, watch } from 'vue';
import { ChevronLeft, ChevronRight } from 'lucide-vue-next';

interface Props {
    images?: string[];
    interval?: number; // ms
}

const props = withDefaults(defineProps<Props>(), {
    images: () => [],
    interval: 5000
});

const current = ref(0);
let timer: number | undefined;

const start = () => {
    stop();
    if ((props.images || []).length <= 1) return;
    timer = window.setInterval(() => {
        current.value = (current.value + 1) % props.images!.length;
    }, props.interval);
};

const stop = () => {
    if (timer) {
        clearInterval(timer);
        timer = undefined;
    }
};

onMounted(() => start());
onUnmounted(() => stop());

watch(() => props.images, () => {
    current.value = 0;
    start();
});

const go = (i: number) => {
    current.value = i % (props.images?.length || 1);
    // restart timer so user can view the selected slide for full interval
    start();
};

const prev = () => {
    if (!props.images || props.images.length === 0) return;
    current.value = (current.value - 1 + props.images.length) % props.images.length;
    start();
};

const next = () => {
    if (!props.images || props.images.length === 0) return;
    current.value = (current.value + 1) % props.images.length;
    start();
};
</script>

<template>
    <!-- responsive heights: compact on mobile, tall on md+ -->
    <section class="relative w-full overflow-hidden h-56 sm:h-64 md:h-[95vh]">
        <!-- slides -->
        <div class="absolute inset-0">
            <div v-for="(img, i) in props.images" :key="i" class="absolute inset-0 transition-opacity duration-700" :class="{ 'opacity-0 pointer-events-none': i !== current, 'opacity-100': i === current }" :style="{ backgroundImage: `url(${img})`, backgroundSize: 'cover', backgroundPosition: 'center' }">
            </div>
        </div>

        <!-- dark overlay when images exist to keep visual contrast (optional) -->
        <div v-if="(props.images || []).length" class="absolute inset-0 bg-black/30"></div>

        <!-- controls -->
        <div v-if="(props.images || []).length > 1" class="absolute inset-y-0 left-0 right-0 flex items-center justify-between px-4 z-30 pointer-events-none">
            <button @click="prev" class="pointer-events-auto bg-black/75 hover:bg-black/85 text-white rounded-full w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center text-lg sm:text-2xl shadow-lg ring-1 ring-white/25 transition-colors focus:outline-none focus:ring-2 focus:ring-white/40 backdrop-blur-sm">
            <ChevronLeft class="w-6 h-6" />
            </button>
            <button @click="next" class="pointer-events-auto bg-black/75 hover:bg-black/85 text-white rounded-full w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center text-lg sm:text-2xl shadow-lg ring-1 ring-white/25 transition-colors focus:outline-none focus:ring-2 focus:ring-white/40 backdrop-blur-sm">
            <ChevronRight class="w-6 h-6" />
            </button>
        </div>

        <!-- indicators -->
        <div v-if="(props.images || []).length > 1" class="absolute bottom-4 sm:bottom-6 left-0 right-0 flex justify-center gap-3 z-30">
            <button v-for="(_, i) in props.images" :key="i" @click="go(i)" :class="['rounded-full transition-transform duration-150', i === current ? 'w-3 h-3 bg-white shadow-md scale-110' : 'w-3 h-3 bg-white/60 hover:bg-white/80']" aria-label="Slide indicator"></button>
        </div>
    </section>
</template>

<style scoped>
/* ensure slides fill and transition */
.opacity-0 { opacity: 0; }
.opacity-100 { opacity: 1; }
.transition-opacity { transition-property: opacity; }
</style>
