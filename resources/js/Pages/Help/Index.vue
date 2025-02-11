<script setup lang="ts">
import FaqItem from "@/Components/FaqItem.vue";
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import { ref } from "vue";

const faqs = ref([
    {
        question: 'Hvor lenge kan jeg parkere?',
        answer:
            'Fra du registrer deg kan du parkere i 2 timer. Etter 2 timer må du registrere deg på nytt.',
    },
    {
        question: 'Hvordan kan jeg betale for parkeringen?',
        answer:
            'Parkering er gratis for alle. Du trenger ikke å betale for parkeringen.',
    },
    {
        question: 'Hvordan kan jeg endre registreringsnummeret mitt?',
        answer:
            'Bare legg til et nytt registreringsnummer i skjemaet og send inn.',
    },
]);
</script>

<template>
    <DefaultLayout description="ds" title="fd">
        <div
            class="container mx-auto space-y-16 px-4 py-16 lg:flex lg:justify-between lg:gap-8 lg:space-y-0 lg:px-8 lg:py-32 xl:max-w-7xl"
        >
            <div class="text-center lg:text-left">
                <div class="mb-1 text-sm font-bold tracking-wider text-blue-600 uppercase">
                    Vi hjelper deg!
                </div>
                <h2 class="mb-4 text-4xl font-black text-black">Spørsmål og svar</h2>
            </div>

            <div class="space-y-8 lg:w-3/5 lg:flex-none">
                <FaqItem v-for="(faq, index) in faqs" :key="index" :question="faq.question" :answer="faq.answer" />
            </div>
        </div>
    </DefaultLayout>
</template>

<style scoped>

</style>
