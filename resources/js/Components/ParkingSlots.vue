<script setup lang="ts">
export interface ParkingSlotsEntity {
    id: number;
    slot_number: string;
    status: string;
}

defineProps<{
    parkingSlots: {
        data: ParkingSlotsEntity[];
    };
}>();
</script>

<template>
    <div class="max-w-xl mx-auto mt-16">
        <p class="text-lg text-gray-600">Parkeringsplasser som er ledig:</p>
        <ul
            v-if="parkingSlots.length > 0"
            class="divide-y divide-gray-200 rounded-lg border border-gray-200 bg-white"
        >
            <li v-for="slot in parkingSlots" class="flex items-center justify-between p-4">
                <span class="mr-1 text-sm font-semibold">{{ slot.slot_number }}</span>
                <span class="text-sm font-medium text-emerald-500">{{ slot.status }}</span>
            </li>
        </ul>
        <p v-else class="text-lg text-gray-600 font-bold">Ingen parkeringsplasser er ledig :(</p>
    </div>
</template>

<style scoped>

</style>
