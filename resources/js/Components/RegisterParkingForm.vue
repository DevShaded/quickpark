<script setup lang="ts">
import ErrorCard from "@/Components/ErrorCard.vue";
import SuccessCard from "@/Components/SuccessCard.vue";
import { useForm, usePage } from '@inertiajs/vue3';
import { XCircleIcon, CheckCircleIcon } from '@heroicons/vue/20/solid'

const page = usePage();

const form = useForm({
    license_plate: '',
});

// Function to format input while typing
const formatLicensePlate = () => {
    if (!form.license_plate) return;

    // Remove all spaces and enforce uppercase
    let rawValue = form.license_plate.replace(/\s+/g, '').toUpperCase();

    // Add space between letters and numbers (assuming 2 letters followed by numbers)
    form.license_plate = rawValue.replace(/^([A-Z]{2})(\d.*)$/, '$1 $2');
};

// Function to submit form
const submitForm = () => {
    if (form.license_plate) {
        // Remove spaces before submitting
        form.license_plate = form.license_plate.replace(/\s+/g, '');
    }
    form.post('/park', {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
};
</script>

<template>
    <div>
        <div class="flex items-center justify-center">
            <div class="flex items-center rounded-lg border-2 border-black bg-white shadow-md">
                <div class="ltr">
                    <div class="flex w-20 items-center justify-center rounded-s-lg bg-blue-600 p-6 text-white">
                        <div class="text-center">
                            <div class="relative mx-auto mb-3 h-9 w-10">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 22 16">
                                    <rect width="22" height="16" fill="#ba0c2f" />
                                    <path d="M0,8h22M8,0v16" stroke="#fff" stroke-width="4" />
                                    <path d="M0,8h22M8,0v16" stroke="#2563EB" stroke-width="2" />
                                </svg>
                            </div>
                            <div class="text-2xl font-bold">N</div>
                        </div>
                    </div>
                </div>

                <form @submit.prevent="submitForm" class="flex flex-1 items-center">
                    <input
                        id="formattedInput"
                        name="license_plate"
                        type="text"
                        v-model="form.license_plate"
                        @input="formatLicensePlate"
                        pattern="[A-Z]{2}\s?\d{5}"
                        placeholder="AB 12345"
                        class="placeholder-center w-full border-none text-center text-4xl font-bold uppercase text-black placeholder-gray-500 outline-none focus:ring-0"
                        maxlength="8"
                        required
                    />

                    <button type="submit" :disabled="form.processing"
                            class="flex h-32 w-20 cursor-pointer items-center justify-center bg-blue-600 text-white disabled:cursor-not-allowed disabled:bg-gray-400 disabled:opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 19a8 8 0 100-16 8 8 0 000 16zM21 21l-4.35-4.35" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <div v-if="page.props.flash.success">
            <SuccessCard :success="page.props.flash.success" />
        </div>

        <div v-if="page.props.flash.error">
            <ErrorCard :error="page.props.flash.error" />
        </div>


        <div
            v-if="form.errors.license_plate"
            class="flex items-center justify-center my-12"
        >
            <div class="rounded-md bg-red-50 p-4">
                <div class="flex">
                    <div class="shrink-0">
                        <XCircleIcon class="size-5 text-red-400" aria-hidden="true" />
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">Det var ett problem med din registrering</h3>
                        <div class="mt-2 text-sm text-red-700">
                            <ul role="list" class="list-disc space-y-1 pl-5">
                                <li>{{ form.errors.license_plate }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
