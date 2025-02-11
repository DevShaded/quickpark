<script setup lang="ts">
import Navbar from "@/Components/Navbar.vue";
import { Head } from "@inertiajs/vue3";

defineProps<{
    title: string;
    description: string;
}>();
</script>

<template>
    <Head>
        <title>{{ title }}</title>
        <meta name="description" content="{{ description }}">
    </Head>
    <div>
        <header>
            <Navbar />
        </header>

        <main class="container mx-auto px-4 pb-12 lg:px-8 xl:max-w-7xl">
            <slot />
        </main>
    </div>
</template>

<style scoped>

</style>
