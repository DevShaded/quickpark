<script setup lang="ts">
defineProps<{
    question: string;
    answer: string;
}>();
</script>

<template>
    <div>
        <h4 class="mb-2 font-semibold">{{ question }}</h4>
        <p class="leading-relaxed text-gray-600">
            {{ answer }}
        </p>
    </div>
</template>
