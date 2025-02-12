<script setup lang="ts">
import { CheckCircleIcon } from "@heroicons/vue/20/solid";

defineProps<{
    success: string;
}>();
</script>

<template>
    <div
        class="flex items-center justify-center my-12"
    >
        <div class="rounded-md bg-green-50 p-4">
            <div class="flex">
                <div class="shrink-0">
                    <CheckCircleIcon class="size-5 text-green-400" aria-hidden="true" />
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-green-800">Din bil har nå blitt registrert!</h3>
                    <div class="mt-2 text-sm text-green-700">
                        <p class="font-medium">{{ success }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
