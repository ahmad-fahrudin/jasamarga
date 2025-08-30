<script setup lang="ts">
interface Props {
    title: string;
    subtitle?: string;
    backgroundClass?: string;
    showAction?: boolean;
    actionText?: string;
    actionHref?: string;
}

const props = withDefaults(defineProps<Props>(), {
    backgroundClass: 'bg-gradient-to-r from-blue-600 to-blue-800',
    showAction: false,
    actionText: 'Jelajahi Lebih Lanjut',
    actionHref: '#'
});
</script>

<template>
    <section :class="[backgroundClass, 'text-white py-16']">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ title }}</h1>
            <p v-if="subtitle" class="text-xl max-w-2xl mx-auto mb-8">
                {{ subtitle }}
            </p>
            <slot name="content" />
            <div v-if="showAction" class="mt-8">
                <a
                    :href="actionHref"
                    class="bg-yellow-500 hover:bg-yellow-400 text-blue-900 font-bold py-4 px-8 rounded-lg text-lg transition-colors inline-block"
                >
                    {{ actionText }}
                </a>
            </div>
            <slot name="actions" />
        </div>
    </section>
</template>
