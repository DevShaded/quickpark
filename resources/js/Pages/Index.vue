<script setup lang="ts">
import ParkingSlots from "@/Components/ParkingSlots.vue";
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import RegisterParkingForm from "@/Components/RegisterParkingForm.vue";

export interface ParkingSlotsEntity {
    id: number;
    slot_number: string;
    status: string;
}

defineProps<{
    availableParkingSlots: number;
    parkingSlots: {
        data: ParkingSlotsEntity[];
    };
}>();
</script>

<template>
    <DefaultLayout>
        <section class="text-center my-12">
            <h1 class="text-2xl md:text-4xl font-semibold text-gray-900">Registerer din bil for parkering!</h1>
            <p class="text-lg text-gray-600">Fyll i ditt registreringsnummer nedenfor!</p>

            <div class="mt-8 w-fit mx-auto">
                <div
                    class="flex justify-between rounded-sm bg-gray-100 p-4 text-gray-700 md:p-5"
                >
                    <p>Ledige parkeringsplasser: {{ availableParkingSlots }}</p>
                </div>
            </div>
        </section>

        <RegisterParkingForm />

        <ParkingSlots :parking-slots="parkingSlots.data" />
    </DefaultLayout>
</template>

<style scoped>

</style>
