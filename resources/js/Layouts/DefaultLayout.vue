<script setup lang="ts">

import Navbar from "@/Components/Navbar.vue";
</script>

<template>
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
