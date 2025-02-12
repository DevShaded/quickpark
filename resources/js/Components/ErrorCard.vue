<script setup lang="ts">
import { XCircleIcon } from "@heroicons/vue/20/solid";

defineProps<{
    error: string;
}>();
</script>

<template>
    <section class="flex items-center justify-center my-12">
        <div class="rounded-md bg-red-50 p-4">
            <div class="flex">
                <div class="shrink-0">
                    <XCircleIcon class="size-5 text-red-400" aria-hidden="true" />
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">Det var ett problem med din registrering</h3>
                    <div class="mt-2 text-sm text-red-700">
                        <p class="font-medium">{{ error }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>

</style>
